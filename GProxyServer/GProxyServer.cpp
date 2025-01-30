#include "GProxyServer.h"
#include "xDBConnPool.h"
#include "xNetProcessor.h"
#include "RedisManager.h"
#include "CommonConfig.h"

GProxyServer::GProxyServer(OptArgs &args) : xServer(args), m_oOneMinTimer(60)
{
}

void GProxyServer::v_final()
{
}

bool GProxyServer::init()
{
  if (!addDataBase(RO_DATABASE_NAME, false))
  {
    XERR << "[Carregar informações do RO], falha ao inicializar a conexão com o banco de dados:" << RO_DATABASE_NAME << XEND;
    return false;
  }
  XLOG << "[Carregar informações do RO], carregando banco de dados" << RO_DATABASE_NAME << XEND;

  xField *field = getDBConnPool().getField(RO_DATABASE_NAME, "proxy"); // Carregar ao iniciar
  if (field)
  {
    char where[128];
    bzero(where, sizeof(where));
    snprintf(where, sizeof(where), "id = 0");

    xRecordSet set;
    QWORD ret = getDBConnPool().exeSelect(field, set, (const char *)where, NULL);
    if (QWORD_MAX != ret)
    {
      if (ret)
      {
        setServerPort(set[0].get<DWORD>("port"));
        XLOG << "[Carregar informações do Proxy], carregando porta:" << set[0].get<DWORD>("port") << XEND;
      }
    }
    else
    {
      return false;
    }
  }

  if (!listen())
  {
    XERR << "[" << getServerName() << "], falha ao escutar Zone" << XEND;
    return false;
  }

  {
    const xLuaData& data = getBranchConfig().getData("Redis");
    RedisManager::getMe().init(data.getTableString("ip"), data.getTableString("password"), data.getTableInt("port"));
  }

  return true;
}


void GProxyServer::v_closeNp(xNetProcessor* np)
{
  if (!np) return;

  for (auto it = m_oProxyList.begin(); it != m_oProxyList.end(); ++it)
  {
    if (it->second.m_pNetProcessor == np)
    {
      XLOG << "[Conexão]" << "Deletar" << it->first << np << XEND;
      m_oProxyList.erase(it);
      break;
    }
  }
}

bool GProxyServer::v_callback()
{
  switch (getServerState())
  {
    case ServerState::create:
      {
        setServerState(ServerState::init);

        return true;
      }
      break;
    case ServerState::init:
      {
        if (!init()) stop();

        setServerState(ServerState::run);

        return true;
      }
      break;
    case ServerState::run:
      {
        return true;
      }
      break;
    case ServerState::stop:
    case ServerState::finish:
      {
        return false;
      }
      break;
    default:
      break;
  }
  return false;
}

void GProxyServer::v_timetick()
{
  xTime oFrameTimer;

  xServer::v_timetick();

  QWORD _e = oFrameTimer.uElapse();
  if (_e > 30000)
    XLOG << "[Tempo de quadro - timetick]," << _e << " microssegundos" << XEND;

  oFrameTimer.elapseStart();
  process();
  _e = oFrameTimer.uElapse();
  if (_e > 30000)
    XLOG << "[Tempo de quadro - process]," << _e << " microssegundos" << XEND;

  if (m_oOneMinTimer.timeUp(now()))
  {
    print();
  }
}

void GProxyServer::process()
{
  for (auto &it : m_oProxyList)
  {
    xNetProcessor *np = it.second.m_pNetProcessor;
    CmdPair *cmd = np->getCmd();
    while (cmd)
    {
      m_oMessageStat.start(((xCommand *)cmd->second)->cmd, ((xCommand *)cmd->second)->param);
      if (!doCmd(np, cmd->second, cmd->first))
      {
        XDBG << "[Erro no processamento da mensagem]," << inet_ntoa(np->getIP()) << "," << np->getPort() << "," << ((xCommand *)cmd->second)->cmd << "," << ((xCommand *)cmd->second)->param << XEND;
      }
      else
      {
        // XDBG("[Processamento da mensagem], mensagem processada, %u, %u", ((xCommand *)cmd->second)->cmd, ((xCommand *)cmd->second)->param);
      }
      m_oMessageStat.end();
      np->popCmd();
      cmd = np->getCmd();
    }
  }
}

void GProxyServer::print()
{
  DWORD total = 0;
  std::map<DWORD, DWORD> groupCount;
  std::map<DWORD, DWORD> portCount;
  for (auto &it : m_oProxyList)
  {
    DWORD groupid = atoi(it.first.c_str()) / 10000 % 10;
    DWORD port = atoi(it.first.c_str()) / 100000;

    total += it.second.m_dwTaskNum;
    groupCount[groupid] += it.second.m_dwTaskNum;
    portCount[port] += it.second.m_dwTaskNum;
    XLOG << "[Estatísticas de conexão]" << "id:" << it.first << "número de conexões:" << it.second.m_dwTaskNum << XEND;
  }

  for (auto &it : groupCount)
  {
    XLOG << "[Estatísticas de conexão por grupo]" << "grupo:" << it.first << "número de conexões:" << it.second << XEND;
  }
  for (auto &it : portCount)
  {
    XLOG << "[Estatísticas de conexão por porta]" << "porta:" << it.first << "número de conexões:" << it.second << XEND;
  }

  XLOG << "[Estatísticas totais de conexão]" << "número de conexões:" << total << XEND;
}

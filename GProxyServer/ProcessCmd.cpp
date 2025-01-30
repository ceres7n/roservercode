#include "GProxyServer.h"
#include "xNetProcessor.h"

bool GProxyServer::doCmd(xNetProcessor* np, unsigned char* buf, unsigned short len)
{
  if (!np || !buf || !len || len < sizeof(xCommand)) return false;

  xCommand* cmd = (xCommand*)buf;

  switch (cmd->cmd)
  {
    case Cmd::SYSTEM_PROTOCMD:
      {
        using namespace Cmd;
        switch (cmd->param)
        {
          case INFO_PROXY_SYSCMD:
            {
              PARSE_CMD_PROTOBUF(InfoProxySystemCmd, rev);

              std::string id = rev.proxyid();

              m_oProxyList[id].m_dwTaskNum = rev.tasknum();

              XLOG << "[Proxy]" << "id:" << id << "Número de Tarefas:" << rev.tasknum() << XEND;
              return true;
            }
            break;
          case REGIST_PROXY_SYSCMD:
            {
              PARSE_CMD_PROTOBUF(RegistProxySystemCmd, rev);

              if (!inVerifyList(np))
              {
                return true;
              }
              removeVerifyList(np);

              std::string id = rev.proxyid();
              auto it = m_oProxyList.find(id);
              if (it != m_oProxyList.end())
              {
                if (it->second.m_pNetProcessor != nullptr)
                {
                  XERR << "[Registro de Proxy]" << id << np << "Adição duplicada" << XEND;
                  addCloseList(np, TerminateMethod::terminate_active, "Registro de Proxy duplicado");
                  return true;
                }
              }

              m_oProxyList[id].m_pNetProcessor = np;
              np->sendCmd(buf, len);
              XLOG << "[Registro de Proxy]" << id << np << "Registro bem-sucedido" << XEND;

              return true;
            }
            break;
          default:
            break;
        }
      }
      break;
    default:
      break;
  }
  return false;
}

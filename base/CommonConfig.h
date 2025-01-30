#pragma once

#include "xSingleton.h"
#include "xLuaTable.h"

struct ActiveOnline
{
  DWORD dwActive = 0;
  DWORD dwOnline = 0;
};

enum ELanguageType
{
  ELANGUAGE_Afrikaans = 0,
  ELANGUAGE_Arabic = 1,
  ELANGUAGE_Basque = 2,
  ELANGUAGE_Belarusian = 3,
  ELANGUAGE_Bulgarian = 4,
  ELANGUAGE_Catalan = 5,
  ELANGUAGE_Chinese = 6,
  ELANGUAGE_Czech = 7,
  ELANGUAGE_Danish = 8,
  ELANGUAGE_Dutch = 9,
  ELANGUAGE_English = 10,
  ELANGUAGE_Estonian = 11,
  ELANGUAGE_Faroese = 12,
  ELANGUAGE_Finnish = 13,
  ELANGUAGE_French = 14,
  ELANGUAGE_German = 15,
  ELANGUAGE_Greek = 16,
  ELANGUAGE_Hebrew = 17,
  ELANGUAGE_Hungarian = 18,
  ELANGUAGE_Icelandic = 19,
  ELANGUAGE_Indonesian = 20,
  ELANGUAGE_Italian = 21,
  ELANGUAGE_Japanese = 22,
  ELANGUAGE_Korean = 23,
  ELANGUAGE_Latvian = 24,
  ELANGUAGE_Lithuanian = 25,
  ELANGUAGE_Norwegian = 26,
  ELANGUAGE_Polish = 27,
  ELANGUAGE_Portuguese = 28,
  ELANGUAGE_Romanian = 29,
  ELANGUAGE_Russian = 30,
  ELANGUAGE_SerboCroatian = 31,
  ELANGUAGE_Slovak = 32,
  ELANGUAGE_Slovenian = 33,
  ELANGUAGE_Spanish = 34,
  ELANGUAGE_Swedish = 35,
  ELANGUAGE_Thai = 36,
  ELANGUAGE_Turkish = 37,
  ELANGUAGE_Ukrainian = 38,
  ELANGUAGE_Vietnamese = 39,
  ELANGUAGE_CHINESE_SIMPLIFIED = 40,
  ELANGUAGE_CHINESE_TRADITIONAL = 41,
  ELANGUAGE_Unknown = 42,
};

class CommonConfig : public xSingleton<CommonConfig>
{
  public:
    CommonConfig();
    ~CommonConfig();
    bool loadConfig();
    bool loadLanguageConfig();

    bool IsTradeServerOpen() { return m_bOpenTradeServer; }
    bool IsGCharLoadDBNeed() const { return m_bGCharLoadDBNeed; }
  public:
    xLuaData m_oData;

  private:
    bool m_bOpenTradeServer = true;
    bool m_bGCharLoadDBNeed = true;

  private:
    std::map<DWORD, std::map<string, string>> m_oLanguageList;
  public:
    string getTranslateString(const string& content, DWORD language);

  public:
    // Detecção de frequência de mensagens
    //
    // Número máximo de mensagens
    static DWORD m_dwClientCmdMax;
    // Intervalo de detecção
    static DWORD m_dwClientCmdSec;
    // Máximo de usuários ativos ao criar personagem
    static DWORD m_dwActiveUserMax;
    // Máximo de usuários online ao criar personagem
    static DWORD m_dwOnlineUserMax;
    // Configuração de usuários ativos e online
    static std::map<DWORD, ActiveOnline> m_oActiveOnlineList;
    // Número de zonas abertas de uma vez
    static DWORD m_dwOnceOpenZoneNum;
    // Tempo de proteção de nova zona
    static DWORD m_dwNewZoneProtectiveTime;
    // Limite de pessoas no mapa
    static DWORD m_dwMaxScopeNum;
    static DWORD m_dwMaxFriendScopeNum;

    // Intervalo de envio de email do sistema online
    static DWORD m_dwMailSendMinTick;
    static DWORD m_dwMailSendMaxTick;
    static DWORD m_dwMailSendMaxCount;

    // Atraso de ação de habilidade
    static DWORD m_dwSkillDelayMs;
    // Tolerância de distância de sincronização de posição antes da habilidade
    static float m_fSkillSyncDis;
    // Ao atacar um alvo, se o alvo estiver se movendo, a velocidade de movimento afeta a tolerância de distância de lançamento da habilidade
    static float m_fEnemySpedErrDis;
    // Tempo de atraso na fila de habilidades
    static DWORD m_dwSkillQueueDelayMs;
    // Comprimento máximo da fila de erros de posição de habilidade
    static DWORD m_dwSkillDisQueueMax;
    // Tempo de contagem de tempo limite da fila de habilidades (s)
    static DWORD m_dwSkillQueueCntTime;
    // Tolerância de tempo de interrupção de habilidade (ms)
    static DWORD m_dwSkillBreakErr;
    // Tolerância de distância de movimento de habilidade
    static float m_fSkillMoveDisErr;
    // Tempo de exclusão de conta
    static std::map<DWORD, DWORD> m_mapDelCharTime;
    // Tempo de espera para exclusão de conta, em segundos
    static DWORD m_dwDelCharCD;
    // Protocolos ignorados na contagem
    static std::map<DWORD, TSetDWORD> m_mapIgnoreCmd;

    // Controle de frequência de envio de mensagens
    // Número máximo de mensagens de todos os tipos
    static DWORD m_dwClientCmdLimitMax;
    // Intervalo de detecção
    static DWORD m_dwClientCmdLimitSec;
    // Número máximo de mensagens para números de mensagem específicos
    static std::map<DWORD, DWORD> m_mapClientCmdLimit;

    // Tempo de processamento de carga social
    static DWORD m_dwSocialLoadTime;
    // Tempo limite de processamento de quadros de guilda
    static DWORD m_dwGuildFrameOvertime;
    // Interruptor de otimização de guilda
    static bool m_bGuildOptOpen;
    
    // Senha de segurança
    static DWORD m_dwPwdFailTimes;
    static DWORD m_dwPwdIntervalTime;

    // Abertura de arena de combate
    bool m_bPvpLLH = true;
    // Arena de combate Lobo do Deserto
    bool m_bPvpSMZL = true;
    // Arena de combate Metal Brilhante
    bool m_bPvpHLJS = true;

    // Valor de autenticação upyun
    static string m_strUpyunAuthValue;
    // API de formulário upyun
    static string m_strUpyunPwd;
    static bool upyun_form_str(std::string savekey, std::string &out_policy, std::string &out_signature, std::string type = "jpg");

    // Lista branca de comandos GM para a filial tf
    static std::set<QWORD> m_setTFGMWhiteList;

    // ID da plataforma do servidor de verificação
    static DWORD m_dwVerifyServerPlatID;

    // Filtro de chat
    static DWORD m_dwChatFilterListSize;
    static DWORD m_dwChatFilterTimeout;

    static string m_strLoginSign;
    static string m_strSafeDeviceSign;
    static string m_strAuthorizeSign;
    
    // Verificação de nível de mudança de linha
    static bool m_bJumpZoneCheckLevel;

    static DWORD m_dwFluentLogCount;
    static DWORD m_dwFluentRetryCount;

    // Comando GM de guilda
    static DWORD m_dwGuildGMFlushTick;

    // Intervalo de envio de erro de lua
    static DWORD m_dwLuaAlterCD;

    // Limite de expulsão de instância por segundo
    static DWORD m_dwOneSecMaxKickUserNum;

    // Impressão de duração de execução de buff
    static DWORD m_dwBuffExecPrintTime;

    // Impressão de duração de execução de habilidade
    static DWORD m_dwSkillExecPrintTime;
    
    // Idioma padrão
    static ELanguageType m_eDefaultLanguage;
    
    // Interruptor de cálculo de atributos
    static bool m_bLua;

    // Nome da cena especial para batalha GVG
    static string m_strSuperGvgSceneName;

    // Intervalo de atualização de atributos para batalha GVG
    static DWORD m_dwSuperGvgRefreshInterval;

    static DWORD getDelCharTime(DWORD dwLv)
    {
      for (auto &m : m_mapDelCharTime)
      {
        if (dwLv <= m.first)
          return m.second;
      }
      return DWORD_MAX;
    }

    static bool isIngoreCmd(DWORD dwCmd, DWORD dwParam)
    {
      auto m = m_mapIgnoreCmd.find(dwCmd);
      if (m != m_mapIgnoreCmd.end())
        return m->second.find(dwParam) != m->second.end();
      return false;
    }

    static DWORD getCmdLimit(DWORD cmd, DWORD param)
    {
      auto limit = m_mapClientCmdLimit.find((cmd<<16)+param);
      if (limit != m_mapClientCmdLimit.end())
        return limit->second;
      return m_dwClientCmdLimitMax;
    }

    static bool isInTFGMWhiteList(QWORD accid)
    {
      return m_setTFGMWhiteList.find(accid) != m_setTFGMWhiteList.end();
    }

    // Interruptor de backup de dados
    static bool m_bOpenRollback;

    // Agrupamento de jogadores
    static DWORD SCENE_USER_GROUP_NUM;

    // Sincronização de pacote
    static bool m_bPackSyncNew;
};

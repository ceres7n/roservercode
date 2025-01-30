#include <signal.h>
#include "GProxyServer.h"

void kill_handler(int s)
{
  thisServer->stop();
}

int main(int argc, char* argv[])
{
  signal(SIGTERM, kill_handler);
  signal(SIGSTOP, kill_handler);
  signal(SIGINT, kill_handler);

  OptArgs args;
  args.get(argc, argv);

  thisServer = NEW GProxyServer(args);

  if (thisServer)
  {
    thisServer->run();

    SAFE_DELETE(thisServer);
  }
  else
    XERR << "Erro nos parâmetros da linha de comando. Por favor, especifique -n ServerName" << XEND;
  return 0;
}

# GNU Make project makefile autogenerated by Premake
ifndef config
  config=debug
endif

ifndef verbose
  SILENT = @
endif

ifndef CC
  CC = gcc
endif

ifndef CXX
  CXX = g++
endif

ifndef AR
  AR = ar
endif

ifeq ($(config),debug)
  OBJDIR     = ../obj/Debug/libGuildServer
  TARGETDIR  = ../bin/Debug
  TARGET     = $(TARGETDIR)/libGuildServer.a
  DEFINES   += -D_GLIBCXX_USE_CXX11_ABI=0 -D_ALL_SUPER_GM -D_SQL_DEBUG -D_DEBUG -DDEBUG -D_ROBOT_DEBUG
  INCLUDES  += -I.. -I/usr/local/include -I/usr/local/include/mysql -I/usr/local/mysql/include -I/usr/include -I/usr/include/log4cxx -I/usr/include/libxml2 -I/usr/include/mysql -I../GuildServer -I../base -I../base/xlib -I../base/xlib/Recast -I../base/xlib/Detour -I../base/protobuf -I../base/config -I../Command -I../Common
  CPPFLAGS  += -MMD -MP $(DEFINES) $(INCLUDES)
  CFLAGS    += $(CPPFLAGS) $(ARCH) -g -std=c++0x -g3 -Wall -fno-strict-aliasing -fno-short-enums -fno-schedule-insns -pg $(DEBUG_FLAG)
  CXXFLAGS  += $(CFLAGS) 
  LDFLAGS   += -L/usr/local/lib -L/usr/local/mysql/lib -L/usr/lib -L/usr/lib/mysql -L/lib64 -L/usr/lib64 -L/usr/lib64/mysql
  LIBS      += -lxml2 -lpthread -lmysqlclient -llog4cxx -lprotobuf -lhiredis -ljansson -ljemalloc
  RESFLAGS  += $(DEFINES) $(INCLUDES) 
  LDDEPS    += 
  LINKCMD    = $(AR) -rcs $(TARGET) $(OBJECTS)
  define PREBUILDCMDS
  endef
  define PRELINKCMDS
  endef
  define POSTBUILDCMDS
  endef
endif

ifeq ($(config),release)
  OBJDIR     = ../obj/Release/libGuildServer
  TARGETDIR  = ../bin/Release
  TARGET     = $(TARGETDIR)/libGuildServer.a
  DEFINES   += -D_GLIBCXX_USE_CXX11_ABI=0 -DNDEBUG
  INCLUDES  += -I.. -I/usr/local/include -I/usr/local/include/mysql -I/usr/local/mysql/include -I/usr/include -I/usr/include/log4cxx -I/usr/include/libxml2 -I/usr/include/mysql -I../GuildServer -I../base -I../base/xlib -I../base/xlib/Recast -I../base/xlib/Detour -I../base/protobuf -I../base/config -I../Command -I../Common
  CPPFLAGS  += -MMD -MP $(DEFINES) $(INCLUDES)
  CFLAGS    += $(CPPFLAGS) $(ARCH) -g -std=c++0x -g3 -Wall -O2 -fno-strict-aliasing -fno-short-enums -fno-schedule-insns -Wno-unknown-pragmas
  CXXFLAGS  += $(CFLAGS) 
  LDFLAGS   += -L/usr/local/lib -L/usr/local/mysql/lib -L/usr/lib -L/usr/lib/mysql -L/lib64 -L/usr/lib64 -L/usr/lib64/mysql
  LIBS      += -lxml2 -lpthread -lmysqlclient -llog4cxx -lprotobuf -lhiredis -ljansson -ljemalloc
  RESFLAGS  += $(DEFINES) $(INCLUDES) 
  LDDEPS    += 
  LINKCMD    = $(AR) -rcs $(TARGET) $(OBJECTS)
  define PREBUILDCMDS
  endef
  define PRELINKCMDS
  endef
  define POSTBUILDCMDS
  endef
endif

ifeq ($(config),debug64)
  OBJDIR     = ../obj/x64/Debug/libGuildServer
  TARGETDIR  = ../bin/Debug
  TARGET     = $(TARGETDIR)/libGuildServer.a
  DEFINES   += -D_GLIBCXX_USE_CXX11_ABI=0 -D_ALL_SUPER_GM -D_SQL_DEBUG -D_DEBUG -DDEBUG -D_ROBOT_DEBUG
  INCLUDES  += -I.. -I/usr/local/include -I/usr/local/include/mysql -I/usr/local/mysql/include -I/usr/include -I/usr/include/log4cxx -I/usr/include/libxml2 -I/usr/include/mysql -I../GuildServer -I../base -I../base/xlib -I../base/xlib/Recast -I../base/xlib/Detour -I../base/protobuf -I../base/config -I../Command -I../Common
  CPPFLAGS  += -MMD -MP $(DEFINES) $(INCLUDES)
  CFLAGS    += $(CPPFLAGS) $(ARCH) -g -m64 -std=c++0x -g3 -Wall -fno-strict-aliasing -fno-short-enums -fno-schedule-insns -pg $(DEBUG_FLAG)
  CXXFLAGS  += $(CFLAGS) 
  LDFLAGS   += -m64 -L/usr/lib64 -L/usr/local/lib -L/usr/local/mysql/lib -L/usr/lib -L/usr/lib/mysql -L/lib64 -L/usr/lib64 -L/usr/lib64/mysql
  LIBS      += -lxml2 -lpthread -lmysqlclient -llog4cxx -lprotobuf -lhiredis -ljansson -ljemalloc
  RESFLAGS  += $(DEFINES) $(INCLUDES) 
  LDDEPS    += 
  LINKCMD    = $(AR) -rcs $(TARGET) $(OBJECTS)
  define PREBUILDCMDS
  endef
  define PRELINKCMDS
  endef
  define POSTBUILDCMDS
  endef
endif

ifeq ($(config),release64)
  OBJDIR     = ../obj/x64/Release/libGuildServer
  TARGETDIR  = ../bin/Release
  TARGET     = $(TARGETDIR)/libGuildServer.a
  DEFINES   += -D_GLIBCXX_USE_CXX11_ABI=0 -DNDEBUG
  INCLUDES  += -I.. -I/usr/local/include -I/usr/local/include/mysql -I/usr/local/mysql/include -I/usr/include -I/usr/include/log4cxx -I/usr/include/libxml2 -I/usr/include/mysql -I../GuildServer -I../base -I../base/xlib -I../base/xlib/Recast -I../base/xlib/Detour -I../base/protobuf -I../base/config -I../Command -I../Common
  CPPFLAGS  += -MMD -MP $(DEFINES) $(INCLUDES)
  CFLAGS    += $(CPPFLAGS) $(ARCH) -g -m64 -std=c++0x -g3 -Wall -O2 -fno-strict-aliasing -fno-short-enums -fno-schedule-insns -Wno-unknown-pragmas
  CXXFLAGS  += $(CFLAGS) 
  LDFLAGS   += -m64 -L/usr/lib64 -L/usr/local/lib -L/usr/local/mysql/lib -L/usr/lib -L/usr/lib/mysql -L/lib64 -L/usr/lib64 -L/usr/lib64/mysql
  LIBS      += -lxml2 -lpthread -lmysqlclient -llog4cxx -lprotobuf -lhiredis -ljansson -ljemalloc
  RESFLAGS  += $(DEFINES) $(INCLUDES) 
  LDDEPS    += 
  LINKCMD    = $(AR) -rcs $(TARGET) $(OBJECTS)
  define PREBUILDCMDS
  endef
  define PRELINKCMDS
  endef
  define POSTBUILDCMDS
  endef
endif

OBJECTS := \
	$(OBJDIR)/GMCommandMgr.o \
	$(OBJDIR)/Guild.o \
	$(OBJDIR)/GuildArtifact.o \
	$(OBJDIR)/GuildBuilding.o \
	$(OBJDIR)/GuildChallenge.o \
	$(OBJDIR)/GuildEvent.o \
	$(OBJDIR)/GuildGvg.o \
	$(OBJDIR)/GuildIconManager.o \
	$(OBJDIR)/GuildManager.o \
	$(OBJDIR)/GuildMember.o \
	$(OBJDIR)/GuildMisc.o \
	$(OBJDIR)/GuildPack.o \
	$(OBJDIR)/GuildPhoto.o \
	$(OBJDIR)/GuildQuest.o \
	$(OBJDIR)/GuildServer.o \
	$(OBJDIR)/GuildShop.o \
	$(OBJDIR)/GuildTreasure.o \
	$(OBJDIR)/GuildWelfare.o \
	$(OBJDIR)/ProcessCmd.o \

RESOURCES := \

SHELLTYPE := msdos
ifeq (,$(ComSpec)$(COMSPEC))
  SHELLTYPE := posix
endif
ifeq (/bin,$(findstring /bin,$(SHELL)))
  SHELLTYPE := posix
endif

.PHONY: clean prebuild prelink

all: $(TARGETDIR) $(OBJDIR) prebuild prelink $(TARGET)
	@:

$(TARGET): $(GCH) $(OBJECTS) $(LDDEPS) $(RESOURCES)
	@echo Linking libGuildServer
	$(SILENT) $(LINKCMD)
	$(POSTBUILDCMDS)

$(TARGETDIR):
	@echo Creating $(TARGETDIR)
ifeq (posix,$(SHELLTYPE))
	$(SILENT) mkdir -p $(TARGETDIR)
else
	$(SILENT) mkdir $(subst /,\\,$(TARGETDIR))
endif

$(OBJDIR):
	@echo Creating $(OBJDIR)
ifeq (posix,$(SHELLTYPE))
	$(SILENT) mkdir -p $(OBJDIR)
else
	$(SILENT) mkdir $(subst /,\\,$(OBJDIR))
endif

clean:
	@echo Cleaning libGuildServer
ifeq (posix,$(SHELLTYPE))
	$(SILENT) rm -f  $(TARGET)
	$(SILENT) rm -rf $(OBJDIR)
else
	$(SILENT) if exist $(subst /,\\,$(TARGET)) del $(subst /,\\,$(TARGET))
	$(SILENT) if exist $(subst /,\\,$(OBJDIR)) rmdir /s /q $(subst /,\\,$(OBJDIR))
endif

prebuild:
	$(PREBUILDCMDS)

prelink:
	$(PRELINKCMDS)

ifneq (,$(PCH))
$(GCH): $(PCH)
	@echo $(notdir $<)
	-$(SILENT) cp $< $(OBJDIR)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
endif

$(OBJDIR)/GMCommandMgr.o: ../GuildServer/GMCommandMgr.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/Guild.o: ../GuildServer/Guild.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildArtifact.o: ../GuildServer/GuildArtifact.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildBuilding.o: ../GuildServer/GuildBuilding.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildChallenge.o: ../GuildServer/GuildChallenge.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildEvent.o: ../GuildServer/GuildEvent.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildGvg.o: ../GuildServer/GuildGvg.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildIconManager.o: ../GuildServer/GuildIconManager.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildManager.o: ../GuildServer/GuildManager.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildMember.o: ../GuildServer/GuildMember.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildMisc.o: ../GuildServer/GuildMisc.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildPack.o: ../GuildServer/GuildPack.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildPhoto.o: ../GuildServer/GuildPhoto.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildQuest.o: ../GuildServer/GuildQuest.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildServer.o: ../GuildServer/GuildServer.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildShop.o: ../GuildServer/GuildShop.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildTreasure.o: ../GuildServer/GuildTreasure.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/GuildWelfare.o: ../GuildServer/GuildWelfare.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"
$(OBJDIR)/ProcessCmd.o: ../GuildServer/ProcessCmd.cpp
	@echo $(notdir $<)
	$(SILENT) $(CXX) $(CXXFLAGS) -o "$@" -c "$<"

-include $(OBJECTS:%.o=%.d)

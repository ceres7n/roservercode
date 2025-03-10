// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: SessionWeather.proto

#define INTERNAL_SUPPRESS_PROTOBUF_FIELD_DEPRECATION
#include "SessionWeather.pb.h"

#include <algorithm>

#include <google/protobuf/stubs/common.h>
#include <google/protobuf/stubs/once.h>
#include <google/protobuf/io/coded_stream.h>
#include <google/protobuf/wire_format_lite_inl.h>
#include <google/protobuf/descriptor.h>
#include <google/protobuf/generated_message_reflection.h>
#include <google/protobuf/reflection_ops.h>
#include <google/protobuf/wire_format.h>
// @@protoc_insertion_point(includes)

namespace Cmd {

namespace {

const ::google::protobuf::Descriptor* WeatherChange_descriptor_ = NULL;
const ::google::protobuf::internal::GeneratedMessageReflection*
  WeatherChange_reflection_ = NULL;
const ::google::protobuf::Descriptor* SkyChange_descriptor_ = NULL;
const ::google::protobuf::internal::GeneratedMessageReflection*
  SkyChange_reflection_ = NULL;
const ::google::protobuf::EnumDescriptor* WeatherParam_descriptor_ = NULL;

}  // namespace


void protobuf_AssignDesc_SessionWeather_2eproto() {
  protobuf_AddDesc_SessionWeather_2eproto();
  const ::google::protobuf::FileDescriptor* file =
    ::google::protobuf::DescriptorPool::generated_pool()->FindFileByName(
      "SessionWeather.proto");
  GOOGLE_CHECK(file != NULL);
  WeatherChange_descriptor_ = file->message_type(0);
  static const int WeatherChange_offsets_[3] = {
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(WeatherChange, cmd_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(WeatherChange, param_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(WeatherChange, id_),
  };
  WeatherChange_reflection_ =
    new ::google::protobuf::internal::GeneratedMessageReflection(
      WeatherChange_descriptor_,
      WeatherChange::default_instance_,
      WeatherChange_offsets_,
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(WeatherChange, _has_bits_[0]),
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(WeatherChange, _unknown_fields_),
      -1,
      ::google::protobuf::DescriptorPool::generated_pool(),
      ::google::protobuf::MessageFactory::generated_factory(),
      sizeof(WeatherChange));
  SkyChange_descriptor_ = file->message_type(1);
  static const int SkyChange_offsets_[4] = {
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(SkyChange, cmd_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(SkyChange, param_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(SkyChange, id_),
    GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(SkyChange, sec_),
  };
  SkyChange_reflection_ =
    new ::google::protobuf::internal::GeneratedMessageReflection(
      SkyChange_descriptor_,
      SkyChange::default_instance_,
      SkyChange_offsets_,
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(SkyChange, _has_bits_[0]),
      GOOGLE_PROTOBUF_GENERATED_MESSAGE_FIELD_OFFSET(SkyChange, _unknown_fields_),
      -1,
      ::google::protobuf::DescriptorPool::generated_pool(),
      ::google::protobuf::MessageFactory::generated_factory(),
      sizeof(SkyChange));
  WeatherParam_descriptor_ = file->enum_type(0);
}

namespace {

GOOGLE_PROTOBUF_DECLARE_ONCE(protobuf_AssignDescriptors_once_);
inline void protobuf_AssignDescriptorsOnce() {
  ::google::protobuf::GoogleOnceInit(&protobuf_AssignDescriptors_once_,
                 &protobuf_AssignDesc_SessionWeather_2eproto);
}

void protobuf_RegisterTypes(const ::std::string&) {
  protobuf_AssignDescriptorsOnce();
  ::google::protobuf::MessageFactory::InternalRegisterGeneratedMessage(
    WeatherChange_descriptor_, &WeatherChange::default_instance());
  ::google::protobuf::MessageFactory::InternalRegisterGeneratedMessage(
    SkyChange_descriptor_, &SkyChange::default_instance());
}

}  // namespace

void protobuf_ShutdownFile_SessionWeather_2eproto() {
  delete WeatherChange::default_instance_;
  delete WeatherChange_reflection_;
  delete SkyChange::default_instance_;
  delete SkyChange_reflection_;
}

void protobuf_AddDesc_SessionWeather_2eproto() {
  static bool already_here = false;
  if (already_here) return;
  already_here = true;
  GOOGLE_PROTOBUF_VERIFY_VERSION;

  ::Cmd::protobuf_AddDesc_xCmd_2eproto();
  ::google::protobuf::DescriptorPool::InternalAddGeneratedFile(
    "\n\024SessionWeather.proto\022\003Cmd\032\nxCmd.proto\""
    "\226\001\n\rWeatherChange\0228\n\003cmd\030\001 \001(\0162\014.Cmd.Com"
    "mand:\035SESSION_USER_WEATHER_PROTOCMD\022<\n\005p"
    "aram\030\002 \001(\0162\021.Cmd.WeatherParam:\032WEATHERPA"
    "RAM_WEATHERCHANGE\022\r\n\002id\030\003 \001(\r:\0010\"\236\001\n\tSky"
    "Change\0228\n\003cmd\030\001 \001(\0162\014.Cmd.Command:\035SESSI"
    "ON_USER_WEATHER_PROTOCMD\0228\n\005param\030\002 \001(\0162"
    "\021.Cmd.WeatherParam:\026WEATHERPARAM_SKYCHAN"
    "GE\022\r\n\002id\030\003 \001(\r:\0010\022\016\n\003sec\030\004 \001(\r:\0010*J\n\014Wea"
    "therParam\022\036\n\032WEATHERPARAM_WEATHERCHANGE\020"
    "\001\022\032\n\026WEATHERPARAM_SKYCHANGE\020\002", 429);
  ::google::protobuf::MessageFactory::InternalRegisterGeneratedFile(
    "SessionWeather.proto", &protobuf_RegisterTypes);
  WeatherChange::default_instance_ = new WeatherChange();
  SkyChange::default_instance_ = new SkyChange();
  WeatherChange::default_instance_->InitAsDefaultInstance();
  SkyChange::default_instance_->InitAsDefaultInstance();
  ::google::protobuf::internal::OnShutdown(&protobuf_ShutdownFile_SessionWeather_2eproto);
}

// Force AddDescriptors() to be called at static initialization time.
struct StaticDescriptorInitializer_SessionWeather_2eproto {
  StaticDescriptorInitializer_SessionWeather_2eproto() {
    protobuf_AddDesc_SessionWeather_2eproto();
  }
} static_descriptor_initializer_SessionWeather_2eproto_;
const ::google::protobuf::EnumDescriptor* WeatherParam_descriptor() {
  protobuf_AssignDescriptorsOnce();
  return WeatherParam_descriptor_;
}
bool WeatherParam_IsValid(int value) {
  switch(value) {
    case 1:
    case 2:
      return true;
    default:
      return false;
  }
}


// ===================================================================

#ifndef _MSC_VER
const int WeatherChange::kCmdFieldNumber;
const int WeatherChange::kParamFieldNumber;
const int WeatherChange::kIdFieldNumber;
#endif  // !_MSC_VER

WeatherChange::WeatherChange()
  : ::google::protobuf::Message() {
  SharedCtor();
  // @@protoc_insertion_point(constructor:Cmd.WeatherChange)
}

void WeatherChange::InitAsDefaultInstance() {
}

WeatherChange::WeatherChange(const WeatherChange& from)
  : ::google::protobuf::Message() {
  SharedCtor();
  MergeFrom(from);
  // @@protoc_insertion_point(copy_constructor:Cmd.WeatherChange)
}

void WeatherChange::SharedCtor() {
  _cached_size_ = 0;
  cmd_ = 53;
  param_ = 1;
  id_ = 0u;
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
}

WeatherChange::~WeatherChange() {
  // @@protoc_insertion_point(destructor:Cmd.WeatherChange)
  SharedDtor();
}

void WeatherChange::SharedDtor() {
  if (this != default_instance_) {
  }
}

void WeatherChange::SetCachedSize(int size) const {
  GOOGLE_SAFE_CONCURRENT_WRITES_BEGIN();
  _cached_size_ = size;
  GOOGLE_SAFE_CONCURRENT_WRITES_END();
}
const ::google::protobuf::Descriptor* WeatherChange::descriptor() {
  protobuf_AssignDescriptorsOnce();
  return WeatherChange_descriptor_;
}

const WeatherChange& WeatherChange::default_instance() {
  if (default_instance_ == NULL) protobuf_AddDesc_SessionWeather_2eproto();
  return *default_instance_;
}

WeatherChange* WeatherChange::default_instance_ = NULL;

WeatherChange* WeatherChange::New() const {
  return new WeatherChange;
}

void WeatherChange::Clear() {
  if (_has_bits_[0 / 32] & 7) {
    cmd_ = 53;
    param_ = 1;
    id_ = 0u;
  }
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
  mutable_unknown_fields()->Clear();
}

bool WeatherChange::MergePartialFromCodedStream(
    ::google::protobuf::io::CodedInputStream* input) {
#define DO_(EXPRESSION) if (!(EXPRESSION)) goto failure
  ::google::protobuf::uint32 tag;
  // @@protoc_insertion_point(parse_start:Cmd.WeatherChange)
  for (;;) {
    ::std::pair< ::google::protobuf::uint32, bool> p = input->ReadTagWithCutoff(127);
    tag = p.first;
    if (!p.second) goto handle_unusual;
    switch (::google::protobuf::internal::WireFormatLite::GetTagFieldNumber(tag)) {
      // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
      case 1: {
        if (tag == 8) {
          int value;
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   int, ::google::protobuf::internal::WireFormatLite::TYPE_ENUM>(
                 input, &value)));
          if (::Cmd::Command_IsValid(value)) {
            set_cmd(static_cast< ::Cmd::Command >(value));
          } else {
            mutable_unknown_fields()->AddVarint(1, value);
          }
        } else {
          goto handle_unusual;
        }
        if (input->ExpectTag(16)) goto parse_param;
        break;
      }

      // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_WEATHERCHANGE];
      case 2: {
        if (tag == 16) {
         parse_param:
          int value;
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   int, ::google::protobuf::internal::WireFormatLite::TYPE_ENUM>(
                 input, &value)));
          if (::Cmd::WeatherParam_IsValid(value)) {
            set_param(static_cast< ::Cmd::WeatherParam >(value));
          } else {
            mutable_unknown_fields()->AddVarint(2, value);
          }
        } else {
          goto handle_unusual;
        }
        if (input->ExpectTag(24)) goto parse_id;
        break;
      }

      // optional uint32 id = 3 [default = 0];
      case 3: {
        if (tag == 24) {
         parse_id:
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   ::google::protobuf::uint32, ::google::protobuf::internal::WireFormatLite::TYPE_UINT32>(
                 input, &id_)));
          set_has_id();
        } else {
          goto handle_unusual;
        }
        if (input->ExpectAtEnd()) goto success;
        break;
      }

      default: {
      handle_unusual:
        if (tag == 0 ||
            ::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_END_GROUP) {
          goto success;
        }
        DO_(::google::protobuf::internal::WireFormat::SkipField(
              input, tag, mutable_unknown_fields()));
        break;
      }
    }
  }
success:
  // @@protoc_insertion_point(parse_success:Cmd.WeatherChange)
  return true;
failure:
  // @@protoc_insertion_point(parse_failure:Cmd.WeatherChange)
  return false;
#undef DO_
}

void WeatherChange::SerializeWithCachedSizes(
    ::google::protobuf::io::CodedOutputStream* output) const {
  // @@protoc_insertion_point(serialize_start:Cmd.WeatherChange)
  // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
  if (has_cmd()) {
    ::google::protobuf::internal::WireFormatLite::WriteEnum(
      1, this->cmd(), output);
  }

  // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_WEATHERCHANGE];
  if (has_param()) {
    ::google::protobuf::internal::WireFormatLite::WriteEnum(
      2, this->param(), output);
  }

  // optional uint32 id = 3 [default = 0];
  if (has_id()) {
    ::google::protobuf::internal::WireFormatLite::WriteUInt32(3, this->id(), output);
  }

  if (!unknown_fields().empty()) {
    ::google::protobuf::internal::WireFormat::SerializeUnknownFields(
        unknown_fields(), output);
  }
  // @@protoc_insertion_point(serialize_end:Cmd.WeatherChange)
}

::google::protobuf::uint8* WeatherChange::SerializeWithCachedSizesToArray(
    ::google::protobuf::uint8* target) const {
  // @@protoc_insertion_point(serialize_to_array_start:Cmd.WeatherChange)
  // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
  if (has_cmd()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteEnumToArray(
      1, this->cmd(), target);
  }

  // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_WEATHERCHANGE];
  if (has_param()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteEnumToArray(
      2, this->param(), target);
  }

  // optional uint32 id = 3 [default = 0];
  if (has_id()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteUInt32ToArray(3, this->id(), target);
  }

  if (!unknown_fields().empty()) {
    target = ::google::protobuf::internal::WireFormat::SerializeUnknownFieldsToArray(
        unknown_fields(), target);
  }
  // @@protoc_insertion_point(serialize_to_array_end:Cmd.WeatherChange)
  return target;
}

int WeatherChange::ByteSize() const {
  int total_size = 0;

  if (_has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
    if (has_cmd()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::EnumSize(this->cmd());
    }

    // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_WEATHERCHANGE];
    if (has_param()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::EnumSize(this->param());
    }

    // optional uint32 id = 3 [default = 0];
    if (has_id()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::UInt32Size(
          this->id());
    }

  }
  if (!unknown_fields().empty()) {
    total_size +=
      ::google::protobuf::internal::WireFormat::ComputeUnknownFieldsSize(
        unknown_fields());
  }
  GOOGLE_SAFE_CONCURRENT_WRITES_BEGIN();
  _cached_size_ = total_size;
  GOOGLE_SAFE_CONCURRENT_WRITES_END();
  return total_size;
}

void WeatherChange::MergeFrom(const ::google::protobuf::Message& from) {
  GOOGLE_CHECK_NE(&from, this);
  const WeatherChange* source =
    ::google::protobuf::internal::dynamic_cast_if_available<const WeatherChange*>(
      &from);
  if (source == NULL) {
    ::google::protobuf::internal::ReflectionOps::Merge(from, this);
  } else {
    MergeFrom(*source);
  }
}

void WeatherChange::MergeFrom(const WeatherChange& from) {
  GOOGLE_CHECK_NE(&from, this);
  if (from._has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    if (from.has_cmd()) {
      set_cmd(from.cmd());
    }
    if (from.has_param()) {
      set_param(from.param());
    }
    if (from.has_id()) {
      set_id(from.id());
    }
  }
  mutable_unknown_fields()->MergeFrom(from.unknown_fields());
}

void WeatherChange::CopyFrom(const ::google::protobuf::Message& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

void WeatherChange::CopyFrom(const WeatherChange& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

bool WeatherChange::IsInitialized() const {

  return true;
}

void WeatherChange::Swap(WeatherChange* other) {
  if (other != this) {
    std::swap(cmd_, other->cmd_);
    std::swap(param_, other->param_);
    std::swap(id_, other->id_);
    std::swap(_has_bits_[0], other->_has_bits_[0]);
    _unknown_fields_.Swap(&other->_unknown_fields_);
    std::swap(_cached_size_, other->_cached_size_);
  }
}

::google::protobuf::Metadata WeatherChange::GetMetadata() const {
  protobuf_AssignDescriptorsOnce();
  ::google::protobuf::Metadata metadata;
  metadata.descriptor = WeatherChange_descriptor_;
  metadata.reflection = WeatherChange_reflection_;
  return metadata;
}


// ===================================================================

#ifndef _MSC_VER
const int SkyChange::kCmdFieldNumber;
const int SkyChange::kParamFieldNumber;
const int SkyChange::kIdFieldNumber;
const int SkyChange::kSecFieldNumber;
#endif  // !_MSC_VER

SkyChange::SkyChange()
  : ::google::protobuf::Message() {
  SharedCtor();
  // @@protoc_insertion_point(constructor:Cmd.SkyChange)
}

void SkyChange::InitAsDefaultInstance() {
}

SkyChange::SkyChange(const SkyChange& from)
  : ::google::protobuf::Message() {
  SharedCtor();
  MergeFrom(from);
  // @@protoc_insertion_point(copy_constructor:Cmd.SkyChange)
}

void SkyChange::SharedCtor() {
  _cached_size_ = 0;
  cmd_ = 53;
  param_ = 2;
  id_ = 0u;
  sec_ = 0u;
  ::memset(_has_bits_, 0, sizeof(_has_bits_));
}

SkyChange::~SkyChange() {
  // @@protoc_insertion_point(destructor:Cmd.SkyChange)
  SharedDtor();
}

void SkyChange::SharedDtor() {
  if (this != default_instance_) {
  }
}

void SkyChange::SetCachedSize(int size) const {
  GOOGLE_SAFE_CONCURRENT_WRITES_BEGIN();
  _cached_size_ = size;
  GOOGLE_SAFE_CONCURRENT_WRITES_END();
}
const ::google::protobuf::Descriptor* SkyChange::descriptor() {
  protobuf_AssignDescriptorsOnce();
  return SkyChange_descriptor_;
}

const SkyChange& SkyChange::default_instance() {
  if (default_instance_ == NULL) protobuf_AddDesc_SessionWeather_2eproto();
  return *default_instance_;
}

SkyChange* SkyChange::default_instance_ = NULL;

SkyChange* SkyChange::New() const {
  return new SkyChange;
}

void SkyChange::Clear() {
#define OFFSET_OF_FIELD_(f) (reinterpret_cast<char*>(      \
  &reinterpret_cast<SkyChange*>(16)->f) - \
   reinterpret_cast<char*>(16))

#define ZR_(first, last) do {                              \
    size_t f = OFFSET_OF_FIELD_(first);                    \
    size_t n = OFFSET_OF_FIELD_(last) - f + sizeof(last);  \
    ::memset(&first, 0, n);                                \
  } while (0)

  if (_has_bits_[0 / 32] & 15) {
    ZR_(id_, sec_);
    cmd_ = 53;
    param_ = 2;
  }

#undef OFFSET_OF_FIELD_
#undef ZR_

  ::memset(_has_bits_, 0, sizeof(_has_bits_));
  mutable_unknown_fields()->Clear();
}

bool SkyChange::MergePartialFromCodedStream(
    ::google::protobuf::io::CodedInputStream* input) {
#define DO_(EXPRESSION) if (!(EXPRESSION)) goto failure
  ::google::protobuf::uint32 tag;
  // @@protoc_insertion_point(parse_start:Cmd.SkyChange)
  for (;;) {
    ::std::pair< ::google::protobuf::uint32, bool> p = input->ReadTagWithCutoff(127);
    tag = p.first;
    if (!p.second) goto handle_unusual;
    switch (::google::protobuf::internal::WireFormatLite::GetTagFieldNumber(tag)) {
      // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
      case 1: {
        if (tag == 8) {
          int value;
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   int, ::google::protobuf::internal::WireFormatLite::TYPE_ENUM>(
                 input, &value)));
          if (::Cmd::Command_IsValid(value)) {
            set_cmd(static_cast< ::Cmd::Command >(value));
          } else {
            mutable_unknown_fields()->AddVarint(1, value);
          }
        } else {
          goto handle_unusual;
        }
        if (input->ExpectTag(16)) goto parse_param;
        break;
      }

      // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_SKYCHANGE];
      case 2: {
        if (tag == 16) {
         parse_param:
          int value;
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   int, ::google::protobuf::internal::WireFormatLite::TYPE_ENUM>(
                 input, &value)));
          if (::Cmd::WeatherParam_IsValid(value)) {
            set_param(static_cast< ::Cmd::WeatherParam >(value));
          } else {
            mutable_unknown_fields()->AddVarint(2, value);
          }
        } else {
          goto handle_unusual;
        }
        if (input->ExpectTag(24)) goto parse_id;
        break;
      }

      // optional uint32 id = 3 [default = 0];
      case 3: {
        if (tag == 24) {
         parse_id:
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   ::google::protobuf::uint32, ::google::protobuf::internal::WireFormatLite::TYPE_UINT32>(
                 input, &id_)));
          set_has_id();
        } else {
          goto handle_unusual;
        }
        if (input->ExpectTag(32)) goto parse_sec;
        break;
      }

      // optional uint32 sec = 4 [default = 0];
      case 4: {
        if (tag == 32) {
         parse_sec:
          DO_((::google::protobuf::internal::WireFormatLite::ReadPrimitive<
                   ::google::protobuf::uint32, ::google::protobuf::internal::WireFormatLite::TYPE_UINT32>(
                 input, &sec_)));
          set_has_sec();
        } else {
          goto handle_unusual;
        }
        if (input->ExpectAtEnd()) goto success;
        break;
      }

      default: {
      handle_unusual:
        if (tag == 0 ||
            ::google::protobuf::internal::WireFormatLite::GetTagWireType(tag) ==
            ::google::protobuf::internal::WireFormatLite::WIRETYPE_END_GROUP) {
          goto success;
        }
        DO_(::google::protobuf::internal::WireFormat::SkipField(
              input, tag, mutable_unknown_fields()));
        break;
      }
    }
  }
success:
  // @@protoc_insertion_point(parse_success:Cmd.SkyChange)
  return true;
failure:
  // @@protoc_insertion_point(parse_failure:Cmd.SkyChange)
  return false;
#undef DO_
}

void SkyChange::SerializeWithCachedSizes(
    ::google::protobuf::io::CodedOutputStream* output) const {
  // @@protoc_insertion_point(serialize_start:Cmd.SkyChange)
  // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
  if (has_cmd()) {
    ::google::protobuf::internal::WireFormatLite::WriteEnum(
      1, this->cmd(), output);
  }

  // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_SKYCHANGE];
  if (has_param()) {
    ::google::protobuf::internal::WireFormatLite::WriteEnum(
      2, this->param(), output);
  }

  // optional uint32 id = 3 [default = 0];
  if (has_id()) {
    ::google::protobuf::internal::WireFormatLite::WriteUInt32(3, this->id(), output);
  }

  // optional uint32 sec = 4 [default = 0];
  if (has_sec()) {
    ::google::protobuf::internal::WireFormatLite::WriteUInt32(4, this->sec(), output);
  }

  if (!unknown_fields().empty()) {
    ::google::protobuf::internal::WireFormat::SerializeUnknownFields(
        unknown_fields(), output);
  }
  // @@protoc_insertion_point(serialize_end:Cmd.SkyChange)
}

::google::protobuf::uint8* SkyChange::SerializeWithCachedSizesToArray(
    ::google::protobuf::uint8* target) const {
  // @@protoc_insertion_point(serialize_to_array_start:Cmd.SkyChange)
  // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
  if (has_cmd()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteEnumToArray(
      1, this->cmd(), target);
  }

  // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_SKYCHANGE];
  if (has_param()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteEnumToArray(
      2, this->param(), target);
  }

  // optional uint32 id = 3 [default = 0];
  if (has_id()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteUInt32ToArray(3, this->id(), target);
  }

  // optional uint32 sec = 4 [default = 0];
  if (has_sec()) {
    target = ::google::protobuf::internal::WireFormatLite::WriteUInt32ToArray(4, this->sec(), target);
  }

  if (!unknown_fields().empty()) {
    target = ::google::protobuf::internal::WireFormat::SerializeUnknownFieldsToArray(
        unknown_fields(), target);
  }
  // @@protoc_insertion_point(serialize_to_array_end:Cmd.SkyChange)
  return target;
}

int SkyChange::ByteSize() const {
  int total_size = 0;

  if (_has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    // optional .Cmd.Command cmd = 1 [default = SESSION_USER_WEATHER_PROTOCMD];
    if (has_cmd()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::EnumSize(this->cmd());
    }

    // optional .Cmd.WeatherParam param = 2 [default = WEATHERPARAM_SKYCHANGE];
    if (has_param()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::EnumSize(this->param());
    }

    // optional uint32 id = 3 [default = 0];
    if (has_id()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::UInt32Size(
          this->id());
    }

    // optional uint32 sec = 4 [default = 0];
    if (has_sec()) {
      total_size += 1 +
        ::google::protobuf::internal::WireFormatLite::UInt32Size(
          this->sec());
    }

  }
  if (!unknown_fields().empty()) {
    total_size +=
      ::google::protobuf::internal::WireFormat::ComputeUnknownFieldsSize(
        unknown_fields());
  }
  GOOGLE_SAFE_CONCURRENT_WRITES_BEGIN();
  _cached_size_ = total_size;
  GOOGLE_SAFE_CONCURRENT_WRITES_END();
  return total_size;
}

void SkyChange::MergeFrom(const ::google::protobuf::Message& from) {
  GOOGLE_CHECK_NE(&from, this);
  const SkyChange* source =
    ::google::protobuf::internal::dynamic_cast_if_available<const SkyChange*>(
      &from);
  if (source == NULL) {
    ::google::protobuf::internal::ReflectionOps::Merge(from, this);
  } else {
    MergeFrom(*source);
  }
}

void SkyChange::MergeFrom(const SkyChange& from) {
  GOOGLE_CHECK_NE(&from, this);
  if (from._has_bits_[0 / 32] & (0xffu << (0 % 32))) {
    if (from.has_cmd()) {
      set_cmd(from.cmd());
    }
    if (from.has_param()) {
      set_param(from.param());
    }
    if (from.has_id()) {
      set_id(from.id());
    }
    if (from.has_sec()) {
      set_sec(from.sec());
    }
  }
  mutable_unknown_fields()->MergeFrom(from.unknown_fields());
}

void SkyChange::CopyFrom(const ::google::protobuf::Message& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

void SkyChange::CopyFrom(const SkyChange& from) {
  if (&from == this) return;
  Clear();
  MergeFrom(from);
}

bool SkyChange::IsInitialized() const {

  return true;
}

void SkyChange::Swap(SkyChange* other) {
  if (other != this) {
    std::swap(cmd_, other->cmd_);
    std::swap(param_, other->param_);
    std::swap(id_, other->id_);
    std::swap(sec_, other->sec_);
    std::swap(_has_bits_[0], other->_has_bits_[0]);
    _unknown_fields_.Swap(&other->_unknown_fields_);
    std::swap(_cached_size_, other->_cached_size_);
  }
}

::google::protobuf::Metadata SkyChange::GetMetadata() const {
  protobuf_AssignDescriptorsOnce();
  ::google::protobuf::Metadata metadata;
  metadata.descriptor = SkyChange_descriptor_;
  metadata.reflection = SkyChange_reflection_;
  return metadata;
}


// @@protoc_insertion_point(namespace_scope)

}  // namespace Cmd

// @@protoc_insertion_point(global_scope)

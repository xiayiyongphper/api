<?php
namespace service\message\common;

// @@protoc_insertion_point(namespace:.service.message.common.ApiReturn)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: common/ApiReturn.proto
 *
 * -*- magic methods -*-
 *
 * @method string getCode()
 * @method void setCode(\string $value)
 * @method string getFd()
 * @method void setFd(\string $value)
 * @method string getMessage()
 * @method void setMessage(\string $value)
 * @method array getData()
 * @method void appendData(\service\message\common\ApiReturn $value)
 */
class ApiReturn extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:.service.message.common.ApiReturn)
  
  /**
   * @var string $code
   * @tag 1
   * @label required
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  protected $code;
  
  /**
   * @var string $fd
   * @tag 2
   * @label optional
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  protected $fd;
  
  /**
   * @var string $message
   * @tag 3
   * @label optional
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  protected $message;
  
  /**
   * @var array $data
   * @tag 4
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   * @see \service\message\common\ApiReturn
   **/
  protected $data;
  
  
  // @@protoc_insertion_point(properties_scope:.service.message.common.ApiReturn)

  // @@protoc_insertion_point(class_scope:.service.message.common.ApiReturn)

  /**
   * get descriptor for protocol buffers
   * 
   * @return \ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;
    
    if (!isset($descriptor)) {
      $desc = new \ProtocolBuffers\DescriptorBuilder();
      $desc->addField(1, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "code",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "fd",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(3, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "message",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(4, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "data",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => '\service\message\common\ApiReturn',
      )));
      // @@protoc_insertion_point(builder_scope:.service.message.common.ApiReturn)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}
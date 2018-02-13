<?php
namespace service\message\contractor;

// @@protoc_insertion_point(namespace:.service.message.contractor.StatisticsInfoResponse)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: contractor/StatisticsInfoResponse.proto
 *
 * -*- magic methods -*-
 *
 * @method array getDatas()
 * @method void appendDatas(\service\message\common\DataInfo $value)
 */
class StatisticsInfoResponse extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:.service.message.contractor.StatisticsInfoResponse)
  
  /**
   * @var array $datas
   * @tag 1
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   * @see \service\message\common\DataInfo
   **/
  protected $datas;
  
  
  // @@protoc_insertion_point(properties_scope:.service.message.contractor.StatisticsInfoResponse)

  // @@protoc_insertion_point(class_scope:.service.message.contractor.StatisticsInfoResponse)

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
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "datas",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => '\service\message\common\DataInfo',
      )));
      // @@protoc_insertion_point(builder_scope:.service.message.contractor.StatisticsInfoResponse)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}
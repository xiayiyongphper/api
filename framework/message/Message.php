<?php
namespace framework\message;

use service\message\common\Header;
use service\message\common\ResponseHeader;
use service\StringFunc\TStringFuncFactory;
use service\Tools\Des;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/8
 * Time: 14:44
 */
class Message
{
    /**
     * @var string
     */
    protected $_packageBody;
    /**
     * @var \service\message\common\Header
     */
    protected $_header;
    protected $_headerLength;
    protected $_pkgLength;

    /**
     * @param \ProtobufMessage $header
     * @param \ProtocolBuffers $body
     * @return string
     */
    public static function pack(\ProtobufMessage $header, $body)
    {
        if ($body instanceof \ProtobufMessage) {
            $packed = $body->serializeToString();
        } else {
            $packed = '';
        }
        $packed = Des::encrypt($packed);
        $headerPacked = $header->serializeToString();
        $headerPacked = pack('N', TStringFuncFactory::create()->strlen($headerPacked)) . $headerPacked;
        $packed = $headerPacked . $packed;
        $packed = pack('N', TStringFuncFactory::create()->strlen($packed)) . $packed;
        return $packed;
    }

//    /**
//     * @param $header
//     * @param \ProtocolBuffers $body
//     * @return string
//     */
//    public static function pack($header, $body)
//    {
//        if ($body instanceof \ProtocolBuffers\Message) {
//            $packed = $body->serializeToString();
//        } else {
//            $packed = '';
//        }
//        $packed = Des::encrypt($packed);
//        $headerPacked = $header->serializeToString();
//        $headerPacked = pack('N', TStringFuncFactory::create()->strlen($headerPacked)) . $headerPacked;
//        $packed = $headerPacked . $packed;
//        $packed = pack('N', TStringFuncFactory::create()->strlen($packed)) . $packed;
//        return $packed;
//    }

    /**
     * @param mixed $data
     * @return string
     */
    public static function packJson($data)
    {
        if (!is_string($data)) {
            $data = json_encode($data);
        }
        $packed = Des::encrypt($data);
        $packed = pack('N', TStringFuncFactory::create()->strlen($packed)) . $packed;
        return $packed;
    }

    /**
     * @param $data
     * @return string
     */
    public static function unpackJson($data)
    {
        $packageBody = TStringFuncFactory::create()->substr($data, 4);
        return Des::decrypt($packageBody);
    }

    /**
     * @param $data
     * @return $this
     */
    public function unpack($data)
    {
        $pkgLength = TStringFuncFactory::create()->substr($data, 0, 4);
        $pkgLength = unpack('N', $pkgLength);
        $this->_pkgLength = $pkgLength[1];
        $headLength = TStringFuncFactory::create()->substr($data, 4, 4);
        $headLength = unpack('N', $headLength);
        $this->_headerLength = $headLength[1];
        $headerPkg = TStringFuncFactory::create()->substr($data, 8, $this->_headerLength);
        $this->_header = Header::parseFromString($headerPkg);
        //$this->_header->parseFromString($headerPkg);
        $packageBody = TStringFuncFactory::create()->substr($data, 8 + $this->_headerLength);
        $this->_packageBody = Des::decrypt($packageBody);
        return $this;
    }

    /**
     * @param $data
     * @return $this
     */
    public function unpackResponse($data)
    {
        $pkgLength = TStringFuncFactory::create()->substr($data, 0, 4);
        $pkgLength = unpack('N', $pkgLength);
        $this->_pkgLength = $pkgLength[1];
        $headLength = TStringFuncFactory::create()->substr($data, 4, 4);
        $headLength = unpack('N', $headLength);
        $this->_headerLength = $headLength[1];
        $headerPkg = TStringFuncFactory::create()->substr($data, 8, $this->_headerLength);
        $this->_header = new ResponseHeader();
        $this->_header->parseFromString($headerPkg);
//        $this->_header = ResponseHeader::parseFromString($headerPkg);
        $packageBody = TStringFuncFactory::create()->substr($data, 8 + $this->_headerLength);
        $this->_packageBody = Des::decrypt($packageBody);
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageBody()
    {
        return $this->_packageBody;
    }

    /**
     * @return \service\message\common\Header|\service\message\common\ResponseHeader
     */
    public function getHeader()
    {
        return $this->_header;
    }

    /**
     * @return mixed
     */
    public function getHeaderLength()
    {
        return $this->_headerLength;
    }

    /**
     * @return mixed
     */
    public function getPkgLength()
    {
        return $this->_pkgLength;
    }

}
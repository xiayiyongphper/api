<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * WechatPay message
 */
class WechatPay extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const prepay_id = 1;
    const nonce_str = 2;
    const time_stamp = 3;
    const package = 4;
    const sign = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::prepay_id => array(
            'name' => 'prepay_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::nonce_str => array(
            'name' => 'nonce_str',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::time_stamp => array(
            'name' => 'time_stamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::package => array(
            'name' => 'package',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sign => array(
            'name' => 'sign',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::prepay_id] = null;
        $this->values[self::nonce_str] = null;
        $this->values[self::time_stamp] = null;
        $this->values[self::package] = null;
        $this->values[self::sign] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'prepay_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrepayId($value)
    {
        return $this->set(self::prepay_id, $value);
    }

    /**
     * Returns value of 'prepay_id' property
     *
     * @return string
     */
    public function getPrepayId()
    {
        $value = $this->get(self::prepay_id);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'nonce_str' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNonceStr($value)
    {
        return $this->set(self::nonce_str, $value);
    }

    /**
     * Returns value of 'nonce_str' property
     *
     * @return string
     */
    public function getNonceStr()
    {
        $value = $this->get(self::nonce_str);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'time_stamp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeStamp($value)
    {
        return $this->set(self::time_stamp, $value);
    }

    /**
     * Returns value of 'time_stamp' property
     *
     * @return string
     */
    public function getTimeStamp()
    {
        $value = $this->get(self::time_stamp);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'package' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPackage($value)
    {
        return $this->set(self::package, $value);
    }

    /**
     * Returns value of 'package' property
     *
     * @return string
     */
    public function getPackage()
    {
        $value = $this->get(self::package);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'sign' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSign($value)
    {
        return $this->set(self::sign, $value);
    }

    /**
     * Returns value of 'sign' property
     *
     * @return string
     */
    public function getSign()
    {
        $value = $this->get(self::sign);
        return $value === null ? (string)$value : $value;
    }
}
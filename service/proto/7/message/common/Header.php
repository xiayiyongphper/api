<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Header message
 */
class Header extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const version = 1;
    const route = 2;
    const encrypt = 3;
    const protocol = 4;
    const request_id = 5;
    const trace_id = 6;
    const source = 7;
    const app_version = 8;
    const device_id = 9;
    const customer_id = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::version => array(
            'default' => 1,
            'name' => 'version',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::route => array(
            'name' => 'route',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::encrypt => array(
            'default' => \service\message\common\EncryptionMethod::DES,
            'name' => 'encrypt',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::protocol => array(
            'default' => \service\message\common\Protocol::PB,
            'name' => 'protocol',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::request_id => array(
            'name' => 'request_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::trace_id => array(
            'name' => 'trace_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::source => array(
            'name' => 'source',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::app_version => array(
            'name' => 'app_version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::device_id => array(
            'name' => 'device_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::version] = self::$fields[self::version]['default'];
        $this->values[self::route] = null;
        $this->values[self::encrypt] = self::$fields[self::encrypt]['default'];
        $this->values[self::protocol] = self::$fields[self::protocol]['default'];
        $this->values[self::request_id] = null;
        $this->values[self::trace_id] = null;
        $this->values[self::source] = null;
        $this->values[self::app_version] = null;
        $this->values[self::device_id] = null;
        $this->values[self::customer_id] = null;
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
     * Sets value of 'version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::version, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::version);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'route' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRoute($value)
    {
        return $this->set(self::route, $value);
    }

    /**
     * Returns value of 'route' property
     *
     * @return string
     */
    public function getRoute()
    {
        $value = $this->get(self::route);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'encrypt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEncrypt($value)
    {
        return $this->set(self::encrypt, $value);
    }

    /**
     * Returns value of 'encrypt' property
     *
     * @return integer
     */
    public function getEncrypt()
    {
        $value = $this->get(self::encrypt);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'protocol' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProtocol($value)
    {
        return $this->set(self::protocol, $value);
    }

    /**
     * Returns value of 'protocol' property
     *
     * @return integer
     */
    public function getProtocol()
    {
        $value = $this->get(self::protocol);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'request_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRequestId($value)
    {
        return $this->set(self::request_id, $value);
    }

    /**
     * Returns value of 'request_id' property
     *
     * @return integer
     */
    public function getRequestId()
    {
        $value = $this->get(self::request_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'trace_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTraceId($value)
    {
        return $this->set(self::trace_id, $value);
    }

    /**
     * Returns value of 'trace_id' property
     *
     * @return string
     */
    public function getTraceId()
    {
        $value = $this->get(self::trace_id);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::source, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::source);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'app_version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAppVersion($value)
    {
        return $this->set(self::app_version, $value);
    }

    /**
     * Returns value of 'app_version' property
     *
     * @return string
     */
    public function getAppVersion()
    {
        $value = $this->get(self::app_version);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'device_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceId($value)
    {
        return $this->set(self::device_id, $value);
    }

    /**
     * Returns value of 'device_id' property
     *
     * @return string
     */
    public function getDeviceId()
    {
        $value = $this->get(self::device_id);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'customer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCustomerId($value)
    {
        return $this->set(self::customer_id, $value);
    }

    /**
     * Returns value of 'customer_id' property
     *
     * @return integer
     */
    public function getCustomerId()
    {
        $value = $this->get(self::customer_id);
        return $value === null ? (integer)$value : $value;
    }
}
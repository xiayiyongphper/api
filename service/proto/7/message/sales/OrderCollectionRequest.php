<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * OrderCollectionRequest message
 */
class OrderCollectionRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const app_ver = 3;
    const time = 4;
    const state = 5;
    const page = 6;
    const wholesaler_id = 7;
    const keyword = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::app_ver => array(
            'name' => 'app_ver',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::time => array(
            'name' => 'time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::state => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::page => array(
            'default' => 1,
            'name' => 'page',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::keyword => array(
            'name' => 'keyword',
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
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::app_ver] = null;
        $this->values[self::time] = null;
        $this->values[self::state] = null;
        $this->values[self::page] = self::$fields[self::page]['default'];
        $this->values[self::wholesaler_id] = null;
        $this->values[self::keyword] = null;
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

    /**
     * Sets value of 'auth_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthToken($value)
    {
        return $this->set(self::auth_token, $value);
    }

    /**
     * Returns value of 'auth_token' property
     *
     * @return string
     */
    public function getAuthToken()
    {
        $value = $this->get(self::auth_token);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'app_ver' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAppVer($value)
    {
        return $this->set(self::app_ver, $value);
    }

    /**
     * Returns value of 'app_ver' property
     *
     * @return string
     */
    public function getAppVer()
    {
        $value = $this->get(self::app_ver);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTime($value)
    {
        return $this->set(self::time, $value);
    }

    /**
     * Returns value of 'time' property
     *
     * @return integer
     */
    public function getTime()
    {
        $value = $this->get(self::time);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'state' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::state, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return string
     */
    public function getState()
    {
        $value = $this->get(self::state);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'page' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPage($value)
    {
        return $this->set(self::page, $value);
    }

    /**
     * Returns value of 'page' property
     *
     * @return integer
     */
    public function getPage()
    {
        $value = $this->get(self::page);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'wholesaler_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWholesalerId($value)
    {
        return $this->set(self::wholesaler_id, $value);
    }

    /**
     * Returns value of 'wholesaler_id' property
     *
     * @return integer
     */
    public function getWholesalerId()
    {
        $value = $this->get(self::wholesaler_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'keyword' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKeyword($value)
    {
        return $this->set(self::keyword, $value);
    }

    /**
     * Returns value of 'keyword' property
     *
     * @return string
     */
    public function getKeyword()
    {
        $value = $this->get(self::keyword);
        return $value === null ? (string)$value : $value;
    }
}
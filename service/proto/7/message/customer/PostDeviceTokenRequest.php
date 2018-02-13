<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * PostDeviceTokenRequest message
 */
class PostDeviceTokenRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const token = 3;
    const system = 4;
    const channel = 5;
    const typequeue = 6;
    const wholesaler_id = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::token => array(
            'name' => 'token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::system => array(
            'name' => 'system',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::channel => array(
            'name' => 'channel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::typequeue => array(
            'name' => 'typequeue',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
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
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::token] = null;
        $this->values[self::system] = null;
        $this->values[self::channel] = null;
        $this->values[self::typequeue] = null;
        $this->values[self::wholesaler_id] = null;
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
     * Sets value of 'token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToken($value)
    {
        return $this->set(self::token, $value);
    }

    /**
     * Returns value of 'token' property
     *
     * @return string
     */
    public function getToken()
    {
        $value = $this->get(self::token);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'system' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSystem($value)
    {
        return $this->set(self::system, $value);
    }

    /**
     * Returns value of 'system' property
     *
     * @return integer
     */
    public function getSystem()
    {
        $value = $this->get(self::system);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'channel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::channel, $value);
    }

    /**
     * Returns value of 'channel' property
     *
     * @return integer
     */
    public function getChannel()
    {
        $value = $this->get(self::channel);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'typequeue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTypequeue($value)
    {
        return $this->set(self::typequeue, $value);
    }

    /**
     * Returns value of 'typequeue' property
     *
     * @return integer
     */
    public function getTypequeue()
    {
        $value = $this->get(self::typequeue);
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
}
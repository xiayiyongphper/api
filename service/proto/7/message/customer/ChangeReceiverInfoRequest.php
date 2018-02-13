<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * ChangeReceiverInfoRequest message
 */
class ChangeReceiverInfoRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const receiver_name = 3;
    const receiver_phone = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::receiver_name => array(
            'name' => 'receiver_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::receiver_phone => array(
            'name' => 'receiver_phone',
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
        $this->values[self::receiver_name] = null;
        $this->values[self::receiver_phone] = null;
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
     * Sets value of 'receiver_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReceiverName($value)
    {
        return $this->set(self::receiver_name, $value);
    }

    /**
     * Returns value of 'receiver_name' property
     *
     * @return string
     */
    public function getReceiverName()
    {
        $value = $this->get(self::receiver_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'receiver_phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReceiverPhone($value)
    {
        return $this->set(self::receiver_phone, $value);
    }

    /**
     * Returns value of 'receiver_phone' property
     *
     * @return string
     */
    public function getReceiverPhone()
    {
        $value = $this->get(self::receiver_phone);
        return $value === null ? (string)$value : $value;
    }
}
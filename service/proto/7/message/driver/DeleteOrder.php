<?php
/**
 *
 * service.message.driver package
 */

namespace service\message\driver;
/**
 * DeleteOrder message
 */
class DeleteOrder extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const driver_id = 1;
    const auth_token = 2;
    const driver_order_id = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::driver_id => array(
            'name' => 'driver_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::driver_order_id => array(
            'name' => 'driver_order_id',
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
        $this->values[self::driver_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::driver_order_id] = null;
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
     * Sets value of 'driver_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDriverId($value)
    {
        return $this->set(self::driver_id, $value);
    }

    /**
     * Returns value of 'driver_id' property
     *
     * @return integer
     */
    public function getDriverId()
    {
        $value = $this->get(self::driver_id);
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
     * Sets value of 'driver_order_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDriverOrderId($value)
    {
        return $this->set(self::driver_order_id, $value);
    }

    /**
     * Returns value of 'driver_order_id' property
     *
     * @return integer
     */
    public function getDriverOrderId()
    {
        $value = $this->get(self::driver_order_id);
        return $value === null ? (integer)$value : $value;
    }
}
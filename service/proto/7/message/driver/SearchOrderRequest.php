<?php
/**
 *
 * service.message.driver package
 */

namespace service\message\driver;
/**
 * SearchOrderRequest message
 */
class SearchOrderRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const driver_id = 1;
    const auth_token = 2;
    const fuzzy_increment_id = 3;

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
        self::fuzzy_increment_id => array(
            'name' => 'fuzzy_increment_id',
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
        $this->values[self::driver_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::fuzzy_increment_id] = null;
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
     * Sets value of 'fuzzy_increment_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFuzzyIncrementId($value)
    {
        return $this->set(self::fuzzy_increment_id, $value);
    }

    /**
     * Returns value of 'fuzzy_increment_id' property
     *
     * @return string
     */
    public function getFuzzyIncrementId()
    {
        $value = $this->get(self::fuzzy_increment_id);
        return $value === null ? (string)$value : $value;
    }
}
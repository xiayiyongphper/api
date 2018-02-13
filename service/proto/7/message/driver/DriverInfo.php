<?php
/**
 *
 * service.message.driver package
 */

namespace service\message\driver;
/**
 * DriverInfo message
 */
class DriverInfo extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const driver_id = 1;
    const name = 2;
    const city = 3;
    const auth_token = 4;
    const phone = 5;
    const wholesaler_id = 6;
    const wholesaler_name = 7;
    const sex = 8;
    const city_name = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::driver_id => array(
            'name' => 'driver_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wholesaler_name => array(
            'name' => 'wholesaler_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sex => array(
            'name' => 'sex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::city_name => array(
            'name' => 'city_name',
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
        $this->values[self::name] = null;
        $this->values[self::city] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::phone] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::wholesaler_name] = null;
        $this->values[self::sex] = null;
        $this->values[self::city_name] = null;
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::name, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::city, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::city);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value)
    {
        return $this->set(self::phone, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone()
    {
        $value = $this->get(self::phone);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'wholesaler_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWholesalerName($value)
    {
        return $this->set(self::wholesaler_name, $value);
    }

    /**
     * Returns value of 'wholesaler_name' property
     *
     * @return string
     */
    public function getWholesalerName()
    {
        $value = $this->get(self::wholesaler_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'sex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSex($value)
    {
        return $this->set(self::sex, $value);
    }

    /**
     * Returns value of 'sex' property
     *
     * @return integer
     */
    public function getSex()
    {
        $value = $this->get(self::sex);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'city_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCityName($value)
    {
        return $this->set(self::city_name, $value);
    }

    /**
     * Returns value of 'city_name' property
     *
     * @return string
     */
    public function getCityName()
    {
        $value = $this->get(self::city_name);
        return $value === null ? (string)$value : $value;
    }
}
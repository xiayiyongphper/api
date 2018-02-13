<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * RecentlyOrderStoresRequest message
 */
class RecentlyOrderStoresRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const city = 3;
    const day = 4;
    const min = 5;
    const max = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::day => array(
            'name' => 'day',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::min => array(
            'name' => 'min',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::max => array(
            'name' => 'max',
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
        $this->values[self::contractor_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::city] = null;
        $this->values[self::day] = null;
        $this->values[self::min] = null;
        $this->values[self::max] = null;
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
     * Sets value of 'contractor_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContractorId($value)
    {
        return $this->set(self::contractor_id, $value);
    }

    /**
     * Returns value of 'contractor_id' property
     *
     * @return integer
     */
    public function getContractorId()
    {
        $value = $this->get(self::contractor_id);
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
     * Sets value of 'day' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDay($value)
    {
        return $this->set(self::day, $value);
    }

    /**
     * Returns value of 'day' property
     *
     * @return string
     */
    public function getDay()
    {
        $value = $this->get(self::day);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'min' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMin($value)
    {
        return $this->set(self::min, $value);
    }

    /**
     * Returns value of 'min' property
     *
     * @return integer
     */
    public function getMin()
    {
        $value = $this->get(self::min);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'max' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMax($value)
    {
        return $this->set(self::max, $value);
    }

    /**
     * Returns value of 'max' property
     *
     * @return integer
     */
    public function getMax()
    {
        $value = $this->get(self::max);
        return $value === null ? (integer)$value : $value;
    }
}
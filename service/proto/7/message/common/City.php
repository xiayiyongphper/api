<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * City message
 */
class City extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const province_name = 1;
    const province_code = 2;
    const city_name = 3;
    const city_code = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::province_name => array(
            'name' => 'province_name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::province_code => array(
            'name' => 'province_code',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::city_name => array(
            'name' => 'city_name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city_code => array(
            'name' => 'city_code',
            'required' => true,
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
        $this->values[self::province_name] = null;
        $this->values[self::province_code] = null;
        $this->values[self::city_name] = null;
        $this->values[self::city_code] = null;
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
     * Sets value of 'province_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProvinceName($value)
    {
        return $this->set(self::province_name, $value);
    }

    /**
     * Returns value of 'province_name' property
     *
     * @return string
     */
    public function getProvinceName()
    {
        $value = $this->get(self::province_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'province_code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProvinceCode($value)
    {
        return $this->set(self::province_code, $value);
    }

    /**
     * Returns value of 'province_code' property
     *
     * @return integer
     */
    public function getProvinceCode()
    {
        $value = $this->get(self::province_code);
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

    /**
     * Sets value of 'city_code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCityCode($value)
    {
        return $this->set(self::city_code, $value);
    }

    /**
     * Returns value of 'city_code' property
     *
     * @return integer
     */
    public function getCityCode()
    {
        $value = $this->get(self::city_code);
        return $value === null ? (integer)$value : $value;
    }
}
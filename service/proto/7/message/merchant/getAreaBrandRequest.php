<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * getAreaBrandRequest message
 */
class getAreaBrandRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const area_id = 3;
    const wholesaler_id = 4;
    const category_id = 5;
    const category_level = 6;

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
        self::area_id => array(
            'name' => 'area_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::category_id => array(
            'name' => 'category_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::category_level => array(
            'name' => 'category_level',
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
        $this->values[self::area_id] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::category_id] = null;
        $this->values[self::category_level] = null;
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
     * Sets value of 'area_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAreaId($value)
    {
        return $this->set(self::area_id, $value);
    }

    /**
     * Returns value of 'area_id' property
     *
     * @return integer
     */
    public function getAreaId()
    {
        $value = $this->get(self::area_id);
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
     * Sets value of 'category_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCategoryId($value)
    {
        return $this->set(self::category_id, $value);
    }

    /**
     * Returns value of 'category_id' property
     *
     * @return integer
     */
    public function getCategoryId()
    {
        $value = $this->get(self::category_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'category_level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCategoryLevel($value)
    {
        return $this->set(self::category_level, $value);
    }

    /**
     * Returns value of 'category_level' property
     *
     * @return integer
     */
    public function getCategoryLevel()
    {
        $value = $this->get(self::category_level);
        return $value === null ? (integer)$value : $value;
    }
}
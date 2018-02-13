<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * searchProductRequest message
 */
class searchProductRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const wholesaler_id = 3;
    const category_id = 4;
    const category_level = 5;
    const keyword = 6;
    const field = 7;
    const sort = 8;
    const brand = 9;
    const page = 10;
    const page_size = 11;

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
        self::keyword => array(
            'name' => 'keyword',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::field => array(
            'name' => 'field',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sort => array(
            'name' => 'sort',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::brand => array(
            'name' => 'brand',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::page => array(
            'name' => 'page',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::page_size => array(
            'name' => 'page_size',
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
        $this->values[self::wholesaler_id] = null;
        $this->values[self::category_id] = null;
        $this->values[self::category_level] = null;
        $this->values[self::keyword] = null;
        $this->values[self::field] = null;
        $this->values[self::sort] = null;
        $this->values[self::brand] = null;
        $this->values[self::page] = null;
        $this->values[self::page_size] = null;
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

    /**
     * Sets value of 'field' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setField($value)
    {
        return $this->set(self::field, $value);
    }

    /**
     * Returns value of 'field' property
     *
     * @return string
     */
    public function getField()
    {
        $value = $this->get(self::field);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'sort' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSort($value)
    {
        return $this->set(self::sort, $value);
    }

    /**
     * Returns value of 'sort' property
     *
     * @return string
     */
    public function getSort()
    {
        $value = $this->get(self::sort);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'brand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrand($value)
    {
        return $this->set(self::brand, $value);
    }

    /**
     * Returns value of 'brand' property
     *
     * @return string
     */
    public function getBrand()
    {
        $value = $this->get(self::brand);
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
     * Sets value of 'page_size' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPageSize($value)
    {
        return $this->set(self::page_size, $value);
    }

    /**
     * Returns value of 'page_size' property
     *
     * @return integer
     */
    public function getPageSize()
    {
        $value = $this->get(self::page_size);
        return $value === null ? (integer)$value : $value;
    }
}
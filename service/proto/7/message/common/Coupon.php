<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Coupon message
 */
class Coupon extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const entity_id = 1;
    const customer_id = 2;
    const state = 3;
    const rule_id = 4;
    const expiration_date = 5;
    const source = 6;
    const created_at = 7;
    const coupon_title = 8;
    const frontnote = 9;
    const discount_type = 10;
    const discount = 11;
    const use_condition = 12;
    const unavailable_reason = 13;
    const url = 14;
    const is_soon_expire = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::entity_id => array(
            'name' => 'entity_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::state => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::rule_id => array(
            'name' => 'rule_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::expiration_date => array(
            'name' => 'expiration_date',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::source => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::created_at => array(
            'name' => 'created_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::coupon_title => array(
            'name' => 'coupon_title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::frontnote => array(
            'name' => 'frontnote',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::discount_type => array(
            'name' => 'discount_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::discount => array(
            'name' => 'discount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::use_condition => array(
            'name' => 'use_condition',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::unavailable_reason => array(
            'name' => 'unavailable_reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::url => array(
            'name' => 'url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::is_soon_expire => array(
            'name' => 'is_soon_expire',
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
        $this->values[self::entity_id] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::state] = null;
        $this->values[self::rule_id] = null;
        $this->values[self::expiration_date] = null;
        $this->values[self::source] = null;
        $this->values[self::created_at] = null;
        $this->values[self::coupon_title] = null;
        $this->values[self::frontnote] = null;
        $this->values[self::discount_type] = null;
        $this->values[self::discount] = null;
        $this->values[self::use_condition] = null;
        $this->values[self::unavailable_reason] = null;
        $this->values[self::url] = null;
        $this->values[self::is_soon_expire] = null;
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
     * Sets value of 'entity_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEntityId($value)
    {
        return $this->set(self::entity_id, $value);
    }

    /**
     * Returns value of 'entity_id' property
     *
     * @return integer
     */
    public function getEntityId()
    {
        $value = $this->get(self::entity_id);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'state' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::state);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'rule_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRuleId($value)
    {
        return $this->set(self::rule_id, $value);
    }

    /**
     * Returns value of 'rule_id' property
     *
     * @return integer
     */
    public function getRuleId()
    {
        $value = $this->get(self::rule_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'expiration_date' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExpirationDate($value)
    {
        return $this->set(self::expiration_date, $value);
    }

    /**
     * Returns value of 'expiration_date' property
     *
     * @return string
     */
    public function getExpirationDate()
    {
        $value = $this->get(self::expiration_date);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::source, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::source);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'created_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedAt($value)
    {
        return $this->set(self::created_at, $value);
    }

    /**
     * Returns value of 'created_at' property
     *
     * @return string
     */
    public function getCreatedAt()
    {
        $value = $this->get(self::created_at);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'coupon_title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponTitle($value)
    {
        return $this->set(self::coupon_title, $value);
    }

    /**
     * Returns value of 'coupon_title' property
     *
     * @return string
     */
    public function getCouponTitle()
    {
        $value = $this->get(self::coupon_title);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'frontnote' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrontnote($value)
    {
        return $this->set(self::frontnote, $value);
    }

    /**
     * Returns value of 'frontnote' property
     *
     * @return string
     */
    public function getFrontnote()
    {
        $value = $this->get(self::frontnote);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'discount_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDiscountType($value)
    {
        return $this->set(self::discount_type, $value);
    }

    /**
     * Returns value of 'discount_type' property
     *
     * @return integer
     */
    public function getDiscountType()
    {
        $value = $this->get(self::discount_type);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'discount' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDiscount($value)
    {
        return $this->set(self::discount, $value);
    }

    /**
     * Returns value of 'discount' property
     *
     * @return string
     */
    public function getDiscount()
    {
        $value = $this->get(self::discount);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'use_condition' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUseCondition($value)
    {
        return $this->set(self::use_condition, $value);
    }

    /**
     * Returns value of 'use_condition' property
     *
     * @return string
     */
    public function getUseCondition()
    {
        $value = $this->get(self::use_condition);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'unavailable_reason' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUnavailableReason($value)
    {
        return $this->set(self::unavailable_reason, $value);
    }

    /**
     * Returns value of 'unavailable_reason' property
     *
     * @return string
     */
    public function getUnavailableReason()
    {
        $value = $this->get(self::unavailable_reason);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::url, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'is_soon_expire' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsSoonExpire($value)
    {
        return $this->set(self::is_soon_expire, $value);
    }

    /**
     * Returns value of 'is_soon_expire' property
     *
     * @return integer
     */
    public function getIsSoonExpire()
    {
        $value = $this->get(self::is_soon_expire);
        return $value === null ? (integer)$value : $value;
    }
}
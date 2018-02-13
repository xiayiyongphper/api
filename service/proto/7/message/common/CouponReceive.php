<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * CouponReceive message
 */
class CouponReceive extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const rule_id = 1;
    const discount_type = 2;
    const discount = 3;
    const use_condition = 4;
    const type = 5;
    const expire_info = 6;
    const coupon_title = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::rule_id => array(
            'name' => 'rule_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::type => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::expire_info => array(
            'name' => 'expire_info',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::coupon_title => array(
            'name' => 'coupon_title',
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
        $this->values[self::rule_id] = null;
        $this->values[self::discount_type] = null;
        $this->values[self::discount] = null;
        $this->values[self::use_condition] = null;
        $this->values[self::type] = null;
        $this->values[self::expire_info] = null;
        $this->values[self::coupon_title] = null;
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
     * Sets value of 'type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::type, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return string
     */
    public function getType()
    {
        $value = $this->get(self::type);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'expire_info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExpireInfo($value)
    {
        return $this->set(self::expire_info, $value);
    }

    /**
     * Returns value of 'expire_info' property
     *
     * @return string
     */
    public function getExpireInfo()
    {
        $value = $this->get(self::expire_info);
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
}
<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * OrderReviewResponse message
 */
class OrderReviewResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const grand_total = 1;
    const shipping_amount = 2;
    const discount_amount = 3;
    const customer_id = 4;
    const items = 5;
    const balance = 6;
    const applied_rules = 7;
    const base_total = 8;
    const coupon_discount_amount = 9;
    const coupon_help_url = 10;
    const available_coupons = 11;
    const unavailable_coupons = 12;
    const coupon_id = 13;
    const coupon_text = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::grand_total => array(
            'name' => 'grand_total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::shipping_amount => array(
            'name' => 'shipping_amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::discount_amount => array(
            'name' => 'discount_amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::items => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\service\message\common\Order'
        ),
        self::balance => array(
            'name' => 'balance',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::applied_rules => array(
            'name' => 'applied_rules',
            'required' => false,
            'type' => '\service\message\common\TagGroup'
        ),
        self::base_total => array(
            'name' => 'base_total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::coupon_discount_amount => array(
            'name' => 'coupon_discount_amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::coupon_help_url => array(
            'name' => 'coupon_help_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::available_coupons => array(
            'name' => 'available_coupons',
            'repeated' => true,
            'type' => '\service\message\common\Coupon'
        ),
        self::unavailable_coupons => array(
            'name' => 'unavailable_coupons',
            'repeated' => true,
            'type' => '\service\message\common\Coupon'
        ),
        self::coupon_id => array(
            'name' => 'coupon_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::coupon_text => array(
            'name' => 'coupon_text',
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
        $this->values[self::grand_total] = null;
        $this->values[self::shipping_amount] = null;
        $this->values[self::discount_amount] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::items] = array();
        $this->values[self::balance] = null;
        $this->values[self::applied_rules] = null;
        $this->values[self::base_total] = null;
        $this->values[self::coupon_discount_amount] = null;
        $this->values[self::coupon_help_url] = null;
        $this->values[self::available_coupons] = array();
        $this->values[self::unavailable_coupons] = array();
        $this->values[self::coupon_id] = null;
        $this->values[self::coupon_text] = null;
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
     * Sets value of 'grand_total' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setGrandTotal($value)
    {
        return $this->set(self::grand_total, $value);
    }

    /**
     * Returns value of 'grand_total' property
     *
     * @return double
     */
    public function getGrandTotal()
    {
        $value = $this->get(self::grand_total);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'shipping_amount' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setShippingAmount($value)
    {
        return $this->set(self::shipping_amount, $value);
    }

    /**
     * Returns value of 'shipping_amount' property
     *
     * @return double
     */
    public function getShippingAmount()
    {
        $value = $this->get(self::shipping_amount);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'discount_amount' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setDiscountAmount($value)
    {
        return $this->set(self::discount_amount, $value);
    }

    /**
     * Returns value of 'discount_amount' property
     *
     * @return double
     */
    public function getDiscountAmount()
    {
        $value = $this->get(self::discount_amount);
        return $value === null ? (double)$value : $value;
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
     * Appends value to 'items' list
     *
     * @param \service\message\common\Order $value Value to append
     *
     * @return null
     */
    public function appendItems(\service\message\common\Order $value)
    {
        return $this->append(self::items, $value);
    }

    /**
     * Clears 'items' list
     *
     * @return null
     */
    public function clearItems()
    {
        return $this->clear(self::items);
    }

    /**
     * Returns 'items' list
     *
     * @return \service\message\common\Order[]
     */
    public function getItems()
    {
        return $this->get(self::items);
    }

    /**
     * Returns 'items' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemsIterator()
    {
        return new \ArrayIterator($this->get(self::items));
    }

    /**
     * Returns element from 'items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Order
     */
    public function getItemsAt($offset)
    {
        return $this->get(self::items, $offset);
    }

    /**
     * Returns count of 'items' list
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->count(self::items);
    }

    /**
     * Sets value of 'balance' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setBalance($value)
    {
        return $this->set(self::balance, $value);
    }

    /**
     * Returns value of 'balance' property
     *
     * @return double
     */
    public function getBalance()
    {
        $value = $this->get(self::balance);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'applied_rules' property
     *
     * @param \service\message\common\TagGroup $value Property value
     *
     * @return null
     */
    public function setAppliedRules(\service\message\common\TagGroup $value=null)
    {
        return $this->set(self::applied_rules, $value);
    }

    /**
     * Returns value of 'applied_rules' property
     *
     * @return \service\message\common\TagGroup
     */
    public function getAppliedRules()
    {
        return $this->get(self::applied_rules);
    }

    /**
     * Sets value of 'base_total' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setBaseTotal($value)
    {
        return $this->set(self::base_total, $value);
    }

    /**
     * Returns value of 'base_total' property
     *
     * @return double
     */
    public function getBaseTotal()
    {
        $value = $this->get(self::base_total);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'coupon_discount_amount' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setCouponDiscountAmount($value)
    {
        return $this->set(self::coupon_discount_amount, $value);
    }

    /**
     * Returns value of 'coupon_discount_amount' property
     *
     * @return double
     */
    public function getCouponDiscountAmount()
    {
        $value = $this->get(self::coupon_discount_amount);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'coupon_help_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponHelpUrl($value)
    {
        return $this->set(self::coupon_help_url, $value);
    }

    /**
     * Returns value of 'coupon_help_url' property
     *
     * @return string
     */
    public function getCouponHelpUrl()
    {
        $value = $this->get(self::coupon_help_url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'available_coupons' list
     *
     * @param \service\message\common\Coupon $value Value to append
     *
     * @return null
     */
    public function appendAvailableCoupons(\service\message\common\Coupon $value)
    {
        return $this->append(self::available_coupons, $value);
    }

    /**
     * Clears 'available_coupons' list
     *
     * @return null
     */
    public function clearAvailableCoupons()
    {
        return $this->clear(self::available_coupons);
    }

    /**
     * Returns 'available_coupons' list
     *
     * @return \service\message\common\Coupon[]
     */
    public function getAvailableCoupons()
    {
        return $this->get(self::available_coupons);
    }

    /**
     * Returns 'available_coupons' iterator
     *
     * @return \ArrayIterator
     */
    public function getAvailableCouponsIterator()
    {
        return new \ArrayIterator($this->get(self::available_coupons));
    }

    /**
     * Returns element from 'available_coupons' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Coupon
     */
    public function getAvailableCouponsAt($offset)
    {
        return $this->get(self::available_coupons, $offset);
    }

    /**
     * Returns count of 'available_coupons' list
     *
     * @return int
     */
    public function getAvailableCouponsCount()
    {
        return $this->count(self::available_coupons);
    }

    /**
     * Appends value to 'unavailable_coupons' list
     *
     * @param \service\message\common\Coupon $value Value to append
     *
     * @return null
     */
    public function appendUnavailableCoupons(\service\message\common\Coupon $value)
    {
        return $this->append(self::unavailable_coupons, $value);
    }

    /**
     * Clears 'unavailable_coupons' list
     *
     * @return null
     */
    public function clearUnavailableCoupons()
    {
        return $this->clear(self::unavailable_coupons);
    }

    /**
     * Returns 'unavailable_coupons' list
     *
     * @return \service\message\common\Coupon[]
     */
    public function getUnavailableCoupons()
    {
        return $this->get(self::unavailable_coupons);
    }

    /**
     * Returns 'unavailable_coupons' iterator
     *
     * @return \ArrayIterator
     */
    public function getUnavailableCouponsIterator()
    {
        return new \ArrayIterator($this->get(self::unavailable_coupons));
    }

    /**
     * Returns element from 'unavailable_coupons' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Coupon
     */
    public function getUnavailableCouponsAt($offset)
    {
        return $this->get(self::unavailable_coupons, $offset);
    }

    /**
     * Returns count of 'unavailable_coupons' list
     *
     * @return int
     */
    public function getUnavailableCouponsCount()
    {
        return $this->count(self::unavailable_coupons);
    }

    /**
     * Sets value of 'coupon_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCouponId($value)
    {
        return $this->set(self::coupon_id, $value);
    }

    /**
     * Returns value of 'coupon_id' property
     *
     * @return integer
     */
    public function getCouponId()
    {
        $value = $this->get(self::coupon_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'coupon_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponText($value)
    {
        return $this->set(self::coupon_text, $value);
    }

    /**
     * Returns value of 'coupon_text' property
     *
     * @return string
     */
    public function getCouponText()
    {
        $value = $this->get(self::coupon_text);
        return $value === null ? (string)$value : $value;
    }
}
<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Totals message
 */
class Totals extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const base_total = 1;
    const shipping_amount = 2;
    const discount_amount = 3;
    const coupon_discount_amount = 4;
    const grand_total = 5;
    const balance = 6;
    const total_qty = 7;
    const receipt_total = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::base_total => array(
            'name' => 'base_total',
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
        self::coupon_discount_amount => array(
            'name' => 'coupon_discount_amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::grand_total => array(
            'name' => 'grand_total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::balance => array(
            'name' => 'balance',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::total_qty => array(
            'name' => 'total_qty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::receipt_total => array(
            'name' => 'receipt_total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
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
        $this->values[self::base_total] = null;
        $this->values[self::shipping_amount] = null;
        $this->values[self::discount_amount] = null;
        $this->values[self::coupon_discount_amount] = null;
        $this->values[self::grand_total] = null;
        $this->values[self::balance] = null;
        $this->values[self::total_qty] = null;
        $this->values[self::receipt_total] = null;
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
     * Sets value of 'total_qty' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setTotalQty($value)
    {
        return $this->set(self::total_qty, $value);
    }

    /**
     * Returns value of 'total_qty' property
     *
     * @return double
     */
    public function getTotalQty()
    {
        $value = $this->get(self::total_qty);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'receipt_total' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setReceiptTotal($value)
    {
        return $this->set(self::receipt_total, $value);
    }

    /**
     * Returns value of 'receipt_total' property
     *
     * @return double
     */
    public function getReceiptTotal()
    {
        $value = $this->get(self::receipt_total);
        return $value === null ? (double)$value : $value;
    }
}
<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * CartItem2 message
 */
class CartItem2 extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const min_trade_amount = 1;
    const wholesaler_id = 2;
    const wholesaler_name = 3;
    const tips = 4;
    const product_group = 5;
    const promotions = 6;
    const wholesaler_promotion = 7;
    const coupon_receive_layout = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::min_trade_amount => array(
            'name' => 'min_trade_amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::tips => array(
            'name' => 'tips',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::product_group => array(
            'name' => 'product_group',
            'repeated' => true,
            'type' => '\service\message\common\ProductGroup'
        ),
        self::promotions => array(
            'name' => 'promotions',
            'repeated' => true,
            'type' => '\service\message\common\PromotionInfo'
        ),
        self::wholesaler_promotion => array(
            'name' => 'wholesaler_promotion',
            'required' => false,
            'type' => '\service\message\common\PromotionRule'
        ),
        self::coupon_receive_layout => array(
            'name' => 'coupon_receive_layout',
            'required' => false,
            'type' => '\service\message\common\CouponReceiveLayout'
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
        $this->values[self::min_trade_amount] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::wholesaler_name] = null;
        $this->values[self::tips] = null;
        $this->values[self::product_group] = array();
        $this->values[self::promotions] = array();
        $this->values[self::wholesaler_promotion] = null;
        $this->values[self::coupon_receive_layout] = null;
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
     * Sets value of 'min_trade_amount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinTradeAmount($value)
    {
        return $this->set(self::min_trade_amount, $value);
    }

    /**
     * Returns value of 'min_trade_amount' property
     *
     * @return integer
     */
    public function getMinTradeAmount()
    {
        $value = $this->get(self::min_trade_amount);
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
     * Sets value of 'tips' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTips($value)
    {
        return $this->set(self::tips, $value);
    }

    /**
     * Returns value of 'tips' property
     *
     * @return string
     */
    public function getTips()
    {
        $value = $this->get(self::tips);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'product_group' list
     *
     * @param \service\message\common\ProductGroup $value Value to append
     *
     * @return null
     */
    public function appendProductGroup(\service\message\common\ProductGroup $value)
    {
        return $this->append(self::product_group, $value);
    }

    /**
     * Clears 'product_group' list
     *
     * @return null
     */
    public function clearProductGroup()
    {
        return $this->clear(self::product_group);
    }

    /**
     * Returns 'product_group' list
     *
     * @return \service\message\common\ProductGroup[]
     */
    public function getProductGroup()
    {
        return $this->get(self::product_group);
    }

    /**
     * Returns 'product_group' iterator
     *
     * @return \ArrayIterator
     */
    public function getProductGroupIterator()
    {
        return new \ArrayIterator($this->get(self::product_group));
    }

    /**
     * Returns element from 'product_group' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\ProductGroup
     */
    public function getProductGroupAt($offset)
    {
        return $this->get(self::product_group, $offset);
    }

    /**
     * Returns count of 'product_group' list
     *
     * @return int
     */
    public function getProductGroupCount()
    {
        return $this->count(self::product_group);
    }

    /**
     * Appends value to 'promotions' list
     *
     * @param \service\message\common\PromotionInfo $value Value to append
     *
     * @return null
     */
    public function appendPromotions(\service\message\common\PromotionInfo $value)
    {
        return $this->append(self::promotions, $value);
    }

    /**
     * Clears 'promotions' list
     *
     * @return null
     */
    public function clearPromotions()
    {
        return $this->clear(self::promotions);
    }

    /**
     * Returns 'promotions' list
     *
     * @return \service\message\common\PromotionInfo[]
     */
    public function getPromotions()
    {
        return $this->get(self::promotions);
    }

    /**
     * Returns 'promotions' iterator
     *
     * @return \ArrayIterator
     */
    public function getPromotionsIterator()
    {
        return new \ArrayIterator($this->get(self::promotions));
    }

    /**
     * Returns element from 'promotions' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\PromotionInfo
     */
    public function getPromotionsAt($offset)
    {
        return $this->get(self::promotions, $offset);
    }

    /**
     * Returns count of 'promotions' list
     *
     * @return int
     */
    public function getPromotionsCount()
    {
        return $this->count(self::promotions);
    }

    /**
     * Sets value of 'wholesaler_promotion' property
     *
     * @param \service\message\common\PromotionRule $value Property value
     *
     * @return null
     */
    public function setWholesalerPromotion(\service\message\common\PromotionRule $value=null)
    {
        return $this->set(self::wholesaler_promotion, $value);
    }

    /**
     * Returns value of 'wholesaler_promotion' property
     *
     * @return \service\message\common\PromotionRule
     */
    public function getWholesalerPromotion()
    {
        return $this->get(self::wholesaler_promotion);
    }

    /**
     * Sets value of 'coupon_receive_layout' property
     *
     * @param \service\message\common\CouponReceiveLayout $value Property value
     *
     * @return null
     */
    public function setCouponReceiveLayout(\service\message\common\CouponReceiveLayout $value=null)
    {
        return $this->set(self::coupon_receive_layout, $value);
    }

    /**
     * Returns value of 'coupon_receive_layout' property
     *
     * @return \service\message\common\CouponReceiveLayout
     */
    public function getCouponReceiveLayout()
    {
        return $this->get(self::coupon_receive_layout);
    }
}
<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Order message
 */
class Order extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const order_id = 1;
    const status = 2;
    const status_label = 3;
    const wholesaler_id = 4;
    const wholesaler_name = 5;
    const payment_method = 6;
    const coupon_code = 7;
    const increment_id = 8;
    const grand_total = 9;
    const items = 10;
    const address = 11;
    const comment = 12;
    const created_at = 13;
    const name = 14;
    const phone = 15;
    const image = 16;
    const store_phone = 17;
    const totals = 18;
    const wholesaler_delivery_time = 19;
    const history = 20;
    const promo_info = 21;
    const shipping_amount = 22;
    const state = 23;
    const total_qty_ordered = 24;
    const promotions = 25;
    const store_name = 26;
    const auto_script_tip = 27;
    const wholesaler_delivery_text = 28;
    const balance = 29;
    const rebates = 30;
    const tag = 31;
    const customer_id = 32;
    const customer_name = 33;
    const applied_rules = 34;
    const receipt = 35;
    const contractor_id = 36;
    const contractor = 37;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::order_id => array(
            'name' => 'order_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::status => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::status_label => array(
            'name' => 'status_label',
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
        self::payment_method => array(
            'name' => 'payment_method',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::coupon_code => array(
            'name' => 'coupon_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::increment_id => array(
            'name' => 'increment_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::grand_total => array(
            'name' => 'grand_total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::items => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\service\message\common\OrderItem'
        ),
        self::address => array(
            'name' => 'address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::comment => array(
            'name' => 'comment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::created_at => array(
            'name' => 'created_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::image => array(
            'name' => 'image',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_phone => array(
            'name' => 'store_phone',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::totals => array(
            'name' => 'totals',
            'required' => false,
            'type' => '\service\message\common\Totals'
        ),
        self::wholesaler_delivery_time => array(
            'name' => 'wholesaler_delivery_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::history => array(
            'name' => 'history',
            'repeated' => true,
            'type' => '\service\message\common\StatusHistory'
        ),
        self::promo_info => array(
            'name' => 'promo_info',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::shipping_amount => array(
            'name' => 'shipping_amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::state => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::total_qty_ordered => array(
            'name' => 'total_qty_ordered',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::promotions => array(
            'name' => 'promotions',
            'repeated' => true,
            'type' => '\service\message\common\PromotionInfo'
        ),
        self::store_name => array(
            'name' => 'store_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::auto_script_tip => array(
            'name' => 'auto_script_tip',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_delivery_text => array(
            'name' => 'wholesaler_delivery_text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::balance => array(
            'name' => 'balance',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::rebates => array(
            'name' => 'rebates',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::tag => array(
            'name' => 'tag',
            'required' => false,
            'type' => '\service\message\common\Tag'
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::customer_name => array(
            'name' => 'customer_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::applied_rules => array(
            'name' => 'applied_rules',
            'required' => false,
            'type' => '\service\message\common\TagGroup'
        ),
        self::receipt => array(
            'name' => 'receipt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::contractor => array(
            'name' => 'contractor',
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
        $this->values[self::order_id] = null;
        $this->values[self::status] = null;
        $this->values[self::status_label] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::wholesaler_name] = null;
        $this->values[self::payment_method] = null;
        $this->values[self::coupon_code] = null;
        $this->values[self::increment_id] = null;
        $this->values[self::grand_total] = null;
        $this->values[self::items] = array();
        $this->values[self::address] = null;
        $this->values[self::comment] = null;
        $this->values[self::created_at] = null;
        $this->values[self::name] = null;
        $this->values[self::phone] = null;
        $this->values[self::image] = null;
        $this->values[self::store_phone] = array();
        $this->values[self::totals] = null;
        $this->values[self::wholesaler_delivery_time] = null;
        $this->values[self::history] = array();
        $this->values[self::promo_info] = null;
        $this->values[self::shipping_amount] = null;
        $this->values[self::state] = null;
        $this->values[self::total_qty_ordered] = null;
        $this->values[self::promotions] = array();
        $this->values[self::store_name] = null;
        $this->values[self::auto_script_tip] = null;
        $this->values[self::wholesaler_delivery_text] = null;
        $this->values[self::balance] = null;
        $this->values[self::rebates] = null;
        $this->values[self::tag] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::customer_name] = null;
        $this->values[self::applied_rules] = null;
        $this->values[self::receipt] = null;
        $this->values[self::contractor_id] = null;
        $this->values[self::contractor] = null;
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
     * Sets value of 'order_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrderId($value)
    {
        return $this->set(self::order_id, $value);
    }

    /**
     * Returns value of 'order_id' property
     *
     * @return integer
     */
    public function getOrderId()
    {
        $value = $this->get(self::order_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'status' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::status, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return string
     */
    public function getStatus()
    {
        $value = $this->get(self::status);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'status_label' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatusLabel($value)
    {
        return $this->set(self::status_label, $value);
    }

    /**
     * Returns value of 'status_label' property
     *
     * @return string
     */
    public function getStatusLabel()
    {
        $value = $this->get(self::status_label);
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
     * Sets value of 'payment_method' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPaymentMethod($value)
    {
        return $this->set(self::payment_method, $value);
    }

    /**
     * Returns value of 'payment_method' property
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        $value = $this->get(self::payment_method);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'coupon_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponCode($value)
    {
        return $this->set(self::coupon_code, $value);
    }

    /**
     * Returns value of 'coupon_code' property
     *
     * @return string
     */
    public function getCouponCode()
    {
        $value = $this->get(self::coupon_code);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'increment_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIncrementId($value)
    {
        return $this->set(self::increment_id, $value);
    }

    /**
     * Returns value of 'increment_id' property
     *
     * @return string
     */
    public function getIncrementId()
    {
        $value = $this->get(self::increment_id);
        return $value === null ? (string)$value : $value;
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
     * Appends value to 'items' list
     *
     * @param \service\message\common\OrderItem $value Value to append
     *
     * @return null
     */
    public function appendItems(\service\message\common\OrderItem $value)
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
     * @return \service\message\common\OrderItem[]
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
     * @return \service\message\common\OrderItem
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
     * Sets value of 'address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress($value)
    {
        return $this->set(self::address, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return string
     */
    public function getAddress()
    {
        $value = $this->get(self::address);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value)
    {
        return $this->set(self::comment, $value);
    }

    /**
     * Returns value of 'comment' property
     *
     * @return string
     */
    public function getComment()
    {
        $value = $this->get(self::comment);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'image' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImage($value)
    {
        return $this->set(self::image, $value);
    }

    /**
     * Returns value of 'image' property
     *
     * @return string
     */
    public function getImage()
    {
        $value = $this->get(self::image);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'store_phone' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStorePhone($value)
    {
        return $this->append(self::store_phone, $value);
    }

    /**
     * Clears 'store_phone' list
     *
     * @return null
     */
    public function clearStorePhone()
    {
        return $this->clear(self::store_phone);
    }

    /**
     * Returns 'store_phone' list
     *
     * @return string[]
     */
    public function getStorePhone()
    {
        return $this->get(self::store_phone);
    }

    /**
     * Returns 'store_phone' iterator
     *
     * @return \ArrayIterator
     */
    public function getStorePhoneIterator()
    {
        return new \ArrayIterator($this->get(self::store_phone));
    }

    /**
     * Returns element from 'store_phone' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStorePhoneAt($offset)
    {
        return $this->get(self::store_phone, $offset);
    }

    /**
     * Returns count of 'store_phone' list
     *
     * @return int
     */
    public function getStorePhoneCount()
    {
        return $this->count(self::store_phone);
    }

    /**
     * Sets value of 'totals' property
     *
     * @param \service\message\common\Totals $value Property value
     *
     * @return null
     */
    public function setTotals(\service\message\common\Totals $value=null)
    {
        return $this->set(self::totals, $value);
    }

    /**
     * Returns value of 'totals' property
     *
     * @return \service\message\common\Totals
     */
    public function getTotals()
    {
        return $this->get(self::totals);
    }

    /**
     * Sets value of 'wholesaler_delivery_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWholesalerDeliveryTime($value)
    {
        return $this->set(self::wholesaler_delivery_time, $value);
    }

    /**
     * Returns value of 'wholesaler_delivery_time' property
     *
     * @return string
     */
    public function getWholesalerDeliveryTime()
    {
        $value = $this->get(self::wholesaler_delivery_time);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'history' list
     *
     * @param \service\message\common\StatusHistory $value Value to append
     *
     * @return null
     */
    public function appendHistory(\service\message\common\StatusHistory $value)
    {
        return $this->append(self::history, $value);
    }

    /**
     * Clears 'history' list
     *
     * @return null
     */
    public function clearHistory()
    {
        return $this->clear(self::history);
    }

    /**
     * Returns 'history' list
     *
     * @return \service\message\common\StatusHistory[]
     */
    public function getHistory()
    {
        return $this->get(self::history);
    }

    /**
     * Returns 'history' iterator
     *
     * @return \ArrayIterator
     */
    public function getHistoryIterator()
    {
        return new \ArrayIterator($this->get(self::history));
    }

    /**
     * Returns element from 'history' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\StatusHistory
     */
    public function getHistoryAt($offset)
    {
        return $this->get(self::history, $offset);
    }

    /**
     * Returns count of 'history' list
     *
     * @return int
     */
    public function getHistoryCount()
    {
        return $this->count(self::history);
    }

    /**
     * Sets value of 'promo_info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPromoInfo($value)
    {
        return $this->set(self::promo_info, $value);
    }

    /**
     * Returns value of 'promo_info' property
     *
     * @return string
     */
    public function getPromoInfo()
    {
        $value = $this->get(self::promo_info);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'state' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getState()
    {
        $value = $this->get(self::state);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'total_qty_ordered' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalQtyOrdered($value)
    {
        return $this->set(self::total_qty_ordered, $value);
    }

    /**
     * Returns value of 'total_qty_ordered' property
     *
     * @return integer
     */
    public function getTotalQtyOrdered()
    {
        $value = $this->get(self::total_qty_ordered);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'store_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoreName($value)
    {
        return $this->set(self::store_name, $value);
    }

    /**
     * Returns value of 'store_name' property
     *
     * @return string
     */
    public function getStoreName()
    {
        $value = $this->get(self::store_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'auto_script_tip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAutoScriptTip($value)
    {
        return $this->set(self::auto_script_tip, $value);
    }

    /**
     * Returns value of 'auto_script_tip' property
     *
     * @return string
     */
    public function getAutoScriptTip()
    {
        $value = $this->get(self::auto_script_tip);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'wholesaler_delivery_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWholesalerDeliveryText($value)
    {
        return $this->set(self::wholesaler_delivery_text, $value);
    }

    /**
     * Returns value of 'wholesaler_delivery_text' property
     *
     * @return string
     */
    public function getWholesalerDeliveryText()
    {
        $value = $this->get(self::wholesaler_delivery_text);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'rebates' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setRebates($value)
    {
        return $this->set(self::rebates, $value);
    }

    /**
     * Returns value of 'rebates' property
     *
     * @return double
     */
    public function getRebates()
    {
        $value = $this->get(self::rebates);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'tag' property
     *
     * @param \service\message\common\Tag $value Property value
     *
     * @return null
     */
    public function setTag(\service\message\common\Tag $value=null)
    {
        return $this->set(self::tag, $value);
    }

    /**
     * Returns value of 'tag' property
     *
     * @return \service\message\common\Tag
     */
    public function getTag()
    {
        return $this->get(self::tag);
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
     * Sets value of 'customer_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerName($value)
    {
        return $this->set(self::customer_name, $value);
    }

    /**
     * Returns value of 'customer_name' property
     *
     * @return string
     */
    public function getCustomerName()
    {
        $value = $this->get(self::customer_name);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'receipt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReceipt($value)
    {
        return $this->set(self::receipt, $value);
    }

    /**
     * Returns value of 'receipt' property
     *
     * @return integer
     */
    public function getReceipt()
    {
        $value = $this->get(self::receipt);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'contractor_id' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getContractorId()
    {
        $value = $this->get(self::contractor_id);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'contractor' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractor($value)
    {
        return $this->set(self::contractor, $value);
    }

    /**
     * Returns value of 'contractor' property
     *
     * @return string
     */
    public function getContractor()
    {
        $value = $this->get(self::contractor);
        return $value === null ? (string)$value : $value;
    }
}
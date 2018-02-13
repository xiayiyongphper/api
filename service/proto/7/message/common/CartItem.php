<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * CartItem message
 */
class CartItem extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const min_trade_amount = 1;
    const wholesaler_id = 2;
    const wholesaler_name = 3;
    const tips = 4;
    const list = 5;
    const promotions = 6;

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
        self::list => array(
            'name' => 'list',
            'repeated' => true,
            'type' => '\service\message\common\Product'
        ),
        self::promotions => array(
            'name' => 'promotions',
            'repeated' => true,
            'type' => '\service\message\common\PromotionInfo'
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
        $this->values[self::list] = array();
        $this->values[self::promotions] = array();
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
     * Appends value to 'list' list
     *
     * @param \service\message\common\Product $value Value to append
     *
     * @return null
     */
    public function appendList(\service\message\common\Product $value)
    {
        return $this->append(self::list, $value);
    }

    /**
     * Clears 'list' list
     *
     * @return null
     */
    public function clearList()
    {
        return $this->clear(self::list);
    }

    /**
     * Returns 'list' list
     *
     * @return \service\message\common\Product[]
     */
    public function getList()
    {
        return $this->get(self::list);
    }

    /**
     * Returns 'list' iterator
     *
     * @return \ArrayIterator
     */
    public function getListIterator()
    {
        return new \ArrayIterator($this->get(self::list));
    }

    /**
     * Returns element from 'list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Product
     */
    public function getListAt($offset)
    {
        return $this->get(self::list, $offset);
    }

    /**
     * Returns count of 'list' list
     *
     * @return int
     */
    public function getListCount()
    {
        return $this->count(self::list);
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
}
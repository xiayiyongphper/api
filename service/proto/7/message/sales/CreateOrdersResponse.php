<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * CreateOrdersResponse message
 */
class CreateOrdersResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const payment_method = 1;
    const wechat_pay = 2;
    const alipay_express = 3;
    const order_id = 4;
    const order = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::payment_method => array(
            'name' => 'payment_method',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wechat_pay => array(
            'name' => 'wechat_pay',
            'required' => false,
            'type' => '\service\message\common\WechatPay'
        ),
        self::alipay_express => array(
            'name' => 'alipay_express',
            'required' => false,
            'type' => '\service\message\common\AlipayExpress'
        ),
        self::order_id => array(
            'name' => 'order_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::order => array(
            'name' => 'order',
            'repeated' => true,
            'type' => '\service\message\common\Order'
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
        $this->values[self::payment_method] = null;
        $this->values[self::wechat_pay] = null;
        $this->values[self::alipay_express] = null;
        $this->values[self::order_id] = array();
        $this->values[self::order] = array();
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
     * Sets value of 'payment_method' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getPaymentMethod()
    {
        $value = $this->get(self::payment_method);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'wechat_pay' property
     *
     * @param \service\message\common\WechatPay $value Property value
     *
     * @return null
     */
    public function setWechatPay(\service\message\common\WechatPay $value=null)
    {
        return $this->set(self::wechat_pay, $value);
    }

    /**
     * Returns value of 'wechat_pay' property
     *
     * @return \service\message\common\WechatPay
     */
    public function getWechatPay()
    {
        return $this->get(self::wechat_pay);
    }

    /**
     * Sets value of 'alipay_express' property
     *
     * @param \service\message\common\AlipayExpress $value Property value
     *
     * @return null
     */
    public function setAlipayExpress(\service\message\common\AlipayExpress $value=null)
    {
        return $this->set(self::alipay_express, $value);
    }

    /**
     * Returns value of 'alipay_express' property
     *
     * @return \service\message\common\AlipayExpress
     */
    public function getAlipayExpress()
    {
        return $this->get(self::alipay_express);
    }

    /**
     * Appends value to 'order_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOrderId($value)
    {
        return $this->append(self::order_id, $value);
    }

    /**
     * Clears 'order_id' list
     *
     * @return null
     */
    public function clearOrderId()
    {
        return $this->clear(self::order_id);
    }

    /**
     * Returns 'order_id' list
     *
     * @return integer[]
     */
    public function getOrderId()
    {
        return $this->get(self::order_id);
    }

    /**
     * Returns 'order_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getOrderIdIterator()
    {
        return new \ArrayIterator($this->get(self::order_id));
    }

    /**
     * Returns element from 'order_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOrderIdAt($offset)
    {
        return $this->get(self::order_id, $offset);
    }

    /**
     * Returns count of 'order_id' list
     *
     * @return int
     */
    public function getOrderIdCount()
    {
        return $this->count(self::order_id);
    }

    /**
     * Appends value to 'order' list
     *
     * @param \service\message\common\Order $value Value to append
     *
     * @return null
     */
    public function appendOrder(\service\message\common\Order $value)
    {
        return $this->append(self::order, $value);
    }

    /**
     * Clears 'order' list
     *
     * @return null
     */
    public function clearOrder()
    {
        return $this->clear(self::order);
    }

    /**
     * Returns 'order' list
     *
     * @return \service\message\common\Order[]
     */
    public function getOrder()
    {
        return $this->get(self::order);
    }

    /**
     * Returns 'order' iterator
     *
     * @return \ArrayIterator
     */
    public function getOrderIterator()
    {
        return new \ArrayIterator($this->get(self::order));
    }

    /**
     * Returns element from 'order' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Order
     */
    public function getOrderAt($offset)
    {
        return $this->get(self::order, $offset);
    }

    /**
     * Returns count of 'order' list
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->count(self::order);
    }
}
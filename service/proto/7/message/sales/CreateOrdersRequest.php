<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * CreateOrdersRequest message
 */
class CreateOrdersRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const app_ver = 3;
    const items = 4;
    const payment_method = 5;
    const address = 6;
    const comment = 7;
    const balance = 8;
    const coupon_id = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::app_ver => array(
            'name' => 'app_ver',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::items => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\service\message\common\Product'
        ),
        self::payment_method => array(
            'name' => 'payment_method',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::address => array(
            'name' => 'address',
            'required' => false,
            'type' => '\service\message\common\Address'
        ),
        self::comment => array(
            'name' => 'comment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::balance => array(
            'name' => 'balance',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::coupon_id => array(
            'name' => 'coupon_id',
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
        $this->values[self::app_ver] = null;
        $this->values[self::items] = array();
        $this->values[self::payment_method] = null;
        $this->values[self::address] = null;
        $this->values[self::comment] = null;
        $this->values[self::balance] = null;
        $this->values[self::coupon_id] = null;
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
     * Sets value of 'app_ver' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAppVer($value)
    {
        return $this->set(self::app_ver, $value);
    }

    /**
     * Returns value of 'app_ver' property
     *
     * @return string
     */
    public function getAppVer()
    {
        $value = $this->get(self::app_ver);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'items' list
     *
     * @param \service\message\common\Product $value Value to append
     *
     * @return null
     */
    public function appendItems(\service\message\common\Product $value)
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
     * @return \service\message\common\Product[]
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
     * @return \service\message\common\Product
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
     * Sets value of 'address' property
     *
     * @param \service\message\common\Address $value Property value
     *
     * @return null
     */
    public function setAddress(\service\message\common\Address $value=null)
    {
        return $this->set(self::address, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return \service\message\common\Address
     */
    public function getAddress()
    {
        return $this->get(self::address);
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
}
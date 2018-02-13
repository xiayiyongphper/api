<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * OrderAction message
 */
class OrderAction extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const order_id = 1;
    const customer_id = 2;
    const auth_token = 3;
    const wholesaler_id = 4;
    const partial = 5;
    const products = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::order_id => array(
            'name' => 'order_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::partial => array(
            'default' => false,
            'name' => 'partial',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::products => array(
            'name' => 'products',
            'repeated' => true,
            'type' => '\service\message\common\Product'
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
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::partial] = self::$fields[self::partial]['default'];
        $this->values[self::products] = array();
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
     * Sets value of 'partial' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setPartial($value)
    {
        return $this->set(self::partial, $value);
    }

    /**
     * Returns value of 'partial' property
     *
     * @return boolean
     */
    public function getPartial()
    {
        $value = $this->get(self::partial);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'products' list
     *
     * @param \service\message\common\Product $value Value to append
     *
     * @return null
     */
    public function appendProducts(\service\message\common\Product $value)
    {
        return $this->append(self::products, $value);
    }

    /**
     * Clears 'products' list
     *
     * @return null
     */
    public function clearProducts()
    {
        return $this->clear(self::products);
    }

    /**
     * Returns 'products' list
     *
     * @return \service\message\common\Product[]
     */
    public function getProducts()
    {
        return $this->get(self::products);
    }

    /**
     * Returns 'products' iterator
     *
     * @return \ArrayIterator
     */
    public function getProductsIterator()
    {
        return new \ArrayIterator($this->get(self::products));
    }

    /**
     * Returns element from 'products' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Product
     */
    public function getProductsAt($offset)
    {
        return $this->get(self::products, $offset);
    }

    /**
     * Returns count of 'products' list
     *
     * @return int
     */
    public function getProductsCount()
    {
        return $this->count(self::products);
    }
}
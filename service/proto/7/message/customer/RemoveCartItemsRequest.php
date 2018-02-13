<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * RemoveCartItemsRequest message
 */
class RemoveCartItemsRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const products = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
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
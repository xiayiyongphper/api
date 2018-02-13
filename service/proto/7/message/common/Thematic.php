<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Thematic message
 */
class Thematic extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const store = 1;
    const products = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::store => array(
            'name' => 'store',
            'required' => false,
            'type' => '\service\message\common\Store'
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
        $this->values[self::store] = null;
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
     * Sets value of 'store' property
     *
     * @param \service\message\common\Store $value Property value
     *
     * @return null
     */
    public function setStore(\service\message\common\Store $value=null)
    {
        return $this->set(self::store, $value);
    }

    /**
     * Returns value of 'store' property
     *
     * @return \service\message\common\Store
     */
    public function getStore()
    {
        return $this->get(self::store);
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
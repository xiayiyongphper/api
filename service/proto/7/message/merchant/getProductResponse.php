<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * getProductResponse message
 */
class getProductResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const product_list = 1;
    const wholesaler_info = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::product_list => array(
            'name' => 'product_list',
            'repeated' => true,
            'type' => '\service\message\common\Product'
        ),
        self::wholesaler_info => array(
            'name' => 'wholesaler_info',
            'required' => false,
            'type' => '\service\message\common\Store'
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
        $this->values[self::product_list] = array();
        $this->values[self::wholesaler_info] = null;
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
     * Appends value to 'product_list' list
     *
     * @param \service\message\common\Product $value Value to append
     *
     * @return null
     */
    public function appendProductList(\service\message\common\Product $value)
    {
        return $this->append(self::product_list, $value);
    }

    /**
     * Clears 'product_list' list
     *
     * @return null
     */
    public function clearProductList()
    {
        return $this->clear(self::product_list);
    }

    /**
     * Returns 'product_list' list
     *
     * @return \service\message\common\Product[]
     */
    public function getProductList()
    {
        return $this->get(self::product_list);
    }

    /**
     * Returns 'product_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getProductListIterator()
    {
        return new \ArrayIterator($this->get(self::product_list));
    }

    /**
     * Returns element from 'product_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Product
     */
    public function getProductListAt($offset)
    {
        return $this->get(self::product_list, $offset);
    }

    /**
     * Returns count of 'product_list' list
     *
     * @return int
     */
    public function getProductListCount()
    {
        return $this->count(self::product_list);
    }

    /**
     * Sets value of 'wholesaler_info' property
     *
     * @param \service\message\common\Store $value Property value
     *
     * @return null
     */
    public function setWholesalerInfo(\service\message\common\Store $value=null)
    {
        return $this->set(self::wholesaler_info, $value);
    }

    /**
     * Returns value of 'wholesaler_info' property
     *
     * @return \service\message\common\Store
     */
    public function getWholesalerInfo()
    {
        return $this->get(self::wholesaler_info);
    }
}
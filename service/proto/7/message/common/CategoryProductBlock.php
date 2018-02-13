<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * CategoryProductBlock message
 */
class CategoryProductBlock extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const category = 1;
    const product_list = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::category => array(
            'name' => 'category',
            'required' => false,
            'type' => '\service\message\common\CategoryNode'
        ),
        self::product_list => array(
            'name' => 'product_list',
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
        $this->values[self::category] = null;
        $this->values[self::product_list] = array();
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
     * Sets value of 'category' property
     *
     * @param \service\message\common\CategoryNode $value Property value
     *
     * @return null
     */
    public function setCategory(\service\message\common\CategoryNode $value=null)
    {
        return $this->set(self::category, $value);
    }

    /**
     * Returns value of 'category' property
     *
     * @return \service\message\common\CategoryNode
     */
    public function getCategory()
    {
        return $this->get(self::category);
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
}
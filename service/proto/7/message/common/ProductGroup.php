<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * ProductGroup message
 */
class ProductGroup extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const promotion = 1;
    const list = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::promotion => array(
            'name' => 'promotion',
            'required' => false,
            'type' => '\service\message\common\PromotionRule'
        ),
        self::list => array(
            'name' => 'list',
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
        $this->values[self::promotion] = null;
        $this->values[self::list] = array();
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
     * Sets value of 'promotion' property
     *
     * @param \service\message\common\PromotionRule $value Property value
     *
     * @return null
     */
    public function setPromotion(\service\message\common\PromotionRule $value=null)
    {
        return $this->set(self::promotion, $value);
    }

    /**
     * Returns value of 'promotion' property
     *
     * @return \service\message\common\PromotionRule
     */
    public function getPromotion()
    {
        return $this->get(self::promotion);
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
}
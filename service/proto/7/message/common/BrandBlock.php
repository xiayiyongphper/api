<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * BrandBlock message
 */
class BrandBlock extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const brands = 1;
    const sort = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::brands => array(
            'name' => 'brands',
            'repeated' => true,
            'type' => '\service\message\common\Brand'
        ),
        self::sort => array(
            'name' => 'sort',
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
        $this->values[self::brands] = array();
        $this->values[self::sort] = null;
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
     * Appends value to 'brands' list
     *
     * @param \service\message\common\Brand $value Value to append
     *
     * @return null
     */
    public function appendBrands(\service\message\common\Brand $value)
    {
        return $this->append(self::brands, $value);
    }

    /**
     * Clears 'brands' list
     *
     * @return null
     */
    public function clearBrands()
    {
        return $this->clear(self::brands);
    }

    /**
     * Returns 'brands' list
     *
     * @return \service\message\common\Brand[]
     */
    public function getBrands()
    {
        return $this->get(self::brands);
    }

    /**
     * Returns 'brands' iterator
     *
     * @return \ArrayIterator
     */
    public function getBrandsIterator()
    {
        return new \ArrayIterator($this->get(self::brands));
    }

    /**
     * Returns element from 'brands' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Brand
     */
    public function getBrandsAt($offset)
    {
        return $this->get(self::brands, $offset);
    }

    /**
     * Returns count of 'brands' list
     *
     * @return int
     */
    public function getBrandsCount()
    {
        return $this->count(self::brands);
    }

    /**
     * Sets value of 'sort' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSort($value)
    {
        return $this->set(self::sort, $value);
    }

    /**
     * Returns value of 'sort' property
     *
     * @return integer
     */
    public function getSort()
    {
        $value = $this->get(self::sort);
        return $value === null ? (integer)$value : $value;
    }
}
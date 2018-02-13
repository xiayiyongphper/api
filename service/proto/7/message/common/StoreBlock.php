<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * StoreBlock message
 */
class StoreBlock extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const store_group = 1;
    const store_count = 2;
    const store_block_title_img = 3;
    const sort = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::store_group => array(
            'name' => 'store_group',
            'repeated' => true,
            'type' => '\service\message\common\StoreGroup'
        ),
        self::store_count => array(
            'name' => 'store_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_block_title_img => array(
            'name' => 'store_block_title_img',
            'required' => false,
            'type' => '\service\message\common\Image'
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
        $this->values[self::store_group] = array();
        $this->values[self::store_count] = null;
        $this->values[self::store_block_title_img] = null;
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
     * Appends value to 'store_group' list
     *
     * @param \service\message\common\StoreGroup $value Value to append
     *
     * @return null
     */
    public function appendStoreGroup(\service\message\common\StoreGroup $value)
    {
        return $this->append(self::store_group, $value);
    }

    /**
     * Clears 'store_group' list
     *
     * @return null
     */
    public function clearStoreGroup()
    {
        return $this->clear(self::store_group);
    }

    /**
     * Returns 'store_group' list
     *
     * @return \service\message\common\StoreGroup[]
     */
    public function getStoreGroup()
    {
        return $this->get(self::store_group);
    }

    /**
     * Returns 'store_group' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoreGroupIterator()
    {
        return new \ArrayIterator($this->get(self::store_group));
    }

    /**
     * Returns element from 'store_group' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\StoreGroup
     */
    public function getStoreGroupAt($offset)
    {
        return $this->get(self::store_group, $offset);
    }

    /**
     * Returns count of 'store_group' list
     *
     * @return int
     */
    public function getStoreGroupCount()
    {
        return $this->count(self::store_group);
    }

    /**
     * Sets value of 'store_count' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoreCount($value)
    {
        return $this->set(self::store_count, $value);
    }

    /**
     * Returns value of 'store_count' property
     *
     * @return string
     */
    public function getStoreCount()
    {
        $value = $this->get(self::store_count);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'store_block_title_img' property
     *
     * @param \service\message\common\Image $value Property value
     *
     * @return null
     */
    public function setStoreBlockTitleImg(\service\message\common\Image $value=null)
    {
        return $this->set(self::store_block_title_img, $value);
    }

    /**
     * Returns value of 'store_block_title_img' property
     *
     * @return \service\message\common\Image
     */
    public function getStoreBlockTitleImg()
    {
        return $this->get(self::store_block_title_img);
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
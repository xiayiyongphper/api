<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * StoreGroup message
 */
class StoreGroup extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const category = 1;
    const store_list = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::category => array(
            'name' => 'category',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_list => array(
            'name' => 'store_list',
            'repeated' => true,
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
        $this->values[self::category] = null;
        $this->values[self::store_list] = array();
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
     * @param string $value Property value
     *
     * @return null
     */
    public function setCategory($value)
    {
        return $this->set(self::category, $value);
    }

    /**
     * Returns value of 'category' property
     *
     * @return string
     */
    public function getCategory()
    {
        $value = $this->get(self::category);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'store_list' list
     *
     * @param \service\message\common\Store $value Value to append
     *
     * @return null
     */
    public function appendStoreList(\service\message\common\Store $value)
    {
        return $this->append(self::store_list, $value);
    }

    /**
     * Clears 'store_list' list
     *
     * @return null
     */
    public function clearStoreList()
    {
        return $this->clear(self::store_list);
    }

    /**
     * Returns 'store_list' list
     *
     * @return \service\message\common\Store[]
     */
    public function getStoreList()
    {
        return $this->get(self::store_list);
    }

    /**
     * Returns 'store_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoreListIterator()
    {
        return new \ArrayIterator($this->get(self::store_list));
    }

    /**
     * Returns element from 'store_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Store
     */
    public function getStoreListAt($offset)
    {
        return $this->get(self::store_list, $offset);
    }

    /**
     * Returns count of 'store_list' list
     *
     * @return int
     */
    public function getStoreListCount()
    {
        return $this->count(self::store_list);
    }
}
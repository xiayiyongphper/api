<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * StoreListFilterResponse message
 */
class StoreListFilterResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_list = 1;
    const store_type_list = 2;
    const store_level_list = 3;
    const customer_type_list = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractor_list => array(
            'name' => 'contractor_list',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::store_type_list => array(
            'name' => 'store_type_list',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::store_level_list => array(
            'name' => 'store_level_list',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::customer_type_list => array(
            'name' => 'customer_type_list',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
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
        $this->values[self::contractor_list] = array();
        $this->values[self::store_type_list] = array();
        $this->values[self::store_level_list] = array();
        $this->values[self::customer_type_list] = array();
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
     * Appends value to 'contractor_list' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendContractorList(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::contractor_list, $value);
    }

    /**
     * Clears 'contractor_list' list
     *
     * @return null
     */
    public function clearContractorList()
    {
        return $this->clear(self::contractor_list);
    }

    /**
     * Returns 'contractor_list' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getContractorList()
    {
        return $this->get(self::contractor_list);
    }

    /**
     * Returns 'contractor_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getContractorListIterator()
    {
        return new \ArrayIterator($this->get(self::contractor_list));
    }

    /**
     * Returns element from 'contractor_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getContractorListAt($offset)
    {
        return $this->get(self::contractor_list, $offset);
    }

    /**
     * Returns count of 'contractor_list' list
     *
     * @return int
     */
    public function getContractorListCount()
    {
        return $this->count(self::contractor_list);
    }

    /**
     * Appends value to 'store_type_list' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendStoreTypeList(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::store_type_list, $value);
    }

    /**
     * Clears 'store_type_list' list
     *
     * @return null
     */
    public function clearStoreTypeList()
    {
        return $this->clear(self::store_type_list);
    }

    /**
     * Returns 'store_type_list' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getStoreTypeList()
    {
        return $this->get(self::store_type_list);
    }

    /**
     * Returns 'store_type_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoreTypeListIterator()
    {
        return new \ArrayIterator($this->get(self::store_type_list));
    }

    /**
     * Returns element from 'store_type_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getStoreTypeListAt($offset)
    {
        return $this->get(self::store_type_list, $offset);
    }

    /**
     * Returns count of 'store_type_list' list
     *
     * @return int
     */
    public function getStoreTypeListCount()
    {
        return $this->count(self::store_type_list);
    }

    /**
     * Appends value to 'store_level_list' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendStoreLevelList(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::store_level_list, $value);
    }

    /**
     * Clears 'store_level_list' list
     *
     * @return null
     */
    public function clearStoreLevelList()
    {
        return $this->clear(self::store_level_list);
    }

    /**
     * Returns 'store_level_list' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getStoreLevelList()
    {
        return $this->get(self::store_level_list);
    }

    /**
     * Returns 'store_level_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoreLevelListIterator()
    {
        return new \ArrayIterator($this->get(self::store_level_list));
    }

    /**
     * Returns element from 'store_level_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getStoreLevelListAt($offset)
    {
        return $this->get(self::store_level_list, $offset);
    }

    /**
     * Returns count of 'store_level_list' list
     *
     * @return int
     */
    public function getStoreLevelListCount()
    {
        return $this->count(self::store_level_list);
    }

    /**
     * Appends value to 'customer_type_list' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendCustomerTypeList(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::customer_type_list, $value);
    }

    /**
     * Clears 'customer_type_list' list
     *
     * @return null
     */
    public function clearCustomerTypeList()
    {
        return $this->clear(self::customer_type_list);
    }

    /**
     * Returns 'customer_type_list' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getCustomerTypeList()
    {
        return $this->get(self::customer_type_list);
    }

    /**
     * Returns 'customer_type_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomerTypeListIterator()
    {
        return new \ArrayIterator($this->get(self::customer_type_list));
    }

    /**
     * Returns element from 'customer_type_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getCustomerTypeListAt($offset)
    {
        return $this->get(self::customer_type_list, $offset);
    }

    /**
     * Returns count of 'customer_type_list' list
     *
     * @return int
     */
    public function getCustomerTypeListCount()
    {
        return $this->count(self::customer_type_list);
    }
}
<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * EditStoreInfoResponse message
 */
class EditStoreInfoResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const store = 1;
    const areas = 2;
    const types = 3;
    const levels = 4;
    const operations = 5;
    const store_types = 6;
    const store_areas = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::store => array(
            'name' => 'store',
            'required' => false,
            'type' => '\service\message\customer\CustomerResponse'
        ),
        self::areas => array(
            'name' => 'areas',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::types => array(
            'name' => 'types',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::levels => array(
            'name' => 'levels',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::operations => array(
            'name' => 'operations',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::store_types => array(
            'name' => 'store_types',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_areas => array(
            'name' => 'store_areas',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::areas] = array();
        $this->values[self::types] = array();
        $this->values[self::levels] = array();
        $this->values[self::operations] = array();
        $this->values[self::store_types] = array();
        $this->values[self::store_areas] = array();
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
     * @param \service\message\customer\CustomerResponse $value Property value
     *
     * @return null
     */
    public function setStore(\service\message\customer\CustomerResponse $value=null)
    {
        return $this->set(self::store, $value);
    }

    /**
     * Returns value of 'store' property
     *
     * @return \service\message\customer\CustomerResponse
     */
    public function getStore()
    {
        return $this->get(self::store);
    }

    /**
     * Appends value to 'areas' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendAreas(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::areas, $value);
    }

    /**
     * Clears 'areas' list
     *
     * @return null
     */
    public function clearAreas()
    {
        return $this->clear(self::areas);
    }

    /**
     * Returns 'areas' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getAreas()
    {
        return $this->get(self::areas);
    }

    /**
     * Returns 'areas' iterator
     *
     * @return \ArrayIterator
     */
    public function getAreasIterator()
    {
        return new \ArrayIterator($this->get(self::areas));
    }

    /**
     * Returns element from 'areas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getAreasAt($offset)
    {
        return $this->get(self::areas, $offset);
    }

    /**
     * Returns count of 'areas' list
     *
     * @return int
     */
    public function getAreasCount()
    {
        return $this->count(self::areas);
    }

    /**
     * Appends value to 'types' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendTypes(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::types, $value);
    }

    /**
     * Clears 'types' list
     *
     * @return null
     */
    public function clearTypes()
    {
        return $this->clear(self::types);
    }

    /**
     * Returns 'types' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getTypes()
    {
        return $this->get(self::types);
    }

    /**
     * Returns 'types' iterator
     *
     * @return \ArrayIterator
     */
    public function getTypesIterator()
    {
        return new \ArrayIterator($this->get(self::types));
    }

    /**
     * Returns element from 'types' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getTypesAt($offset)
    {
        return $this->get(self::types, $offset);
    }

    /**
     * Returns count of 'types' list
     *
     * @return int
     */
    public function getTypesCount()
    {
        return $this->count(self::types);
    }

    /**
     * Appends value to 'levels' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendLevels(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::levels, $value);
    }

    /**
     * Clears 'levels' list
     *
     * @return null
     */
    public function clearLevels()
    {
        return $this->clear(self::levels);
    }

    /**
     * Returns 'levels' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getLevels()
    {
        return $this->get(self::levels);
    }

    /**
     * Returns 'levels' iterator
     *
     * @return \ArrayIterator
     */
    public function getLevelsIterator()
    {
        return new \ArrayIterator($this->get(self::levels));
    }

    /**
     * Returns element from 'levels' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getLevelsAt($offset)
    {
        return $this->get(self::levels, $offset);
    }

    /**
     * Returns count of 'levels' list
     *
     * @return int
     */
    public function getLevelsCount()
    {
        return $this->count(self::levels);
    }

    /**
     * Appends value to 'operations' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendOperations(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::operations, $value);
    }

    /**
     * Clears 'operations' list
     *
     * @return null
     */
    public function clearOperations()
    {
        return $this->clear(self::operations);
    }

    /**
     * Returns 'operations' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getOperations()
    {
        return $this->get(self::operations);
    }

    /**
     * Returns 'operations' iterator
     *
     * @return \ArrayIterator
     */
    public function getOperationsIterator()
    {
        return new \ArrayIterator($this->get(self::operations));
    }

    /**
     * Returns element from 'operations' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getOperationsAt($offset)
    {
        return $this->get(self::operations, $offset);
    }

    /**
     * Returns count of 'operations' list
     *
     * @return int
     */
    public function getOperationsCount()
    {
        return $this->count(self::operations);
    }

    /**
     * Appends value to 'store_types' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStoreTypes($value)
    {
        return $this->append(self::store_types, $value);
    }

    /**
     * Clears 'store_types' list
     *
     * @return null
     */
    public function clearStoreTypes()
    {
        return $this->clear(self::store_types);
    }

    /**
     * Returns 'store_types' list
     *
     * @return string[]
     */
    public function getStoreTypes()
    {
        return $this->get(self::store_types);
    }

    /**
     * Returns 'store_types' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoreTypesIterator()
    {
        return new \ArrayIterator($this->get(self::store_types));
    }

    /**
     * Returns element from 'store_types' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStoreTypesAt($offset)
    {
        return $this->get(self::store_types, $offset);
    }

    /**
     * Returns count of 'store_types' list
     *
     * @return int
     */
    public function getStoreTypesCount()
    {
        return $this->count(self::store_types);
    }

    /**
     * Appends value to 'store_areas' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStoreAreas($value)
    {
        return $this->append(self::store_areas, $value);
    }

    /**
     * Clears 'store_areas' list
     *
     * @return null
     */
    public function clearStoreAreas()
    {
        return $this->clear(self::store_areas);
    }

    /**
     * Returns 'store_areas' list
     *
     * @return string[]
     */
    public function getStoreAreas()
    {
        return $this->get(self::store_areas);
    }

    /**
     * Returns 'store_areas' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoreAreasIterator()
    {
        return new \ArrayIterator($this->get(self::store_areas));
    }

    /**
     * Returns element from 'store_areas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStoreAreasAt($offset)
    {
        return $this->get(self::store_areas, $offset);
    }

    /**
     * Returns count of 'store_areas' list
     *
     * @return int
     */
    public function getStoreAreasCount()
    {
        return $this->count(self::store_areas);
    }
}
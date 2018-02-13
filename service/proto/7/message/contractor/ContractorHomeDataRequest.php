<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorHomeDataRequest message
 */
class ContractorHomeDataRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const store_ids = 2;
    const city = 3;
    const is_admin = 4;
    const city_list = 5;
    const role = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::store_ids => array(
            'name' => 'store_ids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::is_admin => array(
            'name' => 'is_admin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::city_list => array(
            'name' => 'city_list',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::role => array(
            'name' => 'role',
            'required' => false,
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
        $this->values[self::contractor_id] = null;
        $this->values[self::store_ids] = array();
        $this->values[self::city] = null;
        $this->values[self::is_admin] = null;
        $this->values[self::city_list] = array();
        $this->values[self::role] = null;
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
     * Sets value of 'contractor_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContractorId($value)
    {
        return $this->set(self::contractor_id, $value);
    }

    /**
     * Returns value of 'contractor_id' property
     *
     * @return integer
     */
    public function getContractorId()
    {
        $value = $this->get(self::contractor_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'store_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendStoreIds($value)
    {
        return $this->append(self::store_ids, $value);
    }

    /**
     * Clears 'store_ids' list
     *
     * @return null
     */
    public function clearStoreIds()
    {
        return $this->clear(self::store_ids);
    }

    /**
     * Returns 'store_ids' list
     *
     * @return integer[]
     */
    public function getStoreIds()
    {
        return $this->get(self::store_ids);
    }

    /**
     * Returns 'store_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoreIdsIterator()
    {
        return new \ArrayIterator($this->get(self::store_ids));
    }

    /**
     * Returns element from 'store_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getStoreIdsAt($offset)
    {
        return $this->get(self::store_ids, $offset);
    }

    /**
     * Returns count of 'store_ids' list
     *
     * @return int
     */
    public function getStoreIdsCount()
    {
        return $this->count(self::store_ids);
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::city, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::city);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'is_admin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsAdmin($value)
    {
        return $this->set(self::is_admin, $value);
    }

    /**
     * Returns value of 'is_admin' property
     *
     * @return integer
     */
    public function getIsAdmin()
    {
        $value = $this->get(self::is_admin);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'city_list' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendCityList($value)
    {
        return $this->append(self::city_list, $value);
    }

    /**
     * Clears 'city_list' list
     *
     * @return null
     */
    public function clearCityList()
    {
        return $this->clear(self::city_list);
    }

    /**
     * Returns 'city_list' list
     *
     * @return string[]
     */
    public function getCityList()
    {
        return $this->get(self::city_list);
    }

    /**
     * Returns 'city_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getCityListIterator()
    {
        return new \ArrayIterator($this->get(self::city_list));
    }

    /**
     * Returns element from 'city_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getCityListAt($offset)
    {
        return $this->get(self::city_list, $offset);
    }

    /**
     * Returns count of 'city_list' list
     *
     * @return int
     */
    public function getCityListCount()
    {
        return $this->count(self::city_list);
    }

    /**
     * Sets value of 'role' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRole($value)
    {
        return $this->set(self::role, $value);
    }

    /**
     * Returns value of 'role' property
     *
     * @return string
     */
    public function getRole()
    {
        $value = $this->get(self::role);
        return $value === null ? (string)$value : $value;
    }
}
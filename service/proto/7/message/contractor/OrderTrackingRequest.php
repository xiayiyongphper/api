<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * OrderTrackingRequest message
 */
class OrderTrackingRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const role = 3;
    const city_list = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::role => array(
            'name' => 'role',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city_list => array(
            'name' => 'city_list',
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
        $this->values[self::contractor_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::role] = null;
        $this->values[self::city_list] = array();
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
     * Sets value of 'auth_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthToken($value)
    {
        return $this->set(self::auth_token, $value);
    }

    /**
     * Returns value of 'auth_token' property
     *
     * @return string
     */
    public function getAuthToken()
    {
        $value = $this->get(self::auth_token);
        return $value === null ? (string)$value : $value;
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
}
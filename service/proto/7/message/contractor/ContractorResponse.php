<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorResponse message
 */
class ContractorResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const name = 2;
    const city = 3;
    const auth_token = 4;
    const phone = 5;
    const city_name = 6;
    const city_list = 7;
    const role = 8;
    const role_permission = 9;
    const role_name = 10;
    const city_list_name = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city_name => array(
            'name' => 'city_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::role_permission => array(
            'name' => 'role_permission',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::role_name => array(
            'name' => 'role_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city_list_name => array(
            'name' => 'city_list_name',
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
        $this->values[self::name] = null;
        $this->values[self::city] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::phone] = null;
        $this->values[self::city_name] = null;
        $this->values[self::city_list] = array();
        $this->values[self::role] = null;
        $this->values[self::role_permission] = array();
        $this->values[self::role_name] = null;
        $this->values[self::city_list_name] = null;
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::name, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::name);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value)
    {
        return $this->set(self::phone, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone()
    {
        $value = $this->get(self::phone);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'city_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCityName($value)
    {
        return $this->set(self::city_name, $value);
    }

    /**
     * Returns value of 'city_name' property
     *
     * @return string
     */
    public function getCityName()
    {
        $value = $this->get(self::city_name);
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
     * Appends value to 'role_permission' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendRolePermission($value)
    {
        return $this->append(self::role_permission, $value);
    }

    /**
     * Clears 'role_permission' list
     *
     * @return null
     */
    public function clearRolePermission()
    {
        return $this->clear(self::role_permission);
    }

    /**
     * Returns 'role_permission' list
     *
     * @return string[]
     */
    public function getRolePermission()
    {
        return $this->get(self::role_permission);
    }

    /**
     * Returns 'role_permission' iterator
     *
     * @return \ArrayIterator
     */
    public function getRolePermissionIterator()
    {
        return new \ArrayIterator($this->get(self::role_permission));
    }

    /**
     * Returns element from 'role_permission' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getRolePermissionAt($offset)
    {
        return $this->get(self::role_permission, $offset);
    }

    /**
     * Returns count of 'role_permission' list
     *
     * @return int
     */
    public function getRolePermissionCount()
    {
        return $this->count(self::role_permission);
    }

    /**
     * Sets value of 'role_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRoleName($value)
    {
        return $this->set(self::role_name, $value);
    }

    /**
     * Returns value of 'role_name' property
     *
     * @return string
     */
    public function getRoleName()
    {
        $value = $this->get(self::role_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'city_list_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCityListName($value)
    {
        return $this->set(self::city_list_name, $value);
    }

    /**
     * Returns value of 'city_list_name' property
     *
     * @return string
     */
    public function getCityListName()
    {
        $value = $this->get(self::city_list_name);
        return $value === null ? (string)$value : $value;
    }
}
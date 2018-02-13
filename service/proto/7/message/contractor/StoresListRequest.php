<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * StoresListRequest message
 */
class StoresListRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const list_type = 3;
    const lat = 4;
    const lng = 5;
    const pagination = 6;
    const city = 7;
    const sort = 8;
    const store_flag = 9;
    const user_flag = 10;
    const no_visit_day = 11;
    const order_day = 12;
    const order_start = 13;
    const order_end = 14;
    const customer_types = 15;
    const customer_levels = 16;
    const contractors = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::list_type => array(
            'name' => 'list_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::lat => array(
            'name' => 'lat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::lng => array(
            'name' => 'lng',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::pagination => array(
            'name' => 'pagination',
            'required' => false,
            'type' => '\service\message\common\Pagination'
        ),
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sort => array(
            'name' => 'sort',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::store_flag => array(
            'default' => 1,
            'name' => 'store_flag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::user_flag => array(
            'default' => 0,
            'name' => 'user_flag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::no_visit_day => array(
            'default' => 0,
            'name' => 'no_visit_day',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::order_day => array(
            'default' => 0,
            'name' => 'order_day',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::order_start => array(
            'default' => 0,
            'name' => 'order_start',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::order_end => array(
            'default' => 0,
            'name' => 'order_end',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::customer_types => array(
            'default' => '',
            'name' => 'customer_types',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_levels => array(
            'default' => '',
            'name' => 'customer_levels',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::contractors => array(
            'default' => '',
            'name' => 'contractors',
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
        $this->values[self::auth_token] = null;
        $this->values[self::list_type] = null;
        $this->values[self::lat] = null;
        $this->values[self::lng] = null;
        $this->values[self::pagination] = null;
        $this->values[self::city] = null;
        $this->values[self::sort] = null;
        $this->values[self::store_flag] = self::$fields[self::store_flag]['default'];
        $this->values[self::user_flag] = self::$fields[self::user_flag]['default'];
        $this->values[self::no_visit_day] = self::$fields[self::no_visit_day]['default'];
        $this->values[self::order_day] = self::$fields[self::order_day]['default'];
        $this->values[self::order_start] = self::$fields[self::order_start]['default'];
        $this->values[self::order_end] = self::$fields[self::order_end]['default'];
        $this->values[self::customer_types] = self::$fields[self::customer_types]['default'];
        $this->values[self::customer_levels] = self::$fields[self::customer_levels]['default'];
        $this->values[self::contractors] = self::$fields[self::contractors]['default'];
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
     * Sets value of 'list_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setListType($value)
    {
        return $this->set(self::list_type, $value);
    }

    /**
     * Returns value of 'list_type' property
     *
     * @return integer
     */
    public function getListType()
    {
        $value = $this->get(self::list_type);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'lat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLat($value)
    {
        return $this->set(self::lat, $value);
    }

    /**
     * Returns value of 'lat' property
     *
     * @return string
     */
    public function getLat()
    {
        $value = $this->get(self::lat);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'lng' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLng($value)
    {
        return $this->set(self::lng, $value);
    }

    /**
     * Returns value of 'lng' property
     *
     * @return string
     */
    public function getLng()
    {
        $value = $this->get(self::lng);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'pagination' property
     *
     * @param \service\message\common\Pagination $value Property value
     *
     * @return null
     */
    public function setPagination(\service\message\common\Pagination $value=null)
    {
        return $this->set(self::pagination, $value);
    }

    /**
     * Returns value of 'pagination' property
     *
     * @return \service\message\common\Pagination
     */
    public function getPagination()
    {
        return $this->get(self::pagination);
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

    /**
     * Sets value of 'store_flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStoreFlag($value)
    {
        return $this->set(self::store_flag, $value);
    }

    /**
     * Returns value of 'store_flag' property
     *
     * @return integer
     */
    public function getStoreFlag()
    {
        $value = $this->get(self::store_flag);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'user_flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUserFlag($value)
    {
        return $this->set(self::user_flag, $value);
    }

    /**
     * Returns value of 'user_flag' property
     *
     * @return integer
     */
    public function getUserFlag()
    {
        $value = $this->get(self::user_flag);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'no_visit_day' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNoVisitDay($value)
    {
        return $this->set(self::no_visit_day, $value);
    }

    /**
     * Returns value of 'no_visit_day' property
     *
     * @return integer
     */
    public function getNoVisitDay()
    {
        $value = $this->get(self::no_visit_day);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'order_day' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrderDay($value)
    {
        return $this->set(self::order_day, $value);
    }

    /**
     * Returns value of 'order_day' property
     *
     * @return integer
     */
    public function getOrderDay()
    {
        $value = $this->get(self::order_day);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'order_start' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrderStart($value)
    {
        return $this->set(self::order_start, $value);
    }

    /**
     * Returns value of 'order_start' property
     *
     * @return integer
     */
    public function getOrderStart()
    {
        $value = $this->get(self::order_start);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'order_end' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrderEnd($value)
    {
        return $this->set(self::order_end, $value);
    }

    /**
     * Returns value of 'order_end' property
     *
     * @return integer
     */
    public function getOrderEnd()
    {
        $value = $this->get(self::order_end);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'customer_types' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerTypes($value)
    {
        return $this->set(self::customer_types, $value);
    }

    /**
     * Returns value of 'customer_types' property
     *
     * @return string
     */
    public function getCustomerTypes()
    {
        $value = $this->get(self::customer_types);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'customer_levels' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerLevels($value)
    {
        return $this->set(self::customer_levels, $value);
    }

    /**
     * Returns value of 'customer_levels' property
     *
     * @return string
     */
    public function getCustomerLevels()
    {
        $value = $this->get(self::customer_levels);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'contractors' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractors($value)
    {
        return $this->set(self::contractors, $value);
    }

    /**
     * Returns value of 'contractors' property
     *
     * @return string
     */
    public function getContractors()
    {
        $value = $this->get(self::contractors);
        return $value === null ? (string)$value : $value;
    }
}
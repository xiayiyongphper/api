<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * CustomerResponse message
 */
class CustomerResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const status = 1;
    const auth_token = 2;
    const area_id = 3;
    const address = 4;
    const detail_address = 5;
    const store_name = 6;
    const storekeeper = 7;
    const store_area = 8;
    const phone = 9;
    const username = 10;
    const customer_id = 11;
    const province = 12;
    const city = 13;
    const district = 14;
    const lat = 15;
    const lng = 16;
    const fill_user_info = 17;
    const orders_total_price = 18;
    const not_pass_reason = 19;
    const receiver_name = 20;
    const receiver_phone = 21;
    const created_at = 22;
    const balance = 23;
    const contractor = 24;
    const city_name = 25;
    const area_name = 26;
    const type = 27;
    const level = 28;
    const distance = 29;
    const type_name = 30;
    const level_name = 31;
    const customer_style = 32;
    const business_license_img = 33;
    const store_front_img = 34;
    const business_license_no = 35;
    const contractor_id = 36;
    const storekeeper_instore_times = 37;
    const apply_at = 38;
    const is_visit = 39;
    const coupon_available_count = 40;
    const first_order_id = 41;
    const is_intention = 42;
    const intention_id = 43;
    const disabled = 44;
    const last_visit_label = 45;
    const last_ordered_label = 46;
    const store_type = 47;
    const store_area_new = 48;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::status => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::area_id => array(
            'name' => 'area_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::address => array(
            'name' => 'address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::detail_address => array(
            'name' => 'detail_address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_name => array(
            'name' => 'store_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::storekeeper => array(
            'name' => 'storekeeper',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_area => array(
            'name' => 'store_area',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::phone => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::username => array(
            'name' => 'username',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::province => array(
            'name' => 'province',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::district => array(
            'name' => 'district',
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
        self::fill_user_info => array(
            'name' => 'fill_user_info',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::orders_total_price => array(
            'default' => 0,
            'name' => 'orders_total_price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::not_pass_reason => array(
            'name' => 'not_pass_reason',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::receiver_name => array(
            'name' => 'receiver_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::receiver_phone => array(
            'name' => 'receiver_phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::created_at => array(
            'name' => 'created_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::balance => array(
            'name' => 'balance',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::contractor => array(
            'name' => 'contractor',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city_name => array(
            'name' => 'city_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::area_name => array(
            'name' => 'area_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::type => array(
            'name' => 'type',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::level => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::distance => array(
            'name' => 'distance',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::type_name => array(
            'name' => 'type_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::level_name => array(
            'name' => 'level_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_style => array(
            'name' => 'customer_style',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::business_license_img => array(
            'name' => 'business_license_img',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_front_img => array(
            'name' => 'store_front_img',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::business_license_no => array(
            'name' => 'business_license_no',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::storekeeper_instore_times => array(
            'name' => 'storekeeper_instore_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::apply_at => array(
            'name' => 'apply_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::is_visit => array(
            'name' => 'is_visit',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::coupon_available_count => array(
            'name' => 'coupon_available_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::first_order_id => array(
            'name' => 'first_order_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::is_intention => array(
            'name' => 'is_intention',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::intention_id => array(
            'name' => 'intention_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::disabled => array(
            'name' => 'disabled',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::last_visit_label => array(
            'name' => 'last_visit_label',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::last_ordered_label => array(
            'name' => 'last_ordered_label',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_type => array(
            'name' => 'store_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::store_area_new => array(
            'name' => 'store_area_new',
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
        $this->values[self::status] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::area_id] = null;
        $this->values[self::address] = null;
        $this->values[self::detail_address] = null;
        $this->values[self::store_name] = null;
        $this->values[self::storekeeper] = null;
        $this->values[self::store_area] = null;
        $this->values[self::phone] = null;
        $this->values[self::username] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::province] = null;
        $this->values[self::city] = null;
        $this->values[self::district] = null;
        $this->values[self::lat] = null;
        $this->values[self::lng] = null;
        $this->values[self::fill_user_info] = null;
        $this->values[self::orders_total_price] = self::$fields[self::orders_total_price]['default'];
        $this->values[self::not_pass_reason] = null;
        $this->values[self::receiver_name] = null;
        $this->values[self::receiver_phone] = null;
        $this->values[self::created_at] = null;
        $this->values[self::balance] = null;
        $this->values[self::contractor] = null;
        $this->values[self::city_name] = null;
        $this->values[self::area_name] = null;
        $this->values[self::type] = array();
        $this->values[self::level] = null;
        $this->values[self::distance] = null;
        $this->values[self::type_name] = null;
        $this->values[self::level_name] = null;
        $this->values[self::customer_style] = null;
        $this->values[self::business_license_img] = null;
        $this->values[self::store_front_img] = null;
        $this->values[self::business_license_no] = null;
        $this->values[self::contractor_id] = null;
        $this->values[self::storekeeper_instore_times] = null;
        $this->values[self::apply_at] = null;
        $this->values[self::is_visit] = null;
        $this->values[self::coupon_available_count] = null;
        $this->values[self::first_order_id] = null;
        $this->values[self::is_intention] = null;
        $this->values[self::intention_id] = null;
        $this->values[self::disabled] = null;
        $this->values[self::last_visit_label] = null;
        $this->values[self::last_ordered_label] = null;
        $this->values[self::store_type] = null;
        $this->values[self::store_area_new] = null;
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
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::status, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::status);
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
     * Sets value of 'area_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAreaId($value)
    {
        return $this->set(self::area_id, $value);
    }

    /**
     * Returns value of 'area_id' property
     *
     * @return integer
     */
    public function getAreaId()
    {
        $value = $this->get(self::area_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress($value)
    {
        return $this->set(self::address, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return string
     */
    public function getAddress()
    {
        $value = $this->get(self::address);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'detail_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDetailAddress($value)
    {
        return $this->set(self::detail_address, $value);
    }

    /**
     * Returns value of 'detail_address' property
     *
     * @return string
     */
    public function getDetailAddress()
    {
        $value = $this->get(self::detail_address);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'store_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoreName($value)
    {
        return $this->set(self::store_name, $value);
    }

    /**
     * Returns value of 'store_name' property
     *
     * @return string
     */
    public function getStoreName()
    {
        $value = $this->get(self::store_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'storekeeper' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStorekeeper($value)
    {
        return $this->set(self::storekeeper, $value);
    }

    /**
     * Returns value of 'storekeeper' property
     *
     * @return string
     */
    public function getStorekeeper()
    {
        $value = $this->get(self::storekeeper);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'store_area' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStoreArea($value)
    {
        return $this->set(self::store_area, $value);
    }

    /**
     * Returns value of 'store_area' property
     *
     * @return integer
     */
    public function getStoreArea()
    {
        $value = $this->get(self::store_area);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::username, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return string
     */
    public function getUsername()
    {
        $value = $this->get(self::username);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'customer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCustomerId($value)
    {
        return $this->set(self::customer_id, $value);
    }

    /**
     * Returns value of 'customer_id' property
     *
     * @return integer
     */
    public function getCustomerId()
    {
        $value = $this->get(self::customer_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'province' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProvince($value)
    {
        return $this->set(self::province, $value);
    }

    /**
     * Returns value of 'province' property
     *
     * @return integer
     */
    public function getProvince()
    {
        $value = $this->get(self::province);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'city' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getCity()
    {
        $value = $this->get(self::city);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'district' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDistrict($value)
    {
        return $this->set(self::district, $value);
    }

    /**
     * Returns value of 'district' property
     *
     * @return integer
     */
    public function getDistrict()
    {
        $value = $this->get(self::district);
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
     * Sets value of 'fill_user_info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFillUserInfo($value)
    {
        return $this->set(self::fill_user_info, $value);
    }

    /**
     * Returns value of 'fill_user_info' property
     *
     * @return string
     */
    public function getFillUserInfo()
    {
        $value = $this->get(self::fill_user_info);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'orders_total_price' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setOrdersTotalPrice($value)
    {
        return $this->set(self::orders_total_price, $value);
    }

    /**
     * Returns value of 'orders_total_price' property
     *
     * @return double
     */
    public function getOrdersTotalPrice()
    {
        $value = $this->get(self::orders_total_price);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'not_pass_reason' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNotPassReason($value)
    {
        return $this->set(self::not_pass_reason, $value);
    }

    /**
     * Returns value of 'not_pass_reason' property
     *
     * @return string
     */
    public function getNotPassReason()
    {
        $value = $this->get(self::not_pass_reason);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'receiver_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReceiverName($value)
    {
        return $this->set(self::receiver_name, $value);
    }

    /**
     * Returns value of 'receiver_name' property
     *
     * @return string
     */
    public function getReceiverName()
    {
        $value = $this->get(self::receiver_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'receiver_phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReceiverPhone($value)
    {
        return $this->set(self::receiver_phone, $value);
    }

    /**
     * Returns value of 'receiver_phone' property
     *
     * @return string
     */
    public function getReceiverPhone()
    {
        $value = $this->get(self::receiver_phone);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'created_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedAt($value)
    {
        return $this->set(self::created_at, $value);
    }

    /**
     * Returns value of 'created_at' property
     *
     * @return string
     */
    public function getCreatedAt()
    {
        $value = $this->get(self::created_at);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'balance' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setBalance($value)
    {
        return $this->set(self::balance, $value);
    }

    /**
     * Returns value of 'balance' property
     *
     * @return double
     */
    public function getBalance()
    {
        $value = $this->get(self::balance);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'contractor' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractor($value)
    {
        return $this->set(self::contractor, $value);
    }

    /**
     * Returns value of 'contractor' property
     *
     * @return string
     */
    public function getContractor()
    {
        $value = $this->get(self::contractor);
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
     * Sets value of 'area_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAreaName($value)
    {
        return $this->set(self::area_name, $value);
    }

    /**
     * Returns value of 'area_name' property
     *
     * @return string
     */
    public function getAreaName()
    {
        $value = $this->get(self::area_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'type' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendType($value)
    {
        return $this->append(self::type, $value);
    }

    /**
     * Clears 'type' list
     *
     * @return null
     */
    public function clearType()
    {
        return $this->clear(self::type);
    }

    /**
     * Returns 'type' list
     *
     * @return integer[]
     */
    public function getType()
    {
        return $this->get(self::type);
    }

    /**
     * Returns 'type' iterator
     *
     * @return \ArrayIterator
     */
    public function getTypeIterator()
    {
        return new \ArrayIterator($this->get(self::type));
    }

    /**
     * Returns element from 'type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getTypeAt($offset)
    {
        return $this->get(self::type, $offset);
    }

    /**
     * Returns count of 'type' list
     *
     * @return int
     */
    public function getTypeCount()
    {
        return $this->count(self::type);
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::level, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::level);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'distance' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setDistance($value)
    {
        return $this->set(self::distance, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return double
     */
    public function getDistance()
    {
        $value = $this->get(self::distance);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'type_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTypeName($value)
    {
        return $this->set(self::type_name, $value);
    }

    /**
     * Returns value of 'type_name' property
     *
     * @return string
     */
    public function getTypeName()
    {
        $value = $this->get(self::type_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'level_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLevelName($value)
    {
        return $this->set(self::level_name, $value);
    }

    /**
     * Returns value of 'level_name' property
     *
     * @return string
     */
    public function getLevelName()
    {
        $value = $this->get(self::level_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'customer_style' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCustomerStyle($value)
    {
        return $this->set(self::customer_style, $value);
    }

    /**
     * Returns value of 'customer_style' property
     *
     * @return integer
     */
    public function getCustomerStyle()
    {
        $value = $this->get(self::customer_style);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'business_license_img' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBusinessLicenseImg($value)
    {
        return $this->set(self::business_license_img, $value);
    }

    /**
     * Returns value of 'business_license_img' property
     *
     * @return string
     */
    public function getBusinessLicenseImg()
    {
        $value = $this->get(self::business_license_img);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'store_front_img' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoreFrontImg($value)
    {
        return $this->set(self::store_front_img, $value);
    }

    /**
     * Returns value of 'store_front_img' property
     *
     * @return string
     */
    public function getStoreFrontImg()
    {
        $value = $this->get(self::store_front_img);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'business_license_no' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBusinessLicenseNo($value)
    {
        return $this->set(self::business_license_no, $value);
    }

    /**
     * Returns value of 'business_license_no' property
     *
     * @return string
     */
    public function getBusinessLicenseNo()
    {
        $value = $this->get(self::business_license_no);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'storekeeper_instore_times' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStorekeeperInstoreTimes($value)
    {
        return $this->set(self::storekeeper_instore_times, $value);
    }

    /**
     * Returns value of 'storekeeper_instore_times' property
     *
     * @return string
     */
    public function getStorekeeperInstoreTimes()
    {
        $value = $this->get(self::storekeeper_instore_times);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'apply_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setApplyAt($value)
    {
        return $this->set(self::apply_at, $value);
    }

    /**
     * Returns value of 'apply_at' property
     *
     * @return string
     */
    public function getApplyAt()
    {
        $value = $this->get(self::apply_at);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'is_visit' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsVisit($value)
    {
        return $this->set(self::is_visit, $value);
    }

    /**
     * Returns value of 'is_visit' property
     *
     * @return integer
     */
    public function getIsVisit()
    {
        $value = $this->get(self::is_visit);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'coupon_available_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCouponAvailableCount($value)
    {
        return $this->set(self::coupon_available_count, $value);
    }

    /**
     * Returns value of 'coupon_available_count' property
     *
     * @return integer
     */
    public function getCouponAvailableCount()
    {
        $value = $this->get(self::coupon_available_count);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'first_order_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFirstOrderId($value)
    {
        return $this->set(self::first_order_id, $value);
    }

    /**
     * Returns value of 'first_order_id' property
     *
     * @return integer
     */
    public function getFirstOrderId()
    {
        $value = $this->get(self::first_order_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'is_intention' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsIntention($value)
    {
        return $this->set(self::is_intention, $value);
    }

    /**
     * Returns value of 'is_intention' property
     *
     * @return integer
     */
    public function getIsIntention()
    {
        $value = $this->get(self::is_intention);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'intention_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIntentionId($value)
    {
        return $this->set(self::intention_id, $value);
    }

    /**
     * Returns value of 'intention_id' property
     *
     * @return integer
     */
    public function getIntentionId()
    {
        $value = $this->get(self::intention_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'disabled' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDisabled($value)
    {
        return $this->set(self::disabled, $value);
    }

    /**
     * Returns value of 'disabled' property
     *
     * @return integer
     */
    public function getDisabled()
    {
        $value = $this->get(self::disabled);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'last_visit_label' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastVisitLabel($value)
    {
        return $this->set(self::last_visit_label, $value);
    }

    /**
     * Returns value of 'last_visit_label' property
     *
     * @return string
     */
    public function getLastVisitLabel()
    {
        $value = $this->get(self::last_visit_label);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'last_ordered_label' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastOrderedLabel($value)
    {
        return $this->set(self::last_ordered_label, $value);
    }

    /**
     * Returns value of 'last_ordered_label' property
     *
     * @return string
     */
    public function getLastOrderedLabel()
    {
        $value = $this->get(self::last_ordered_label);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'store_type' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoreType($value)
    {
        return $this->set(self::store_type, $value);
    }

    /**
     * Returns value of 'store_type' property
     *
     * @return string
     */
    public function getStoreType()
    {
        $value = $this->get(self::store_type);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'store_area_new' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoreAreaNew($value)
    {
        return $this->set(self::store_area_new, $value);
    }

    /**
     * Returns value of 'store_area_new' property
     *
     * @return string
     */
    public function getStoreAreaNew()
    {
        $value = $this->get(self::store_area_new);
        return $value === null ? (string)$value : $value;
    }
}
<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * FillCustomerInfoRequest message
 */
class FillCustomerInfoRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const province = 3;
    const city = 4;
    const district = 5;
    const store_name = 6;
    const address = 7;
    const detail_address = 8;
    const store_keeper = 9;
    const lat = 10;
    const lng = 11;
    const store_area = 12;
    const business_license_img = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::store_name => array(
            'name' => 'store_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::store_keeper => array(
            'name' => 'store_keeper',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::store_area => array(
            'name' => 'store_area',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::business_license_img => array(
            'name' => 'business_license_img',
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
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::province] = null;
        $this->values[self::city] = null;
        $this->values[self::district] = null;
        $this->values[self::store_name] = null;
        $this->values[self::address] = null;
        $this->values[self::detail_address] = null;
        $this->values[self::store_keeper] = null;
        $this->values[self::lat] = null;
        $this->values[self::lng] = null;
        $this->values[self::store_area] = null;
        $this->values[self::business_license_img] = null;
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
     * Sets value of 'store_keeper' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoreKeeper($value)
    {
        return $this->set(self::store_keeper, $value);
    }

    /**
     * Returns value of 'store_keeper' property
     *
     * @return string
     */
    public function getStoreKeeper()
    {
        $value = $this->get(self::store_keeper);
        return $value === null ? (string)$value : $value;
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
}
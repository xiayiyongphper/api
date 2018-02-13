<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * CreateCustomerIntentionRequest message
 */
class CreateCustomerIntentionRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const business_license_no = 3;
    const area_id = 4;
    const address = 5;
    const detail_address = 6;
    const store_name = 7;
    const storekeeper = 8;
    const phone = 9;
    const lat = 10;
    const lng = 11;
    const type = 14;
    const level = 15;
    const business_license_img = 16;
    const store_front_img = 17;
    const city = 18;
    const storekeeper_instore_times = 19;
    const img_lat = 20;
    const img_lng = 21;

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
        self::business_license_no => array(
            'name' => 'business_license_no',
            'required' => true,
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
        self::phone => array(
            'name' => 'phone',
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
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::storekeeper_instore_times => array(
            'name' => 'storekeeper_instore_times',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::img_lat => array(
            'name' => 'img_lat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::img_lng => array(
            'name' => 'img_lng',
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
        $this->values[self::business_license_no] = null;
        $this->values[self::area_id] = null;
        $this->values[self::address] = null;
        $this->values[self::detail_address] = null;
        $this->values[self::store_name] = null;
        $this->values[self::storekeeper] = null;
        $this->values[self::phone] = null;
        $this->values[self::lat] = null;
        $this->values[self::lng] = null;
        $this->values[self::type] = array();
        $this->values[self::level] = null;
        $this->values[self::business_license_img] = null;
        $this->values[self::store_front_img] = null;
        $this->values[self::city] = null;
        $this->values[self::storekeeper_instore_times] = null;
        $this->values[self::img_lat] = null;
        $this->values[self::img_lng] = null;
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
     * Sets value of 'img_lat' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgLat($value)
    {
        return $this->set(self::img_lat, $value);
    }

    /**
     * Returns value of 'img_lat' property
     *
     * @return string
     */
    public function getImgLat()
    {
        $value = $this->get(self::img_lat);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'img_lng' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgLng($value)
    {
        return $this->set(self::img_lng, $value);
    }

    /**
     * Returns value of 'img_lng' property
     *
     * @return string
     */
    public function getImgLng()
    {
        $value = $this->get(self::img_lng);
        return $value === null ? (string)$value : $value;
    }
}
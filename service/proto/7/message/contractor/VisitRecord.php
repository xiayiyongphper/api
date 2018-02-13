<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * VisitRecord message
 */
class VisitRecord extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const record_id = 1;
    const contractor_id = 2;
    const contractor_name = 3;
    const customer_id = 4;
    const store_name = 5;
    const visit_purpose = 6;
    const visit_purpose_options = 7;
    const visit_content = 8;
    const feedback = 9;
    const created_at = 10;
    const visited_at = 11;
    const lng = 12;
    const lat = 13;
    const locate_address = 14;
    const is_intended = 15;
    const gallery = 16;
    const editable = 17;
    const store_front_img = 18;
    const visit_way_options = 19;
    const visit_way = 20;
    const serial_number = 21;
    const last_order_info = 22;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::record_id => array(
            'name' => 'record_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::contractor_name => array(
            'name' => 'contractor_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::store_name => array(
            'name' => 'store_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::visit_purpose => array(
            'name' => 'visit_purpose',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::visit_purpose_options => array(
            'name' => 'visit_purpose_options',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::visit_content => array(
            'name' => 'visit_content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::feedback => array(
            'name' => 'feedback',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::created_at => array(
            'name' => 'created_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::visited_at => array(
            'name' => 'visited_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::lng => array(
            'name' => 'lng',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::lat => array(
            'name' => 'lat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::locate_address => array(
            'name' => 'locate_address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::is_intended => array(
            'name' => 'is_intended',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::gallery => array(
            'name' => 'gallery',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::editable => array(
            'default' => false,
            'name' => 'editable',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::store_front_img => array(
            'name' => 'store_front_img',
            'required' => false,
            'type' => '\service\message\common\Image'
        ),
        self::visit_way_options => array(
            'name' => 'visit_way_options',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::visit_way => array(
            'name' => 'visit_way',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::serial_number => array(
            'name' => 'serial_number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::last_order_info => array(
            'name' => 'last_order_info',
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
        $this->values[self::record_id] = null;
        $this->values[self::contractor_id] = null;
        $this->values[self::contractor_name] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::store_name] = null;
        $this->values[self::visit_purpose] = null;
        $this->values[self::visit_purpose_options] = array();
        $this->values[self::visit_content] = null;
        $this->values[self::feedback] = null;
        $this->values[self::created_at] = null;
        $this->values[self::visited_at] = null;
        $this->values[self::lng] = null;
        $this->values[self::lat] = null;
        $this->values[self::locate_address] = null;
        $this->values[self::is_intended] = null;
        $this->values[self::gallery] = array();
        $this->values[self::editable] = self::$fields[self::editable]['default'];
        $this->values[self::store_front_img] = null;
        $this->values[self::visit_way_options] = array();
        $this->values[self::visit_way] = null;
        $this->values[self::serial_number] = null;
        $this->values[self::last_order_info] = null;
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
     * Sets value of 'record_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecordId($value)
    {
        return $this->set(self::record_id, $value);
    }

    /**
     * Returns value of 'record_id' property
     *
     * @return integer
     */
    public function getRecordId()
    {
        $value = $this->get(self::record_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'contractor_id' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getContractorId()
    {
        $value = $this->get(self::contractor_id);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'contractor_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractorName($value)
    {
        return $this->set(self::contractor_name, $value);
    }

    /**
     * Returns value of 'contractor_name' property
     *
     * @return string
     */
    public function getContractorName()
    {
        $value = $this->get(self::contractor_name);
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
     * Sets value of 'visit_purpose' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVisitPurpose($value)
    {
        return $this->set(self::visit_purpose, $value);
    }

    /**
     * Returns value of 'visit_purpose' property
     *
     * @return string
     */
    public function getVisitPurpose()
    {
        $value = $this->get(self::visit_purpose);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'visit_purpose_options' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendVisitPurposeOptions(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::visit_purpose_options, $value);
    }

    /**
     * Clears 'visit_purpose_options' list
     *
     * @return null
     */
    public function clearVisitPurposeOptions()
    {
        return $this->clear(self::visit_purpose_options);
    }

    /**
     * Returns 'visit_purpose_options' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getVisitPurposeOptions()
    {
        return $this->get(self::visit_purpose_options);
    }

    /**
     * Returns 'visit_purpose_options' iterator
     *
     * @return \ArrayIterator
     */
    public function getVisitPurposeOptionsIterator()
    {
        return new \ArrayIterator($this->get(self::visit_purpose_options));
    }

    /**
     * Returns element from 'visit_purpose_options' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getVisitPurposeOptionsAt($offset)
    {
        return $this->get(self::visit_purpose_options, $offset);
    }

    /**
     * Returns count of 'visit_purpose_options' list
     *
     * @return int
     */
    public function getVisitPurposeOptionsCount()
    {
        return $this->count(self::visit_purpose_options);
    }

    /**
     * Sets value of 'visit_content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVisitContent($value)
    {
        return $this->set(self::visit_content, $value);
    }

    /**
     * Returns value of 'visit_content' property
     *
     * @return string
     */
    public function getVisitContent()
    {
        $value = $this->get(self::visit_content);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'feedback' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFeedback($value)
    {
        return $this->set(self::feedback, $value);
    }

    /**
     * Returns value of 'feedback' property
     *
     * @return string
     */
    public function getFeedback()
    {
        $value = $this->get(self::feedback);
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
     * Sets value of 'visited_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVisitedAt($value)
    {
        return $this->set(self::visited_at, $value);
    }

    /**
     * Returns value of 'visited_at' property
     *
     * @return string
     */
    public function getVisitedAt()
    {
        $value = $this->get(self::visited_at);
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
     * Sets value of 'locate_address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLocateAddress($value)
    {
        return $this->set(self::locate_address, $value);
    }

    /**
     * Returns value of 'locate_address' property
     *
     * @return string
     */
    public function getLocateAddress()
    {
        $value = $this->get(self::locate_address);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'is_intended' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsIntended($value)
    {
        return $this->set(self::is_intended, $value);
    }

    /**
     * Returns value of 'is_intended' property
     *
     * @return integer
     */
    public function getIsIntended()
    {
        $value = $this->get(self::is_intended);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'gallery' list
     *
     * @param \service\message\common\Image $value Value to append
     *
     * @return null
     */
    public function appendGallery(\service\message\common\Image $value)
    {
        return $this->append(self::gallery, $value);
    }

    /**
     * Clears 'gallery' list
     *
     * @return null
     */
    public function clearGallery()
    {
        return $this->clear(self::gallery);
    }

    /**
     * Returns 'gallery' list
     *
     * @return \service\message\common\Image[]
     */
    public function getGallery()
    {
        return $this->get(self::gallery);
    }

    /**
     * Returns 'gallery' iterator
     *
     * @return \ArrayIterator
     */
    public function getGalleryIterator()
    {
        return new \ArrayIterator($this->get(self::gallery));
    }

    /**
     * Returns element from 'gallery' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Image
     */
    public function getGalleryAt($offset)
    {
        return $this->get(self::gallery, $offset);
    }

    /**
     * Returns count of 'gallery' list
     *
     * @return int
     */
    public function getGalleryCount()
    {
        return $this->count(self::gallery);
    }

    /**
     * Sets value of 'editable' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setEditable($value)
    {
        return $this->set(self::editable, $value);
    }

    /**
     * Returns value of 'editable' property
     *
     * @return boolean
     */
    public function getEditable()
    {
        $value = $this->get(self::editable);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'store_front_img' property
     *
     * @param \service\message\common\Image $value Property value
     *
     * @return null
     */
    public function setStoreFrontImg(\service\message\common\Image $value=null)
    {
        return $this->set(self::store_front_img, $value);
    }

    /**
     * Returns value of 'store_front_img' property
     *
     * @return \service\message\common\Image
     */
    public function getStoreFrontImg()
    {
        return $this->get(self::store_front_img);
    }

    /**
     * Appends value to 'visit_way_options' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendVisitWayOptions(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::visit_way_options, $value);
    }

    /**
     * Clears 'visit_way_options' list
     *
     * @return null
     */
    public function clearVisitWayOptions()
    {
        return $this->clear(self::visit_way_options);
    }

    /**
     * Returns 'visit_way_options' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getVisitWayOptions()
    {
        return $this->get(self::visit_way_options);
    }

    /**
     * Returns 'visit_way_options' iterator
     *
     * @return \ArrayIterator
     */
    public function getVisitWayOptionsIterator()
    {
        return new \ArrayIterator($this->get(self::visit_way_options));
    }

    /**
     * Returns element from 'visit_way_options' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getVisitWayOptionsAt($offset)
    {
        return $this->get(self::visit_way_options, $offset);
    }

    /**
     * Returns count of 'visit_way_options' list
     *
     * @return int
     */
    public function getVisitWayOptionsCount()
    {
        return $this->count(self::visit_way_options);
    }

    /**
     * Sets value of 'visit_way' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVisitWay($value)
    {
        return $this->set(self::visit_way, $value);
    }

    /**
     * Returns value of 'visit_way' property
     *
     * @return string
     */
    public function getVisitWay()
    {
        $value = $this->get(self::visit_way);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'serial_number' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSerialNumber($value)
    {
        return $this->set(self::serial_number, $value);
    }

    /**
     * Returns value of 'serial_number' property
     *
     * @return integer
     */
    public function getSerialNumber()
    {
        $value = $this->get(self::serial_number);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'last_order_info' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastOrderInfo($value)
    {
        return $this->set(self::last_order_info, $value);
    }

    /**
     * Returns value of 'last_order_info' property
     *
     * @return string
     */
    public function getLastOrderInfo()
    {
        $value = $this->get(self::last_order_info);
        return $value === null ? (string)$value : $value;
    }
}
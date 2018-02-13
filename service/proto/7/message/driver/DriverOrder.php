<?php
/**
 *
 * service.message.driver package
 */

namespace service\message\driver;
/**
 * DriverOrder message
 */
class DriverOrder extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const driver_order_id = 1;
    const driver_id = 2;
    const order = 3;
    const state = 4;
    const status = 5;
    const created_at = 7;
    const show_delete = 8;
    const increment_id = 9;
    const wholesaler_id = 10;
    const wholesaler_name = 11;
    const customer_id = 12;
    const customer_name = 13;
    const customer_phone = 14;
    const updated_at = 15;
    const completed_at = 16;
    const order_id = 17;
    const lat = 18;
    const lng = 19;
    const delivery_time = 20;
    const status_label = 21;
    const driver_name = 22;
    const driver_phone = 23;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::driver_order_id => array(
            'name' => 'driver_order_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::driver_id => array(
            'name' => 'driver_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::order => array(
            'name' => 'order',
            'required' => false,
            'type' => '\service\message\common\Order'
        ),
        self::state => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::status => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::created_at => array(
            'name' => 'created_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::show_delete => array(
            'name' => 'show_delete',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::increment_id => array(
            'name' => 'increment_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wholesaler_name => array(
            'name' => 'wholesaler_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::customer_name => array(
            'name' => 'customer_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_phone => array(
            'name' => 'customer_phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::updated_at => array(
            'name' => 'updated_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::completed_at => array(
            'name' => 'completed_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::order_id => array(
            'name' => 'order_id',
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
        self::delivery_time => array(
            'name' => 'delivery_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::status_label => array(
            'name' => 'status_label',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::driver_name => array(
            'name' => 'driver_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::driver_phone => array(
            'name' => 'driver_phone',
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
        $this->values[self::driver_order_id] = null;
        $this->values[self::driver_id] = null;
        $this->values[self::order] = null;
        $this->values[self::state] = null;
        $this->values[self::status] = null;
        $this->values[self::created_at] = null;
        $this->values[self::show_delete] = null;
        $this->values[self::increment_id] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::wholesaler_name] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::customer_name] = null;
        $this->values[self::customer_phone] = null;
        $this->values[self::updated_at] = null;
        $this->values[self::completed_at] = null;
        $this->values[self::order_id] = null;
        $this->values[self::lat] = null;
        $this->values[self::lng] = null;
        $this->values[self::delivery_time] = null;
        $this->values[self::status_label] = null;
        $this->values[self::driver_name] = null;
        $this->values[self::driver_phone] = null;
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
     * Sets value of 'driver_order_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDriverOrderId($value)
    {
        return $this->set(self::driver_order_id, $value);
    }

    /**
     * Returns value of 'driver_order_id' property
     *
     * @return integer
     */
    public function getDriverOrderId()
    {
        $value = $this->get(self::driver_order_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'driver_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDriverId($value)
    {
        return $this->set(self::driver_id, $value);
    }

    /**
     * Returns value of 'driver_id' property
     *
     * @return integer
     */
    public function getDriverId()
    {
        $value = $this->get(self::driver_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'order' property
     *
     * @param \service\message\common\Order $value Property value
     *
     * @return null
     */
    public function setOrder(\service\message\common\Order $value=null)
    {
        return $this->set(self::order, $value);
    }

    /**
     * Returns value of 'order' property
     *
     * @return \service\message\common\Order
     */
    public function getOrder()
    {
        return $this->get(self::order);
    }

    /**
     * Sets value of 'state' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::state, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return string
     */
    public function getState()
    {
        $value = $this->get(self::state);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'status' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getStatus()
    {
        $value = $this->get(self::status);
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
     * Sets value of 'show_delete' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShowDelete($value)
    {
        return $this->set(self::show_delete, $value);
    }

    /**
     * Returns value of 'show_delete' property
     *
     * @return integer
     */
    public function getShowDelete()
    {
        $value = $this->get(self::show_delete);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'increment_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIncrementId($value)
    {
        return $this->set(self::increment_id, $value);
    }

    /**
     * Returns value of 'increment_id' property
     *
     * @return string
     */
    public function getIncrementId()
    {
        $value = $this->get(self::increment_id);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'wholesaler_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWholesalerId($value)
    {
        return $this->set(self::wholesaler_id, $value);
    }

    /**
     * Returns value of 'wholesaler_id' property
     *
     * @return integer
     */
    public function getWholesalerId()
    {
        $value = $this->get(self::wholesaler_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'wholesaler_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWholesalerName($value)
    {
        return $this->set(self::wholesaler_name, $value);
    }

    /**
     * Returns value of 'wholesaler_name' property
     *
     * @return string
     */
    public function getWholesalerName()
    {
        $value = $this->get(self::wholesaler_name);
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
     * Sets value of 'customer_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerName($value)
    {
        return $this->set(self::customer_name, $value);
    }

    /**
     * Returns value of 'customer_name' property
     *
     * @return string
     */
    public function getCustomerName()
    {
        $value = $this->get(self::customer_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'customer_phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerPhone($value)
    {
        return $this->set(self::customer_phone, $value);
    }

    /**
     * Returns value of 'customer_phone' property
     *
     * @return string
     */
    public function getCustomerPhone()
    {
        $value = $this->get(self::customer_phone);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'updated_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUpdatedAt($value)
    {
        return $this->set(self::updated_at, $value);
    }

    /**
     * Returns value of 'updated_at' property
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        $value = $this->get(self::updated_at);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'completed_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCompletedAt($value)
    {
        return $this->set(self::completed_at, $value);
    }

    /**
     * Returns value of 'completed_at' property
     *
     * @return string
     */
    public function getCompletedAt()
    {
        $value = $this->get(self::completed_at);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'order_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrderId($value)
    {
        return $this->set(self::order_id, $value);
    }

    /**
     * Returns value of 'order_id' property
     *
     * @return integer
     */
    public function getOrderId()
    {
        $value = $this->get(self::order_id);
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
     * Sets value of 'delivery_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeliveryTime($value)
    {
        return $this->set(self::delivery_time, $value);
    }

    /**
     * Returns value of 'delivery_time' property
     *
     * @return integer
     */
    public function getDeliveryTime()
    {
        $value = $this->get(self::delivery_time);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'status_label' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStatusLabel($value)
    {
        return $this->set(self::status_label, $value);
    }

    /**
     * Returns value of 'status_label' property
     *
     * @return string
     */
    public function getStatusLabel()
    {
        $value = $this->get(self::status_label);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'driver_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDriverName($value)
    {
        return $this->set(self::driver_name, $value);
    }

    /**
     * Returns value of 'driver_name' property
     *
     * @return string
     */
    public function getDriverName()
    {
        $value = $this->get(self::driver_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'driver_phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDriverPhone($value)
    {
        return $this->set(self::driver_phone, $value);
    }

    /**
     * Returns value of 'driver_phone' property
     *
     * @return string
     */
    public function getDriverPhone()
    {
        $value = $this->get(self::driver_phone);
        return $value === null ? (string)$value : $value;
    }
}
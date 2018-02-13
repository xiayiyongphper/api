<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorOrderDetailRequest message
 */
class ContractorOrderDetailRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const driver_order_id = 3;
    const order_id = 4;
    const increment_id = 5;
    const scan_code = 6;

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
        self::driver_order_id => array(
            'name' => 'driver_order_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::order_id => array(
            'name' => 'order_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::increment_id => array(
            'name' => 'increment_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::scan_code => array(
            'name' => 'scan_code',
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
        $this->values[self::driver_order_id] = null;
        $this->values[self::order_id] = null;
        $this->values[self::increment_id] = null;
        $this->values[self::scan_code] = null;
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
     * Sets value of 'driver_order_id' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getDriverOrderId()
    {
        $value = $this->get(self::driver_order_id);
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
     * Sets value of 'scan_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setScanCode($value)
    {
        return $this->set(self::scan_code, $value);
    }

    /**
     * Returns value of 'scan_code' property
     *
     * @return string
     */
    public function getScanCode()
    {
        $value = $this->get(self::scan_code);
        return $value === null ? (string)$value : $value;
    }
}
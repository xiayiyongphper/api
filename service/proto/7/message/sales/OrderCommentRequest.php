<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * OrderCommentRequest message
 */
class OrderCommentRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const wholesaler_id = 3;
    const order_id = 4;
    const quality = 5;
    const delivery = 6;
    const comment = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::order_id => array(
            'name' => 'order_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::quality => array(
            'name' => 'quality',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::delivery => array(
            'name' => 'delivery',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::comment => array(
            'name' => 'comment',
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
        $this->values[self::wholesaler_id] = null;
        $this->values[self::order_id] = null;
        $this->values[self::quality] = null;
        $this->values[self::delivery] = null;
        $this->values[self::comment] = null;
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
     * Sets value of 'quality' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setQuality($value)
    {
        return $this->set(self::quality, $value);
    }

    /**
     * Returns value of 'quality' property
     *
     * @return double
     */
    public function getQuality()
    {
        $value = $this->get(self::quality);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'delivery' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setDelivery($value)
    {
        return $this->set(self::delivery, $value);
    }

    /**
     * Returns value of 'delivery' property
     *
     * @return double
     */
    public function getDelivery()
    {
        $value = $this->get(self::delivery);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value)
    {
        return $this->set(self::comment, $value);
    }

    /**
     * Returns value of 'comment' property
     *
     * @return string
     */
    public function getComment()
    {
        $value = $this->get(self::comment);
        return $value === null ? (string)$value : $value;
    }
}
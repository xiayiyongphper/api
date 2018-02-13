<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * CustomerComplaintRequest message
 */
class CustomerComplaintRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const wholesaler_id = 3;
    const increment_id = 4;
    const contact_name = 5;
    const contact_phone = 6;
    const content = 7;
    const type = 8;

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
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::increment_id => array(
            'name' => 'increment_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::contact_name => array(
            'name' => 'contact_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::contact_phone => array(
            'name' => 'contact_phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::content => array(
            'name' => 'content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::type => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::increment_id] = null;
        $this->values[self::contact_name] = null;
        $this->values[self::contact_phone] = null;
        $this->values[self::content] = null;
        $this->values[self::type] = null;
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
     * @param string $value Property value
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
     * @return string
     */
    public function getWholesalerId()
    {
        $value = $this->get(self::wholesaler_id);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'contact_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContactName($value)
    {
        return $this->set(self::contact_name, $value);
    }

    /**
     * Returns value of 'contact_name' property
     *
     * @return string
     */
    public function getContactName()
    {
        $value = $this->get(self::contact_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'contact_phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContactPhone($value)
    {
        return $this->set(self::contact_phone, $value);
    }

    /**
     * Returns value of 'contact_phone' property
     *
     * @return string
     */
    public function getContactPhone()
    {
        $value = $this->get(self::contact_phone);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::content, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::content);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::type, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::type);
        return $value === null ? (integer)$value : $value;
    }
}
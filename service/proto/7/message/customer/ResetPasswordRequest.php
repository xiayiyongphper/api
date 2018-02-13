<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * ResetPasswordRequest message
 */
class ResetPasswordRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const phone = 3;
    const code = 4;
    const new_password = 5;
    const type = 6;
    const original_password = 7;

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
        self::phone => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::code => array(
            'name' => 'code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::new_password => array(
            'name' => 'new_password',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::type => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::original_password => array(
            'name' => 'original_password',
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
        $this->values[self::phone] = null;
        $this->values[self::code] = null;
        $this->values[self::new_password] = null;
        $this->values[self::type] = null;
        $this->values[self::original_password] = null;
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
     * Sets value of 'code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::code, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return string
     */
    public function getCode()
    {
        $value = $this->get(self::code);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'new_password' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNewPassword($value)
    {
        return $this->set(self::new_password, $value);
    }

    /**
     * Returns value of 'new_password' property
     *
     * @return string
     */
    public function getNewPassword()
    {
        $value = $this->get(self::new_password);
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

    /**
     * Sets value of 'original_password' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOriginalPassword($value)
    {
        return $this->set(self::original_password, $value);
    }

    /**
     * Returns value of 'original_password' property
     *
     * @return string
     */
    public function getOriginalPassword()
    {
        $value = $this->get(self::original_password);
        return $value === null ? (string)$value : $value;
    }
}
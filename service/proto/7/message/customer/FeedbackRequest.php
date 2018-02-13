<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * FeedbackRequest message
 */
class FeedbackRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const user_name = 3;
    const phone = 4;
    const typevar = 5;
    const type_id = 6;
    const content = 7;

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
        self::user_name => array(
            'name' => 'user_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::typevar => array(
            'name' => 'typevar',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::type_id => array(
            'name' => 'type_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::content => array(
            'name' => 'content',
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
        $this->values[self::user_name] = null;
        $this->values[self::phone] = null;
        $this->values[self::typevar] = null;
        $this->values[self::type_id] = null;
        $this->values[self::content] = null;
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
     * Sets value of 'user_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value)
    {
        return $this->set(self::user_name, $value);
    }

    /**
     * Returns value of 'user_name' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::user_name);
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
     * Sets value of 'typevar' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTypevar($value)
    {
        return $this->set(self::typevar, $value);
    }

    /**
     * Returns value of 'typevar' property
     *
     * @return string
     */
    public function getTypevar()
    {
        $value = $this->get(self::typevar);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'type_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTypeId($value)
    {
        return $this->set(self::type_id, $value);
    }

    /**
     * Returns value of 'type_id' property
     *
     * @return integer
     */
    public function getTypeId()
    {
        $value = $this->get(self::type_id);
        return $value === null ? (integer)$value : $value;
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
}
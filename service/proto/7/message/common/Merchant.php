<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Merchant message
 */
class Merchant extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const wholesaler_id = 2;
    const user_name = 3;
    const real_name = 4;
    const phone = 5;
    const id_card = 6;
    const id_card_front = 7;
    const id_card_back = 8;
    const email = 9;
    const auth_token = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::user_name => array(
            'name' => 'user_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::real_name => array(
            'name' => 'real_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::id_card => array(
            'name' => 'id_card',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::id_card_front => array(
            'name' => 'id_card_front',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::id_card_back => array(
            'name' => 'id_card_back',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::email => array(
            'name' => 'email',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
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
        $this->values[self::wholesaler_id] = null;
        $this->values[self::user_name] = null;
        $this->values[self::real_name] = null;
        $this->values[self::phone] = null;
        $this->values[self::id_card] = null;
        $this->values[self::id_card_front] = null;
        $this->values[self::id_card_back] = null;
        $this->values[self::email] = null;
        $this->values[self::auth_token] = null;
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
     * Sets value of 'real_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRealName($value)
    {
        return $this->set(self::real_name, $value);
    }

    /**
     * Returns value of 'real_name' property
     *
     * @return string
     */
    public function getRealName()
    {
        $value = $this->get(self::real_name);
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
     * Sets value of 'id_card' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIdCard($value)
    {
        return $this->set(self::id_card, $value);
    }

    /**
     * Returns value of 'id_card' property
     *
     * @return string
     */
    public function getIdCard()
    {
        $value = $this->get(self::id_card);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'id_card_front' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIdCardFront($value)
    {
        return $this->set(self::id_card_front, $value);
    }

    /**
     * Returns value of 'id_card_front' property
     *
     * @return string
     */
    public function getIdCardFront()
    {
        $value = $this->get(self::id_card_front);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'id_card_back' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIdCardBack($value)
    {
        return $this->set(self::id_card_back, $value);
    }

    /**
     * Returns value of 'id_card_back' property
     *
     * @return string
     */
    public function getIdCardBack()
    {
        $value = $this->get(self::id_card_back);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'email' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEmail($value)
    {
        return $this->set(self::email, $value);
    }

    /**
     * Returns value of 'email' property
     *
     * @return string
     */
    public function getEmail()
    {
        $value = $this->get(self::email);
        return $value === null ? (string)$value : $value;
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
}
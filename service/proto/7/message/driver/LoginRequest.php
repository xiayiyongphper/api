<?php
/**
 *
 * service.message.driver package
 */

namespace service\message\driver;
/**
 * LoginRequest message
 */
class LoginRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const phone = 1;
    const password = 2;
    const code = 3;
    const login_type = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::phone => array(
            'name' => 'phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::password => array(
            'name' => 'password',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::code => array(
            'name' => 'code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::login_type => array(
            'name' => 'login_type',
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
        $this->values[self::phone] = null;
        $this->values[self::password] = null;
        $this->values[self::code] = null;
        $this->values[self::login_type] = null;
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
     * Sets value of 'password' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPassword($value)
    {
        return $this->set(self::password, $value);
    }

    /**
     * Returns value of 'password' property
     *
     * @return string
     */
    public function getPassword()
    {
        $value = $this->get(self::password);
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
     * Sets value of 'login_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLoginType($value)
    {
        return $this->set(self::login_type, $value);
    }

    /**
     * Returns value of 'login_type' property
     *
     * @return integer
     */
    public function getLoginType()
    {
        $value = $this->get(self::login_type);
        return $value === null ? (integer)$value : $value;
    }
}
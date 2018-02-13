<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * RegisterRequest message
 */
class RegisterRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const username = 1;
    const phone = 2;
    const password = 3;
    const code = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::username => array(
            'name' => 'username',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::password => array(
            'name' => 'password',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::code => array(
            'name' => 'code',
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
        $this->values[self::username] = null;
        $this->values[self::phone] = null;
        $this->values[self::password] = null;
        $this->values[self::code] = null;
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
     * Sets value of 'username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::username, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return string
     */
    public function getUsername()
    {
        $value = $this->get(self::username);
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
}
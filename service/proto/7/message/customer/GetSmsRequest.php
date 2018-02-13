<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * GetSmsRequest message
 */
class GetSmsRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const type = 1;
    const phone = 2;
    const token = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::type => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::token => array(
            'name' => 'token',
            'required' => true,
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
        $this->values[self::type] = null;
        $this->values[self::phone] = null;
        $this->values[self::token] = null;
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
     * Sets value of 'type' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getType()
    {
        $value = $this->get(self::type);
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
     * Sets value of 'token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToken($value)
    {
        return $this->set(self::token, $value);
    }

    /**
     * Returns value of 'token' property
     *
     * @return string
     */
    public function getToken()
    {
        $value = $this->get(self::token);
        return $value === null ? (string)$value : $value;
    }
}
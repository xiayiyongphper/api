<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * CheckCustomerRequest message
 */
class CheckCustomerRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const field = 1;
    const username = 2;
    const phone = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::field => array(
            'name' => 'field',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::username => array(
            'name' => 'username',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
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
        $this->values[self::field] = null;
        $this->values[self::username] = null;
        $this->values[self::phone] = null;
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
     * Sets value of 'field' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setField($value)
    {
        return $this->set(self::field, $value);
    }

    /**
     * Returns value of 'field' property
     *
     * @return integer
     */
    public function getField()
    {
        $value = $this->get(self::field);
        return $value === null ? (integer)$value : $value;
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
}
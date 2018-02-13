<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * AuthorizeResponse message
 */
class AuthorizeResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const access_token = 1;
    const expires = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::access_token => array(
            'name' => 'access_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::expires => array(
            'name' => 'expires',
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
        $this->values[self::access_token] = null;
        $this->values[self::expires] = null;
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
     * Sets value of 'access_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAccessToken($value)
    {
        return $this->set(self::access_token, $value);
    }

    /**
     * Returns value of 'access_token' property
     *
     * @return string
     */
    public function getAccessToken()
    {
        $value = $this->get(self::access_token);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'expires' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpires($value)
    {
        return $this->set(self::expires, $value);
    }

    /**
     * Returns value of 'expires' property
     *
     * @return integer
     */
    public function getExpires()
    {
        $value = $this->get(self::expires);
        return $value === null ? (integer)$value : $value;
    }
}
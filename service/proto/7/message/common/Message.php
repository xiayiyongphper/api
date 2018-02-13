<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Message message
 */
class Message extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const text = 1;
    const title = 2;
    const code = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::text => array(
            'name' => 'text',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::title => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::code => array(
            'name' => 'code',
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
        $this->values[self::text] = null;
        $this->values[self::title] = null;
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
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value)
    {
        return $this->set(self::text, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText()
    {
        $value = $this->get(self::text);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::title, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::title);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'code' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getCode()
    {
        $value = $this->get(self::code);
        return $value === null ? (integer)$value : $value;
    }
}
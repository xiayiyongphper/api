<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * tipsRequest message
 */
class tipsRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const identifier = 1;
    const format = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::identifier => array(
            'name' => 'identifier',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::format => array(
            'name' => 'format',
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
        $this->values[self::identifier] = null;
        $this->values[self::format] = null;
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
     * Sets value of 'identifier' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIdentifier($value)
    {
        return $this->set(self::identifier, $value);
    }

    /**
     * Returns value of 'identifier' property
     *
     * @return string
     */
    public function getIdentifier()
    {
        $value = $this->get(self::identifier);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'format' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFormat($value)
    {
        return $this->set(self::format, $value);
    }

    /**
     * Returns value of 'format' property
     *
     * @return string
     */
    public function getFormat()
    {
        $value = $this->get(self::format);
        return $value === null ? (string)$value : $value;
    }
}
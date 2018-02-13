<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * SecurityInfo message
 */
class SecurityInfo extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const icon = 1;
    const text = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::icon => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::text => array(
            'name' => 'text',
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
        $this->values[self::icon] = null;
        $this->values[self::text] = null;
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
     * Sets value of 'icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIcon($value)
    {
        return $this->set(self::icon, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return string
     */
    public function getIcon()
    {
        $value = $this->get(self::icon);
        return $value === null ? (string)$value : $value;
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
}
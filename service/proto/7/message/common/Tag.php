<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Tag message
 */
class Tag extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const short = 1;
    const text = 2;
    const color = 3;
    const icon = 4;
    const url = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::short => array(
            'name' => 'short',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::text => array(
            'name' => 'text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::color => array(
            'name' => 'color',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::icon => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::url => array(
            'name' => 'url',
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
        $this->values[self::short] = null;
        $this->values[self::text] = null;
        $this->values[self::color] = null;
        $this->values[self::icon] = null;
        $this->values[self::url] = null;
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
     * Sets value of 'short' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShort($value)
    {
        return $this->set(self::short, $value);
    }

    /**
     * Returns value of 'short' property
     *
     * @return string
     */
    public function getShort()
    {
        $value = $this->get(self::short);
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

    /**
     * Sets value of 'color' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setColor($value)
    {
        return $this->set(self::color, $value);
    }

    /**
     * Returns value of 'color' property
     *
     * @return string
     */
    public function getColor()
    {
        $value = $this->get(self::color);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::url, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::url);
        return $value === null ? (string)$value : $value;
    }
}
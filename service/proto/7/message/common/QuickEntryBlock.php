<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * QuickEntryBlock message
 */
class QuickEntryBlock extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const src = 1;
    const href = 2;
    const title = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::src => array(
            'name' => 'src',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::href => array(
            'name' => 'href',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::title => array(
            'name' => 'title',
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
        $this->values[self::src] = null;
        $this->values[self::href] = null;
        $this->values[self::title] = null;
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
     * Sets value of 'src' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSrc($value)
    {
        return $this->set(self::src, $value);
    }

    /**
     * Returns value of 'src' property
     *
     * @return string
     */
    public function getSrc()
    {
        $value = $this->get(self::src);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'href' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHref($value)
    {
        return $this->set(self::href, $value);
    }

    /**
     * Returns value of 'href' property
     *
     * @return string
     */
    public function getHref()
    {
        $value = $this->get(self::href);
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
}
<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * CmsResponse message
 */
class CmsResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const page_id = 1;
    const title = 2;
    const identifier = 3;
    const content = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::page_id => array(
            'name' => 'page_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::title => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::identifier => array(
            'name' => 'identifier',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::content => array(
            'name' => 'content',
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
        $this->values[self::page_id] = null;
        $this->values[self::title] = null;
        $this->values[self::identifier] = null;
        $this->values[self::content] = null;
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
     * Sets value of 'page_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPageId($value)
    {
        return $this->set(self::page_id, $value);
    }

    /**
     * Returns value of 'page_id' property
     *
     * @return integer
     */
    public function getPageId()
    {
        $value = $this->get(self::page_id);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::content, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::content);
        return $value === null ? (string)$value : $value;
    }
}
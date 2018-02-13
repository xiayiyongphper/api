<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * CmsRequest message
 */
class CmsRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const page_id = 1;
    const identifier = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::page_id => array(
            'name' => 'page_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::identifier => array(
            'name' => 'identifier',
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
        $this->values[self::identifier] = null;
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
}
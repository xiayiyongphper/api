<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Rule message
 */
class Rule extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const condition = 1;
    const off = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::condition => array(
            'name' => 'condition',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::off => array(
            'name' => 'off',
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
        $this->values[self::condition] = null;
        $this->values[self::off] = null;
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
     * Sets value of 'condition' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCondition($value)
    {
        return $this->set(self::condition, $value);
    }

    /**
     * Returns value of 'condition' property
     *
     * @return string
     */
    public function getCondition()
    {
        $value = $this->get(self::condition);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'off' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOff($value)
    {
        return $this->set(self::off, $value);
    }

    /**
     * Returns value of 'off' property
     *
     * @return string
     */
    public function getOff()
    {
        $value = $this->get(self::off);
        return $value === null ? (string)$value : $value;
    }
}
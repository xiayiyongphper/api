<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Command message
 */
class Command extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const cmd = 1;
    const scope = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::cmd => array(
            'name' => 'cmd',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::scope => array(
            'name' => 'scope',
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
        $this->values[self::cmd] = null;
        $this->values[self::scope] = null;
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
     * Sets value of 'cmd' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCmd($value)
    {
        return $this->set(self::cmd, $value);
    }

    /**
     * Returns value of 'cmd' property
     *
     * @return string
     */
    public function getCmd()
    {
        $value = $this->get(self::cmd);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'scope' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setScope($value)
    {
        return $this->set(self::scope, $value);
    }

    /**
     * Returns value of 'scope' property
     *
     * @return string
     */
    public function getScope()
    {
        $value = $this->get(self::scope);
        return $value === null ? (string)$value : $value;
    }
}
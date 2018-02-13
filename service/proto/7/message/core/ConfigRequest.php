<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * ConfigRequest message
 */
class ConfigRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const system = 1;
    const channel = 2;
    const ver = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::system => array(
            'name' => 'system',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::channel => array(
            'name' => 'channel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ver => array(
            'name' => 'ver',
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
        $this->values[self::system] = null;
        $this->values[self::channel] = null;
        $this->values[self::ver] = null;
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
     * Sets value of 'system' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSystem($value)
    {
        return $this->set(self::system, $value);
    }

    /**
     * Returns value of 'system' property
     *
     * @return integer
     */
    public function getSystem()
    {
        $value = $this->get(self::system);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'channel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::channel, $value);
    }

    /**
     * Returns value of 'channel' property
     *
     * @return integer
     */
    public function getChannel()
    {
        $value = $this->get(self::channel);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'ver' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVer($value)
    {
        return $this->set(self::ver, $value);
    }

    /**
     * Returns value of 'ver' property
     *
     * @return integer
     */
    public function getVer()
    {
        $value = $this->get(self::ver);
        return $value === null ? (integer)$value : $value;
    }
}
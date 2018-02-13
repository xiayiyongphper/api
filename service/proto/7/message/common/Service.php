<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Service message
 */
class Service extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const ip = 1;
    const port = 2;
    const module = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ip => array(
            'name' => 'ip',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::port => array(
            'name' => 'port',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::module => array(
            'name' => 'module',
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
        $this->values[self::ip] = null;
        $this->values[self::port] = null;
        $this->values[self::module] = null;
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
     * Sets value of 'ip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIp($value)
    {
        return $this->set(self::ip, $value);
    }

    /**
     * Returns value of 'ip' property
     *
     * @return string
     */
    public function getIp()
    {
        $value = $this->get(self::ip);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'port' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPort($value)
    {
        return $this->set(self::port, $value);
    }

    /**
     * Returns value of 'port' property
     *
     * @return string
     */
    public function getPort()
    {
        $value = $this->get(self::port);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'module' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setModule($value)
    {
        return $this->set(self::module, $value);
    }

    /**
     * Returns value of 'module' property
     *
     * @return string
     */
    public function getModule()
    {
        $value = $this->get(self::module);
        return $value === null ? (string)$value : $value;
    }
}
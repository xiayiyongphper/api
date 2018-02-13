<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * TestReportRequest message
 */
class TestReportRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const ip = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ip => array(
            'name' => 'ip',
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
        $this->values[self::ip] = null;
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
}
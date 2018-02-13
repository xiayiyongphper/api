<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * GetAppVersionRequest message
 */
class GetAppVersionRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const system = 1;
    const platform = 2;
    const channel = 3;
    const version = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::system => array(
            'name' => 'system',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::platform => array(
            'name' => 'platform',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::channel => array(
            'name' => 'channel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::version => array(
            'name' => 'version',
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
        $this->values[self::system] = null;
        $this->values[self::platform] = null;
        $this->values[self::channel] = null;
        $this->values[self::version] = null;
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
     * Sets value of 'platform' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlatform($value)
    {
        return $this->set(self::platform, $value);
    }

    /**
     * Returns value of 'platform' property
     *
     * @return integer
     */
    public function getPlatform()
    {
        $value = $this->get(self::platform);
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
     * Sets value of 'version' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVersion($value)
    {
        return $this->set(self::version, $value);
    }

    /**
     * Returns value of 'version' property
     *
     * @return string
     */
    public function getVersion()
    {
        $value = $this->get(self::version);
        return $value === null ? (string)$value : $value;
    }
}
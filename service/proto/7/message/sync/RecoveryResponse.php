<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * RecoveryResponse message
 */
class RecoveryResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const version = 1;
    const filename = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::version => array(
            'name' => 'version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::filename => array(
            'name' => 'filename',
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
        $this->values[self::version] = null;
        $this->values[self::filename] = null;
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
     * Sets value of 'version' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getVersion()
    {
        $value = $this->get(self::version);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'filename' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFilename($value)
    {
        return $this->set(self::filename, $value);
    }

    /**
     * Returns value of 'filename' property
     *
     * @return string
     */
    public function getFilename()
    {
        $value = $this->get(self::filename);
        return $value === null ? (string)$value : $value;
    }
}
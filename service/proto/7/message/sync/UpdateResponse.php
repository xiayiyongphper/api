<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * UpdateResponse message
 */
class UpdateResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const job = 1;
    const version = 2;
    const latest_version = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::job => array(
            'name' => 'job',
            'required' => false,
            'type' => '\service\message\sync\Job'
        ),
        self::version => array(
            'name' => 'version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::latest_version => array(
            'name' => 'latest_version',
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
        $this->values[self::job] = null;
        $this->values[self::version] = null;
        $this->values[self::latest_version] = null;
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
     * Sets value of 'job' property
     *
     * @param \service\message\sync\Job $value Property value
     *
     * @return null
     */
    public function setJob(\service\message\sync\Job $value=null)
    {
        return $this->set(self::job, $value);
    }

    /**
     * Returns value of 'job' property
     *
     * @return \service\message\sync\Job
     */
    public function getJob()
    {
        return $this->get(self::job);
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
     * Sets value of 'latest_version' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLatestVersion($value)
    {
        return $this->set(self::latest_version, $value);
    }

    /**
     * Returns value of 'latest_version' property
     *
     * @return integer
     */
    public function getLatestVersion()
    {
        $value = $this->get(self::latest_version);
        return $value === null ? (integer)$value : $value;
    }
}
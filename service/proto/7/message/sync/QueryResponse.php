<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * QueryResponse message
 */
class QueryResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const task_no = 1;
    const status = 2;
    const version = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::task_no => array(
            'name' => 'task_no',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::status => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::version => array(
            'name' => 'version',
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
        $this->values[self::task_no] = null;
        $this->values[self::status] = null;
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
     * Sets value of 'task_no' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTaskNo($value)
    {
        return $this->set(self::task_no, $value);
    }

    /**
     * Returns value of 'task_no' property
     *
     * @return string
     */
    public function getTaskNo()
    {
        $value = $this->get(self::task_no);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::status, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::status);
        return $value === null ? (integer)$value : $value;
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
}
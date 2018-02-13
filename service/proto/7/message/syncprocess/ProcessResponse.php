<?php
/**
 *
 * service.message.syncProcess package
 */

namespace service\message\syncprocess;
/**
 * ProcessResponse message
 */
class ProcessResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const code = 1;
    const message = 2;
    const customer_id = 3;
    const task_no = 4;
    const status = 5;
    const version = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::code => array(
            'name' => 'code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::message => array(
            'name' => 'message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::task_no => array(
            'name' => 'task_no',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::status => array(
            'name' => 'status',
            'required' => true,
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
        $this->values[self::code] = null;
        $this->values[self::message] = null;
        $this->values[self::customer_id] = null;
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
     * Sets value of 'code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::code, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return integer
     */
    public function getCode()
    {
        $value = $this->get(self::code);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'message' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessage($value)
    {
        return $this->set(self::message, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return string
     */
    public function getMessage()
    {
        $value = $this->get(self::message);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'customer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCustomerId($value)
    {
        return $this->set(self::customer_id, $value);
    }

    /**
     * Returns value of 'customer_id' property
     *
     * @return integer
     */
    public function getCustomerId()
    {
        $value = $this->get(self::customer_id);
        return $value === null ? (integer)$value : $value;
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
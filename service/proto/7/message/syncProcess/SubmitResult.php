<?php
/**
 *
 * service.message.syncProcess package
 */

namespace service\message\syncprocess;
/**
 * SubmitResult message
 */
class SubmitResult extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const submit_id = 1;
    const status = 2;
    const code = 3;
    const message = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::submit_id => array(
            'name' => 'submit_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::status => array(
            'name' => 'status',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::submit_id] = null;
        $this->values[self::status] = null;
        $this->values[self::code] = null;
        $this->values[self::message] = null;
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
     * Sets value of 'submit_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubmitId($value)
    {
        return $this->set(self::submit_id, $value);
    }

    /**
     * Returns value of 'submit_id' property
     *
     * @return string
     */
    public function getSubmitId()
    {
        $value = $this->get(self::submit_id);
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
}
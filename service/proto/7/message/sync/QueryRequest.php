<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * QueryRequest message
 */
class QueryRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const task_no = 1;
    const customer_id = 2;
    const auth_token = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::task_no => array(
            'name' => 'task_no',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
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
        $this->values[self::task_no] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
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
     * Sets value of 'auth_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthToken($value)
    {
        return $this->set(self::auth_token, $value);
    }

    /**
     * Returns value of 'auth_token' property
     *
     * @return string
     */
    public function getAuthToken()
    {
        $value = $this->get(self::auth_token);
        return $value === null ? (string)$value : $value;
    }
}
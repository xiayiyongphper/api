<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * Job message
 */
class Job extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const action = 1;
    const timestamp = 2;
    const version = 3;
    const customer_id = 4;
    const auth_token = 5;
    const task_no = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::action => array(
            'name' => 'action',
            'repeated' => true,
            'type' => '\service\message\sync\Action'
        ),
        self::timestamp => array(
            'name' => 'timestamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::version => array(
            'name' => 'version',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::task_no => array(
            'name' => 'task_no',
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
        $this->values[self::action] = array();
        $this->values[self::timestamp] = null;
        $this->values[self::version] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::task_no] = null;
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
     * Appends value to 'action' list
     *
     * @param \service\message\sync\Action $value Value to append
     *
     * @return null
     */
    public function appendAction(\service\message\sync\Action $value)
    {
        return $this->append(self::action, $value);
    }

    /**
     * Clears 'action' list
     *
     * @return null
     */
    public function clearAction()
    {
        return $this->clear(self::action);
    }

    /**
     * Returns 'action' list
     *
     * @return \service\message\sync\Action[]
     */
    public function getAction()
    {
        return $this->get(self::action);
    }

    /**
     * Returns 'action' iterator
     *
     * @return \ArrayIterator
     */
    public function getActionIterator()
    {
        return new \ArrayIterator($this->get(self::action));
    }

    /**
     * Returns element from 'action' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\sync\Action
     */
    public function getActionAt($offset)
    {
        return $this->get(self::action, $offset);
    }

    /**
     * Returns count of 'action' list
     *
     * @return int
     */
    public function getActionCount()
    {
        return $this->count(self::action);
    }

    /**
     * Sets value of 'timestamp' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::timestamp, $value);
    }

    /**
     * Returns value of 'timestamp' property
     *
     * @return string
     */
    public function getTimestamp()
    {
        $value = $this->get(self::timestamp);
        return $value === null ? (string)$value : $value;
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
}
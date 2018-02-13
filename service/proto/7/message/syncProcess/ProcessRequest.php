<?php
/**
 *
 * service.message.syncProcess package
 */

namespace service\message\syncprocess;
/**
 * ProcessRequest message
 */
class ProcessRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const task_no = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::task_no => array(
            'name' => 'task_no',
            'repeated' => true,
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
        $this->values[self::customer_id] = null;
        $this->values[self::task_no] = array();
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
     * Appends value to 'task_no' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendTaskNo($value)
    {
        return $this->append(self::task_no, $value);
    }

    /**
     * Clears 'task_no' list
     *
     * @return null
     */
    public function clearTaskNo()
    {
        return $this->clear(self::task_no);
    }

    /**
     * Returns 'task_no' list
     *
     * @return string[]
     */
    public function getTaskNo()
    {
        return $this->get(self::task_no);
    }

    /**
     * Returns 'task_no' iterator
     *
     * @return \ArrayIterator
     */
    public function getTaskNoIterator()
    {
        return new \ArrayIterator($this->get(self::task_no));
    }

    /**
     * Returns element from 'task_no' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getTaskNoAt($offset)
    {
        return $this->get(self::task_no, $offset);
    }

    /**
     * Returns count of 'task_no' list
     *
     * @return int
     */
    public function getTaskNoCount()
    {
        return $this->count(self::task_no);
    }
}
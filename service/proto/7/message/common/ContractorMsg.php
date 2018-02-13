<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * ContractorMsg message
 */
class ContractorMsg extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const id = 1;
    const title = 2;
    const create_time = 3;
    const is_read = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::id => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::title => array(
            'name' => 'title',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::create_time => array(
            'name' => 'create_time',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::is_read => array(
            'name' => 'is_read',
            'required' => true,
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
        $this->values[self::id] = null;
        $this->values[self::title] = null;
        $this->values[self::create_time] = null;
        $this->values[self::is_read] = null;
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::id, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::title, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::title);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'create_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::create_time, $value);
    }

    /**
     * Returns value of 'create_time' property
     *
     * @return string
     */
    public function getCreateTime()
    {
        $value = $this->get(self::create_time);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'is_read' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsRead($value)
    {
        return $this->set(self::is_read, $value);
    }

    /**
     * Returns value of 'is_read' property
     *
     * @return integer
     */
    public function getIsRead()
    {
        $value = $this->get(self::is_read);
        return $value === null ? (integer)$value : $value;
    }
}
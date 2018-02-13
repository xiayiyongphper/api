<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * StatusHistory message
 */
class StatusHistory extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const history_id = 1;
    const status = 2;
    const comment = 3;
    const created_at = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::history_id => array(
            'name' => 'history_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::status => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::comment => array(
            'name' => 'comment',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::created_at => array(
            'name' => 'created_at',
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
        $this->values[self::history_id] = null;
        $this->values[self::status] = null;
        $this->values[self::comment] = null;
        $this->values[self::created_at] = null;
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
     * Sets value of 'history_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHistoryId($value)
    {
        return $this->set(self::history_id, $value);
    }

    /**
     * Returns value of 'history_id' property
     *
     * @return integer
     */
    public function getHistoryId()
    {
        $value = $this->get(self::history_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'status' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getStatus()
    {
        $value = $this->get(self::status);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'comment' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setComment($value)
    {
        return $this->set(self::comment, $value);
    }

    /**
     * Returns value of 'comment' property
     *
     * @return string
     */
    public function getComment()
    {
        $value = $this->get(self::comment);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'created_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedAt($value)
    {
        return $this->set(self::created_at, $value);
    }

    /**
     * Returns value of 'created_at' property
     *
     * @return string
     */
    public function getCreatedAt()
    {
        $value = $this->get(self::created_at);
        return $value === null ? (string)$value : $value;
    }
}
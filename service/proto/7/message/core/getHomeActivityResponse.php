<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * getHomeActivityResponse message
 */
class getHomeActivityResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const activity_id = 1;
    const url = 2;
    const count = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::activity_id => array(
            'name' => 'activity_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::url => array(
            'name' => 'url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::count => array(
            'name' => 'count',
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
        $this->values[self::activity_id] = null;
        $this->values[self::url] = null;
        $this->values[self::count] = null;
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
     * Sets value of 'activity_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActivityId($value)
    {
        return $this->set(self::activity_id, $value);
    }

    /**
     * Returns value of 'activity_id' property
     *
     * @return integer
     */
    public function getActivityId()
    {
        $value = $this->get(self::activity_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::url, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::count, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::count);
        return $value === null ? (integer)$value : $value;
    }
}
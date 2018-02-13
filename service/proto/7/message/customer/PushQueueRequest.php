<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * PushQueueRequest message
 */
class PushQueueRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const token = 1;
    const group_id = 2;
    const channel = 3;
    const plat_form = 4;
    const value_id = 5;
    const params = 6;
    const checksum = 7;
    const message = 8;
    const status = 9;
    const priority = 10;
    const typequeue = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::token => array(
            'name' => 'token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::group_id => array(
            'name' => 'group_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::channel => array(
            'name' => 'channel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::plat_form => array(
            'name' => 'plat_form',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::value_id => array(
            'name' => 'value_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::params => array(
            'name' => 'params',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::checksum => array(
            'name' => 'checksum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::message => array(
            'name' => 'message',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::status => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::priority => array(
            'name' => 'priority',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::typequeue => array(
            'name' => 'typequeue',
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
        $this->values[self::token] = null;
        $this->values[self::group_id] = null;
        $this->values[self::channel] = null;
        $this->values[self::plat_form] = null;
        $this->values[self::value_id] = null;
        $this->values[self::params] = null;
        $this->values[self::checksum] = null;
        $this->values[self::message] = null;
        $this->values[self::status] = null;
        $this->values[self::priority] = null;
        $this->values[self::typequeue] = null;
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
     * Sets value of 'token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToken($value)
    {
        return $this->set(self::token, $value);
    }

    /**
     * Returns value of 'token' property
     *
     * @return string
     */
    public function getToken()
    {
        $value = $this->get(self::token);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'group_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupId($value)
    {
        return $this->set(self::group_id, $value);
    }

    /**
     * Returns value of 'group_id' property
     *
     * @return integer
     */
    public function getGroupId()
    {
        $value = $this->get(self::group_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'channel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::channel, $value);
    }

    /**
     * Returns value of 'channel' property
     *
     * @return integer
     */
    public function getChannel()
    {
        $value = $this->get(self::channel);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'plat_form' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlatForm($value)
    {
        return $this->set(self::plat_form, $value);
    }

    /**
     * Returns value of 'plat_form' property
     *
     * @return integer
     */
    public function getPlatForm()
    {
        $value = $this->get(self::plat_form);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'value_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setValueId($value)
    {
        return $this->set(self::value_id, $value);
    }

    /**
     * Returns value of 'value_id' property
     *
     * @return integer
     */
    public function getValueId()
    {
        $value = $this->get(self::value_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'params' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setParams($value)
    {
        return $this->set(self::params, $value);
    }

    /**
     * Returns value of 'params' property
     *
     * @return string
     */
    public function getParams()
    {
        $value = $this->get(self::params);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'checksum' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChecksum($value)
    {
        return $this->set(self::checksum, $value);
    }

    /**
     * Returns value of 'checksum' property
     *
     * @return string
     */
    public function getChecksum()
    {
        $value = $this->get(self::checksum);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'priority' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPriority($value)
    {
        return $this->set(self::priority, $value);
    }

    /**
     * Returns value of 'priority' property
     *
     * @return integer
     */
    public function getPriority()
    {
        $value = $this->get(self::priority);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'typequeue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTypequeue($value)
    {
        return $this->set(self::typequeue, $value);
    }

    /**
     * Returns value of 'typequeue' property
     *
     * @return integer
     */
    public function getTypequeue()
    {
        $value = $this->get(self::typequeue);
        return $value === null ? (integer)$value : $value;
    }
}
<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * RecoveryRequest message
 */
class RecoveryRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const table = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::table => array(
            'name' => 'table',
            'repeated' => true,
            'type' => '\service\message\sync\Table'
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
        $this->values[self::auth_token] = null;
        $this->values[self::table] = array();
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
     * Appends value to 'table' list
     *
     * @param \service\message\sync\Table $value Value to append
     *
     * @return null
     */
    public function appendTable(\service\message\sync\Table $value)
    {
        return $this->append(self::table, $value);
    }

    /**
     * Clears 'table' list
     *
     * @return null
     */
    public function clearTable()
    {
        return $this->clear(self::table);
    }

    /**
     * Returns 'table' list
     *
     * @return \service\message\sync\Table[]
     */
    public function getTable()
    {
        return $this->get(self::table);
    }

    /**
     * Returns 'table' iterator
     *
     * @return \ArrayIterator
     */
    public function getTableIterator()
    {
        return new \ArrayIterator($this->get(self::table));
    }

    /**
     * Returns element from 'table' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\sync\Table
     */
    public function getTableAt($offset)
    {
        return $this->get(self::table, $offset);
    }

    /**
     * Returns count of 'table' list
     *
     * @return int
     */
    public function getTableCount()
    {
        return $this->count(self::table);
    }
}
<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * Action message
 */
class Action extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const table = 1;
    const where = 2;
    const fields = 3;
    const operation = 4;
    const timestamp = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::table => array(
            'name' => 'table',
            'required' => false,
            'type' => '\service\message\sync\Table'
        ),
        self::where => array(
            'name' => 'where',
            'repeated' => true,
            'type' => '\service\message\sync\Field'
        ),
        self::fields => array(
            'name' => 'fields',
            'repeated' => true,
            'type' => '\service\message\sync\Field'
        ),
        self::operation => array(
            'name' => 'operation',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::timestamp => array(
            'name' => 'timestamp',
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
        $this->values[self::table] = null;
        $this->values[self::where] = array();
        $this->values[self::fields] = array();
        $this->values[self::operation] = null;
        $this->values[self::timestamp] = null;
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
     * Sets value of 'table' property
     *
     * @param \service\message\sync\Table $value Property value
     *
     * @return null
     */
    public function setTable(\service\message\sync\Table $value=null)
    {
        return $this->set(self::table, $value);
    }

    /**
     * Returns value of 'table' property
     *
     * @return \service\message\sync\Table
     */
    public function getTable()
    {
        return $this->get(self::table);
    }

    /**
     * Appends value to 'where' list
     *
     * @param \service\message\sync\Field $value Value to append
     *
     * @return null
     */
    public function appendWhere(\service\message\sync\Field $value)
    {
        return $this->append(self::where, $value);
    }

    /**
     * Clears 'where' list
     *
     * @return null
     */
    public function clearWhere()
    {
        return $this->clear(self::where);
    }

    /**
     * Returns 'where' list
     *
     * @return \service\message\sync\Field[]
     */
    public function getWhere()
    {
        return $this->get(self::where);
    }

    /**
     * Returns 'where' iterator
     *
     * @return \ArrayIterator
     */
    public function getWhereIterator()
    {
        return new \ArrayIterator($this->get(self::where));
    }

    /**
     * Returns element from 'where' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\sync\Field
     */
    public function getWhereAt($offset)
    {
        return $this->get(self::where, $offset);
    }

    /**
     * Returns count of 'where' list
     *
     * @return int
     */
    public function getWhereCount()
    {
        return $this->count(self::where);
    }

    /**
     * Appends value to 'fields' list
     *
     * @param \service\message\sync\Field $value Value to append
     *
     * @return null
     */
    public function appendFields(\service\message\sync\Field $value)
    {
        return $this->append(self::fields, $value);
    }

    /**
     * Clears 'fields' list
     *
     * @return null
     */
    public function clearFields()
    {
        return $this->clear(self::fields);
    }

    /**
     * Returns 'fields' list
     *
     * @return \service\message\sync\Field[]
     */
    public function getFields()
    {
        return $this->get(self::fields);
    }

    /**
     * Returns 'fields' iterator
     *
     * @return \ArrayIterator
     */
    public function getFieldsIterator()
    {
        return new \ArrayIterator($this->get(self::fields));
    }

    /**
     * Returns element from 'fields' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\sync\Field
     */
    public function getFieldsAt($offset)
    {
        return $this->get(self::fields, $offset);
    }

    /**
     * Returns count of 'fields' list
     *
     * @return int
     */
    public function getFieldsCount()
    {
        return $this->count(self::fields);
    }

    /**
     * Sets value of 'operation' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOperation($value)
    {
        return $this->set(self::operation, $value);
    }

    /**
     * Returns value of 'operation' property
     *
     * @return integer
     */
    public function getOperation()
    {
        $value = $this->get(self::operation);
        return $value === null ? (integer)$value : $value;
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
}
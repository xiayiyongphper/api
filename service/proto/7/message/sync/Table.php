<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * Table message
 */
class Table extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const table_name = 1;
    const primary_key = 2;
    const unique_key = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::table_name => array(
            'name' => 'table_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::primary_key => array(
            'default' => '_id',
            'name' => 'primary_key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::unique_key => array(
            'name' => 'unique_key',
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
        $this->values[self::table_name] = null;
        $this->values[self::primary_key] = self::$fields[self::primary_key]['default'];
        $this->values[self::unique_key] = null;
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
     * Sets value of 'table_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTableName($value)
    {
        return $this->set(self::table_name, $value);
    }

    /**
     * Returns value of 'table_name' property
     *
     * @return string
     */
    public function getTableName()
    {
        $value = $this->get(self::table_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'primary_key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPrimaryKey($value)
    {
        return $this->set(self::primary_key, $value);
    }

    /**
     * Returns value of 'primary_key' property
     *
     * @return string
     */
    public function getPrimaryKey()
    {
        $value = $this->get(self::primary_key);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'unique_key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUniqueKey($value)
    {
        return $this->set(self::unique_key, $value);
    }

    /**
     * Returns value of 'unique_key' property
     *
     * @return string
     */
    public function getUniqueKey()
    {
        $value = $this->get(self::unique_key);
        return $value === null ? (string)$value : $value;
    }
}
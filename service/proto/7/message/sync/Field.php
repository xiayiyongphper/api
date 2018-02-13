<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * Field message
 */
class Field extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const name = 1;
    const value = 2;
    const operator = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::value => array(
            'name' => 'value',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::operator => array(
            'name' => 'operator',
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
        $this->values[self::name] = null;
        $this->values[self::value] = null;
        $this->values[self::operator] = null;
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::name, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::value, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue()
    {
        $value = $this->get(self::value);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'operator' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOperator($value)
    {
        return $this->set(self::operator, $value);
    }

    /**
     * Returns value of 'operator' property
     *
     * @return integer
     */
    public function getOperator()
    {
        $value = $this->get(self::operator);
        return $value === null ? (integer)$value : $value;
    }
}
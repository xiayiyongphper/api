<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * QuickEntry message
 */
class QuickEntry extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const name = 1;
    const icon = 2;
    const schema = 3;
    const number = 4;
    const sub_name = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::icon => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::schema => array(
            'name' => 'schema',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::number => array(
            'name' => 'number',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::sub_name => array(
            'name' => 'sub_name',
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
        $this->values[self::name] = null;
        $this->values[self::icon] = null;
        $this->values[self::schema] = null;
        $this->values[self::number] = null;
        $this->values[self::sub_name] = null;
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
     * Sets value of 'icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIcon($value)
    {
        return $this->set(self::icon, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return string
     */
    public function getIcon()
    {
        $value = $this->get(self::icon);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'schema' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSchema($value)
    {
        return $this->set(self::schema, $value);
    }

    /**
     * Returns value of 'schema' property
     *
     * @return string
     */
    public function getSchema()
    {
        $value = $this->get(self::schema);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'number' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNumber($value)
    {
        return $this->set(self::number, $value);
    }

    /**
     * Returns value of 'number' property
     *
     * @return integer
     */
    public function getNumber()
    {
        $value = $this->get(self::number);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'sub_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubName($value)
    {
        return $this->set(self::sub_name, $value);
    }

    /**
     * Returns value of 'sub_name' property
     *
     * @return string
     */
    public function getSubName()
    {
        $value = $this->get(self::sub_name);
        return $value === null ? (string)$value : $value;
    }
}
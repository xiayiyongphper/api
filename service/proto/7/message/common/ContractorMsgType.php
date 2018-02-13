<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * ContractorMsgType message
 */
class ContractorMsgType extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const id = 1;
    const name = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::id => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::name => array(
            'name' => 'name',
            'required' => true,
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
        $this->values[self::id] = null;
        $this->values[self::name] = null;
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
}
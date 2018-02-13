<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Brand message
 */
class Brand extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const brand_id = 1;
    const name = 2;
    const icon = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::brand_id => array(
            'name' => 'brand_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::brand_id] = null;
        $this->values[self::name] = null;
        $this->values[self::icon] = null;
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
     * Sets value of 'brand_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBrandId($value)
    {
        return $this->set(self::brand_id, $value);
    }

    /**
     * Returns value of 'brand_id' property
     *
     * @return integer
     */
    public function getBrandId()
    {
        $value = $this->get(self::brand_id);
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
}
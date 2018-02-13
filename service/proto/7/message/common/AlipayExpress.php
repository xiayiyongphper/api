<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * AlipayExpress message
 */
class AlipayExpress extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const order_str = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::order_str => array(
            'name' => 'order_str',
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
        $this->values[self::order_str] = null;
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
     * Sets value of 'order_str' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderStr($value)
    {
        return $this->set(self::order_str, $value);
    }

    /**
     * Returns value of 'order_str' property
     *
     * @return string
     */
    public function getOrderStr()
    {
        $value = $this->get(self::order_str);
        return $value === null ? (string)$value : $value;
    }
}
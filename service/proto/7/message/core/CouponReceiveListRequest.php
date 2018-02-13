<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * CouponReceiveListRequest message
 */
class CouponReceiveListRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const location = 1;
    const wholesaler_id = 2;
    const rule_id = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::location => array(
            'name' => 'location',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::rule_id => array(
            'name' => 'rule_id',
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
        $this->values[self::location] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::rule_id] = null;
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
     * Sets value of 'location' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLocation($value)
    {
        return $this->set(self::location, $value);
    }

    /**
     * Returns value of 'location' property
     *
     * @return integer
     */
    public function getLocation()
    {
        $value = $this->get(self::location);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'wholesaler_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWholesalerId($value)
    {
        return $this->set(self::wholesaler_id, $value);
    }

    /**
     * Returns value of 'wholesaler_id' property
     *
     * @return integer
     */
    public function getWholesalerId()
    {
        $value = $this->get(self::wholesaler_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'rule_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRuleId($value)
    {
        return $this->set(self::rule_id, $value);
    }

    /**
     * Returns value of 'rule_id' property
     *
     * @return integer
     */
    public function getRuleId()
    {
        $value = $this->get(self::rule_id);
        return $value === null ? (integer)$value : $value;
    }
}
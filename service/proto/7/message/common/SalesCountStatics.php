<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * SalesCountStatics message
 */
class SalesCountStatics extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const update_time = 1;
    const title = 2;
    const sales_amount = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::update_time => array(
            'name' => 'update_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::title => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sales_amount => array(
            'name' => 'sales_amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
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
        $this->values[self::update_time] = null;
        $this->values[self::title] = null;
        $this->values[self::sales_amount] = null;
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
     * Sets value of 'update_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUpdateTime($value)
    {
        return $this->set(self::update_time, $value);
    }

    /**
     * Returns value of 'update_time' property
     *
     * @return string
     */
    public function getUpdateTime()
    {
        $value = $this->get(self::update_time);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::title, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::title);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'sales_amount' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setSalesAmount($value)
    {
        return $this->set(self::sales_amount, $value);
    }

    /**
     * Returns value of 'sales_amount' property
     *
     * @return double
     */
    public function getSalesAmount()
    {
        $value = $this->get(self::sales_amount);
        return $value === null ? (double)$value : $value;
    }
}
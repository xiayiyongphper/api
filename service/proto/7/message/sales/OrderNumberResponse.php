<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * OrderNumberResponse message
 */
class OrderNumberResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const all = 1;
    const receiving = 2;
    const refund = 3;
    const complete = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::all => array(
            'name' => 'all',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::receiving => array(
            'name' => 'receiving',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::refund => array(
            'name' => 'refund',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::complete => array(
            'name' => 'complete',
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
        $this->values[self::all] = null;
        $this->values[self::receiving] = null;
        $this->values[self::refund] = null;
        $this->values[self::complete] = null;
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
     * Sets value of 'all' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAll($value)
    {
        return $this->set(self::all, $value);
    }

    /**
     * Returns value of 'all' property
     *
     * @return integer
     */
    public function getAll()
    {
        $value = $this->get(self::all);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'receiving' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReceiving($value)
    {
        return $this->set(self::receiving, $value);
    }

    /**
     * Returns value of 'receiving' property
     *
     * @return integer
     */
    public function getReceiving()
    {
        $value = $this->get(self::receiving);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'refund' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRefund($value)
    {
        return $this->set(self::refund, $value);
    }

    /**
     * Returns value of 'refund' property
     *
     * @return integer
     */
    public function getRefund()
    {
        $value = $this->get(self::refund);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'complete' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setComplete($value)
    {
        return $this->set(self::complete, $value);
    }

    /**
     * Returns value of 'complete' property
     *
     * @return integer
     */
    public function getComplete()
    {
        $value = $this->get(self::complete);
        return $value === null ? (integer)$value : $value;
    }
}
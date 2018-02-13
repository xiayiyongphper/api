<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * MarkPriceHistory message
 */
class MarkPriceHistory extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const history_id = 1;
    const contractor_name = 2;
    const price = 3;
    const created_at = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::history_id => array(
            'name' => 'history_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::contractor_name => array(
            'name' => 'contractor_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::price => array(
            'name' => 'price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::created_at => array(
            'name' => 'created_at',
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
        $this->values[self::history_id] = null;
        $this->values[self::contractor_name] = null;
        $this->values[self::price] = null;
        $this->values[self::created_at] = null;
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
     * Sets value of 'history_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHistoryId($value)
    {
        return $this->set(self::history_id, $value);
    }

    /**
     * Returns value of 'history_id' property
     *
     * @return integer
     */
    public function getHistoryId()
    {
        $value = $this->get(self::history_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'contractor_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractorName($value)
    {
        return $this->set(self::contractor_name, $value);
    }

    /**
     * Returns value of 'contractor_name' property
     *
     * @return string
     */
    public function getContractorName()
    {
        $value = $this->get(self::contractor_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'price' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setPrice($value)
    {
        return $this->set(self::price, $value);
    }

    /**
     * Returns value of 'price' property
     *
     * @return double
     */
    public function getPrice()
    {
        $value = $this->get(self::price);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'created_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedAt($value)
    {
        return $this->set(self::created_at, $value);
    }

    /**
     * Returns value of 'created_at' property
     *
     * @return string
     */
    public function getCreatedAt()
    {
        $value = $this->get(self::created_at);
        return $value === null ? (string)$value : $value;
    }
}
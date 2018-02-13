<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * customerOrderStatItem message
 */
class customerOrderStatItem extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const year_month = 1;
    const sum_grand_total = 2;
    const order_count = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::year_month => array(
            'name' => 'year_month',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sum_grand_total => array(
            'name' => 'sum_grand_total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::order_count => array(
            'name' => 'order_count',
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
        $this->values[self::year_month] = null;
        $this->values[self::sum_grand_total] = null;
        $this->values[self::order_count] = null;
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
     * Sets value of 'year_month' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setYearMonth($value)
    {
        return $this->set(self::year_month, $value);
    }

    /**
     * Returns value of 'year_month' property
     *
     * @return string
     */
    public function getYearMonth()
    {
        $value = $this->get(self::year_month);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'sum_grand_total' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setSumGrandTotal($value)
    {
        return $this->set(self::sum_grand_total, $value);
    }

    /**
     * Returns value of 'sum_grand_total' property
     *
     * @return double
     */
    public function getSumGrandTotal()
    {
        $value = $this->get(self::sum_grand_total);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'order_count' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setOrderCount($value)
    {
        return $this->set(self::order_count, $value);
    }

    /**
     * Returns value of 'order_count' property
     *
     * @return double
     */
    public function getOrderCount()
    {
        $value = $this->get(self::order_count);
        return $value === null ? (double)$value : $value;
    }
}
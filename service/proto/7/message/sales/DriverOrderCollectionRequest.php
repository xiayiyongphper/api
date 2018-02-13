<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * DriverOrderCollectionRequest message
 */
class DriverOrderCollectionRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const order_ids = 1;
    const fuzzy_increment_id = 2;
    const wholesaler_id = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::order_ids => array(
            'name' => 'order_ids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::fuzzy_increment_id => array(
            'name' => 'fuzzy_increment_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'repeated' => true,
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
        $this->values[self::order_ids] = array();
        $this->values[self::fuzzy_increment_id] = null;
        $this->values[self::wholesaler_id] = array();
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
     * Appends value to 'order_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendOrderIds($value)
    {
        return $this->append(self::order_ids, $value);
    }

    /**
     * Clears 'order_ids' list
     *
     * @return null
     */
    public function clearOrderIds()
    {
        return $this->clear(self::order_ids);
    }

    /**
     * Returns 'order_ids' list
     *
     * @return integer[]
     */
    public function getOrderIds()
    {
        return $this->get(self::order_ids);
    }

    /**
     * Returns 'order_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getOrderIdsIterator()
    {
        return new \ArrayIterator($this->get(self::order_ids));
    }

    /**
     * Returns element from 'order_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getOrderIdsAt($offset)
    {
        return $this->get(self::order_ids, $offset);
    }

    /**
     * Returns count of 'order_ids' list
     *
     * @return int
     */
    public function getOrderIdsCount()
    {
        return $this->count(self::order_ids);
    }

    /**
     * Sets value of 'fuzzy_increment_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFuzzyIncrementId($value)
    {
        return $this->set(self::fuzzy_increment_id, $value);
    }

    /**
     * Returns value of 'fuzzy_increment_id' property
     *
     * @return string
     */
    public function getFuzzyIncrementId()
    {
        $value = $this->get(self::fuzzy_increment_id);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'wholesaler_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendWholesalerId($value)
    {
        return $this->append(self::wholesaler_id, $value);
    }

    /**
     * Clears 'wholesaler_id' list
     *
     * @return null
     */
    public function clearWholesalerId()
    {
        return $this->clear(self::wholesaler_id);
    }

    /**
     * Returns 'wholesaler_id' list
     *
     * @return integer[]
     */
    public function getWholesalerId()
    {
        return $this->get(self::wholesaler_id);
    }

    /**
     * Returns 'wholesaler_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getWholesalerIdIterator()
    {
        return new \ArrayIterator($this->get(self::wholesaler_id));
    }

    /**
     * Returns element from 'wholesaler_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getWholesalerIdAt($offset)
    {
        return $this->get(self::wholesaler_id, $offset);
    }

    /**
     * Returns count of 'wholesaler_id' list
     *
     * @return int
     */
    public function getWholesalerIdCount()
    {
        return $this->count(self::wholesaler_id);
    }
}
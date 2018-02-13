<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * SaleRuleRequest message
 */
class SaleRuleRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const rule_id = 1;
    const wholesaler_id = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::rule_id => array(
            'name' => 'rule_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::rule_id] = array();
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
     * Appends value to 'rule_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRuleId($value)
    {
        return $this->append(self::rule_id, $value);
    }

    /**
     * Clears 'rule_id' list
     *
     * @return null
     */
    public function clearRuleId()
    {
        return $this->clear(self::rule_id);
    }

    /**
     * Returns 'rule_id' list
     *
     * @return integer[]
     */
    public function getRuleId()
    {
        return $this->get(self::rule_id);
    }

    /**
     * Returns 'rule_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getRuleIdIterator()
    {
        return new \ArrayIterator($this->get(self::rule_id));
    }

    /**
     * Returns element from 'rule_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRuleIdAt($offset)
    {
        return $this->get(self::rule_id, $offset);
    }

    /**
     * Returns count of 'rule_id' list
     *
     * @return int
     */
    public function getRuleIdCount()
    {
        return $this->count(self::rule_id);
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
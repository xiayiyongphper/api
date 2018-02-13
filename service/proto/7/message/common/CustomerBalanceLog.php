<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * CustomerBalanceLog message
 */
class CustomerBalanceLog extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const entity_id = 1;
    const customer_id = 2;
    const action = 3;
    const amount = 4;
    const balance = 5;
    const order_id = 6;
    const created_at = 7;
    const title = 8;
    const type = 9;
    const order_no = 10;
    const transaction_no = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::entity_id => array(
            'name' => 'entity_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::action => array(
            'name' => 'action',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::amount => array(
            'name' => 'amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::balance => array(
            'name' => 'balance',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::order_id => array(
            'name' => 'order_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::created_at => array(
            'name' => 'created_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::title => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::type => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::order_no => array(
            'name' => 'order_no',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::transaction_no => array(
            'name' => 'transaction_no',
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
        $this->values[self::entity_id] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::action] = null;
        $this->values[self::amount] = null;
        $this->values[self::balance] = null;
        $this->values[self::order_id] = null;
        $this->values[self::created_at] = null;
        $this->values[self::title] = null;
        $this->values[self::type] = null;
        $this->values[self::order_no] = null;
        $this->values[self::transaction_no] = null;
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
     * Sets value of 'entity_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEntityId($value)
    {
        return $this->set(self::entity_id, $value);
    }

    /**
     * Returns value of 'entity_id' property
     *
     * @return integer
     */
    public function getEntityId()
    {
        $value = $this->get(self::entity_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'customer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCustomerId($value)
    {
        return $this->set(self::customer_id, $value);
    }

    /**
     * Returns value of 'customer_id' property
     *
     * @return integer
     */
    public function getCustomerId()
    {
        $value = $this->get(self::customer_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'action' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAction($value)
    {
        return $this->set(self::action, $value);
    }

    /**
     * Returns value of 'action' property
     *
     * @return string
     */
    public function getAction()
    {
        $value = $this->get(self::action);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'amount' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setAmount($value)
    {
        return $this->set(self::amount, $value);
    }

    /**
     * Returns value of 'amount' property
     *
     * @return double
     */
    public function getAmount()
    {
        $value = $this->get(self::amount);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'balance' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setBalance($value)
    {
        return $this->set(self::balance, $value);
    }

    /**
     * Returns value of 'balance' property
     *
     * @return double
     */
    public function getBalance()
    {
        $value = $this->get(self::balance);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'order_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOrderId($value)
    {
        return $this->set(self::order_id, $value);
    }

    /**
     * Returns value of 'order_id' property
     *
     * @return integer
     */
    public function getOrderId()
    {
        $value = $this->get(self::order_id);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::type, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::type);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'order_no' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrderNo($value)
    {
        return $this->set(self::order_no, $value);
    }

    /**
     * Returns value of 'order_no' property
     *
     * @return string
     */
    public function getOrderNo()
    {
        $value = $this->get(self::order_no);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'transaction_no' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTransactionNo($value)
    {
        return $this->set(self::transaction_no, $value);
    }

    /**
     * Returns value of 'transaction_no' property
     *
     * @return string
     */
    public function getTransactionNo()
    {
        $value = $this->get(self::transaction_no);
        return $value === null ? (string)$value : $value;
    }
}
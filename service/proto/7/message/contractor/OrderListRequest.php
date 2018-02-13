<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * OrderListRequest message
 */
class OrderListRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const pagination = 3;
    const keyword = 4;
    const wholesaler_id = 5;
    const status = 6;
    const time_from = 7;
    const time_to = 8;
    const customer_id = 9;
    const contractor_ids = 10;
    const city = 11;
    const time_lt = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::pagination => array(
            'name' => 'pagination',
            'required' => false,
            'type' => '\service\message\common\Pagination'
        ),
        self::keyword => array(
            'name' => 'keyword',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::status => array(
            'name' => 'status',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::time_from => array(
            'name' => 'time_from',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::time_to => array(
            'name' => 'time_to',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::contractor_ids => array(
            'name' => 'contractor_ids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::time_lt => array(
            'name' => 'time_lt',
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
        $this->values[self::contractor_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::pagination] = null;
        $this->values[self::keyword] = null;
        $this->values[self::wholesaler_id] = array();
        $this->values[self::status] = array();
        $this->values[self::time_from] = null;
        $this->values[self::time_to] = null;
        $this->values[self::customer_id] = array();
        $this->values[self::contractor_ids] = array();
        $this->values[self::city] = null;
        $this->values[self::time_lt] = null;
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
     * Sets value of 'contractor_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContractorId($value)
    {
        return $this->set(self::contractor_id, $value);
    }

    /**
     * Returns value of 'contractor_id' property
     *
     * @return integer
     */
    public function getContractorId()
    {
        $value = $this->get(self::contractor_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'auth_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthToken($value)
    {
        return $this->set(self::auth_token, $value);
    }

    /**
     * Returns value of 'auth_token' property
     *
     * @return string
     */
    public function getAuthToken()
    {
        $value = $this->get(self::auth_token);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'pagination' property
     *
     * @param \service\message\common\Pagination $value Property value
     *
     * @return null
     */
    public function setPagination(\service\message\common\Pagination $value=null)
    {
        return $this->set(self::pagination, $value);
    }

    /**
     * Returns value of 'pagination' property
     *
     * @return \service\message\common\Pagination
     */
    public function getPagination()
    {
        return $this->get(self::pagination);
    }

    /**
     * Sets value of 'keyword' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKeyword($value)
    {
        return $this->set(self::keyword, $value);
    }

    /**
     * Returns value of 'keyword' property
     *
     * @return string
     */
    public function getKeyword()
    {
        $value = $this->get(self::keyword);
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

    /**
     * Appends value to 'status' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendStatus($value)
    {
        return $this->append(self::status, $value);
    }

    /**
     * Clears 'status' list
     *
     * @return null
     */
    public function clearStatus()
    {
        return $this->clear(self::status);
    }

    /**
     * Returns 'status' list
     *
     * @return string[]
     */
    public function getStatus()
    {
        return $this->get(self::status);
    }

    /**
     * Returns 'status' iterator
     *
     * @return \ArrayIterator
     */
    public function getStatusIterator()
    {
        return new \ArrayIterator($this->get(self::status));
    }

    /**
     * Returns element from 'status' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getStatusAt($offset)
    {
        return $this->get(self::status, $offset);
    }

    /**
     * Returns count of 'status' list
     *
     * @return int
     */
    public function getStatusCount()
    {
        return $this->count(self::status);
    }

    /**
     * Sets value of 'time_from' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeFrom($value)
    {
        return $this->set(self::time_from, $value);
    }

    /**
     * Returns value of 'time_from' property
     *
     * @return string
     */
    public function getTimeFrom()
    {
        $value = $this->get(self::time_from);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'time_to' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeTo($value)
    {
        return $this->set(self::time_to, $value);
    }

    /**
     * Returns value of 'time_to' property
     *
     * @return string
     */
    public function getTimeTo()
    {
        $value = $this->get(self::time_to);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'customer_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendCustomerId($value)
    {
        return $this->append(self::customer_id, $value);
    }

    /**
     * Clears 'customer_id' list
     *
     * @return null
     */
    public function clearCustomerId()
    {
        return $this->clear(self::customer_id);
    }

    /**
     * Returns 'customer_id' list
     *
     * @return integer[]
     */
    public function getCustomerId()
    {
        return $this->get(self::customer_id);
    }

    /**
     * Returns 'customer_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomerIdIterator()
    {
        return new \ArrayIterator($this->get(self::customer_id));
    }

    /**
     * Returns element from 'customer_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getCustomerIdAt($offset)
    {
        return $this->get(self::customer_id, $offset);
    }

    /**
     * Returns count of 'customer_id' list
     *
     * @return int
     */
    public function getCustomerIdCount()
    {
        return $this->count(self::customer_id);
    }

    /**
     * Appends value to 'contractor_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendContractorIds($value)
    {
        return $this->append(self::contractor_ids, $value);
    }

    /**
     * Clears 'contractor_ids' list
     *
     * @return null
     */
    public function clearContractorIds()
    {
        return $this->clear(self::contractor_ids);
    }

    /**
     * Returns 'contractor_ids' list
     *
     * @return integer[]
     */
    public function getContractorIds()
    {
        return $this->get(self::contractor_ids);
    }

    /**
     * Returns 'contractor_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getContractorIdsIterator()
    {
        return new \ArrayIterator($this->get(self::contractor_ids));
    }

    /**
     * Returns element from 'contractor_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getContractorIdsAt($offset)
    {
        return $this->get(self::contractor_ids, $offset);
    }

    /**
     * Returns count of 'contractor_ids' list
     *
     * @return int
     */
    public function getContractorIdsCount()
    {
        return $this->count(self::contractor_ids);
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::city, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::city);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'time_lt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeLt($value)
    {
        return $this->set(self::time_lt, $value);
    }

    /**
     * Returns value of 'time_lt' property
     *
     * @return string
     */
    public function getTimeLt()
    {
        $value = $this->get(self::time_lt);
        return $value === null ? (string)$value : $value;
    }
}
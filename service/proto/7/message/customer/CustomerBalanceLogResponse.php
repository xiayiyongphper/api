<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * CustomerBalanceLogResponse message
 */
class CustomerBalanceLogResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const balance_log = 1;
    const pagination = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::balance_log => array(
            'name' => 'balance_log',
            'repeated' => true,
            'type' => '\service\message\common\CustomerBalanceLog'
        ),
        self::pagination => array(
            'name' => 'pagination',
            'required' => false,
            'type' => '\service\message\common\Pagination'
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
        $this->values[self::balance_log] = array();
        $this->values[self::pagination] = null;
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
     * Appends value to 'balance_log' list
     *
     * @param \service\message\common\CustomerBalanceLog $value Value to append
     *
     * @return null
     */
    public function appendBalanceLog(\service\message\common\CustomerBalanceLog $value)
    {
        return $this->append(self::balance_log, $value);
    }

    /**
     * Clears 'balance_log' list
     *
     * @return null
     */
    public function clearBalanceLog()
    {
        return $this->clear(self::balance_log);
    }

    /**
     * Returns 'balance_log' list
     *
     * @return \service\message\common\CustomerBalanceLog[]
     */
    public function getBalanceLog()
    {
        return $this->get(self::balance_log);
    }

    /**
     * Returns 'balance_log' iterator
     *
     * @return \ArrayIterator
     */
    public function getBalanceLogIterator()
    {
        return new \ArrayIterator($this->get(self::balance_log));
    }

    /**
     * Returns element from 'balance_log' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\CustomerBalanceLog
     */
    public function getBalanceLogAt($offset)
    {
        return $this->get(self::balance_log, $offset);
    }

    /**
     * Returns count of 'balance_log' list
     *
     * @return int
     */
    public function getBalanceLogCount()
    {
        return $this->count(self::balance_log);
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
}
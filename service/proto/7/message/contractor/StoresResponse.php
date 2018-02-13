<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * StoresResponse message
 */
class StoresResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const stores = 1;
    const pagination = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::stores => array(
            'name' => 'stores',
            'repeated' => true,
            'type' => '\service\message\customer\CustomerResponse'
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
        $this->values[self::stores] = array();
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
     * Appends value to 'stores' list
     *
     * @param \service\message\customer\CustomerResponse $value Value to append
     *
     * @return null
     */
    public function appendStores(\service\message\customer\CustomerResponse $value)
    {
        return $this->append(self::stores, $value);
    }

    /**
     * Clears 'stores' list
     *
     * @return null
     */
    public function clearStores()
    {
        return $this->clear(self::stores);
    }

    /**
     * Returns 'stores' list
     *
     * @return \service\message\customer\CustomerResponse[]
     */
    public function getStores()
    {
        return $this->get(self::stores);
    }

    /**
     * Returns 'stores' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoresIterator()
    {
        return new \ArrayIterator($this->get(self::stores));
    }

    /**
     * Returns element from 'stores' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\customer\CustomerResponse
     */
    public function getStoresAt($offset)
    {
        return $this->get(self::stores, $offset);
    }

    /**
     * Returns count of 'stores' list
     *
     * @return int
     */
    public function getStoresCount()
    {
        return $this->count(self::stores);
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
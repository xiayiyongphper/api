<?php
/**
 *
 * service.message.driver package
 */

namespace service\message\driver;
/**
 * OrderListResponse message
 */
class OrderListResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const items = 1;
    const pagination = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::items => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\service\message\driver\DriverOrder'
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
        $this->values[self::items] = array();
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
     * Appends value to 'items' list
     *
     * @param \service\message\driver\DriverOrder $value Value to append
     *
     * @return null
     */
    public function appendItems(\service\message\driver\DriverOrder $value)
    {
        return $this->append(self::items, $value);
    }

    /**
     * Clears 'items' list
     *
     * @return null
     */
    public function clearItems()
    {
        return $this->clear(self::items);
    }

    /**
     * Returns 'items' list
     *
     * @return \service\message\driver\DriverOrder[]
     */
    public function getItems()
    {
        return $this->get(self::items);
    }

    /**
     * Returns 'items' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemsIterator()
    {
        return new \ArrayIterator($this->get(self::items));
    }

    /**
     * Returns element from 'items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\driver\DriverOrder
     */
    public function getItemsAt($offset)
    {
        return $this->get(self::items, $offset);
    }

    /**
     * Returns count of 'items' list
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->count(self::items);
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
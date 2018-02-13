<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * OrderStatusResponse message
 */
class OrderStatusResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const status = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::status => array(
            'name' => 'status',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
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
        $this->values[self::status] = array();
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
     * Appends value to 'status' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendStatus(\service\message\common\KeyValueItem $value)
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
     * @return \service\message\common\KeyValueItem[]
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
     * @return \service\message\common\KeyValueItem
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
}
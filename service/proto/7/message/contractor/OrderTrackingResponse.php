<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * OrderTrackingResponse message
 */
class OrderTrackingResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const order_tracking = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::order_tracking => array(
            'name' => 'order_tracking',
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
        $this->values[self::order_tracking] = array();
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
     * Appends value to 'order_tracking' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendOrderTracking(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::order_tracking, $value);
    }

    /**
     * Clears 'order_tracking' list
     *
     * @return null
     */
    public function clearOrderTracking()
    {
        return $this->clear(self::order_tracking);
    }

    /**
     * Returns 'order_tracking' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getOrderTracking()
    {
        return $this->get(self::order_tracking);
    }

    /**
     * Returns 'order_tracking' iterator
     *
     * @return \ArrayIterator
     */
    public function getOrderTrackingIterator()
    {
        return new \ArrayIterator($this->get(self::order_tracking));
    }

    /**
     * Returns element from 'order_tracking' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getOrderTrackingAt($offset)
    {
        return $this->get(self::order_tracking, $offset);
    }

    /**
     * Returns count of 'order_tracking' list
     *
     * @return int
     */
    public function getOrderTrackingCount()
    {
        return $this->count(self::order_tracking);
    }
}
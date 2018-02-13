<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * StoreRecentlyOrderResponse message
 */
class StoreRecentlyOrderResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const order_info = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::order_info => array(
            'name' => 'order_info',
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
        $this->values[self::order_info] = array();
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
     * Appends value to 'order_info' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendOrderInfo(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::order_info, $value);
    }

    /**
     * Clears 'order_info' list
     *
     * @return null
     */
    public function clearOrderInfo()
    {
        return $this->clear(self::order_info);
    }

    /**
     * Returns 'order_info' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getOrderInfo()
    {
        return $this->get(self::order_info);
    }

    /**
     * Returns 'order_info' iterator
     *
     * @return \ArrayIterator
     */
    public function getOrderInfoIterator()
    {
        return new \ArrayIterator($this->get(self::order_info));
    }

    /**
     * Returns element from 'order_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getOrderInfoAt($offset)
    {
        return $this->get(self::order_info, $offset);
    }

    /**
     * Returns count of 'order_info' list
     *
     * @return int
     */
    public function getOrderInfoCount()
    {
        return $this->count(self::order_info);
    }
}
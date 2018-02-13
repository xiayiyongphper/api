<?php
/**
 *
 * service.message.customer package
 */

namespace service\message\customer;
/**
 * CartItemsResponse2 message
 */
class CartItemsResponse2 extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const data = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::data => array(
            'name' => 'data',
            'repeated' => true,
            'type' => '\service\message\common\CartItem2'
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
        $this->values[self::data] = array();
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
     * Appends value to 'data' list
     *
     * @param \service\message\common\CartItem2 $value Value to append
     *
     * @return null
     */
    public function appendData(\service\message\common\CartItem2 $value)
    {
        return $this->append(self::data, $value);
    }

    /**
     * Clears 'data' list
     *
     * @return null
     */
    public function clearData()
    {
        return $this->clear(self::data);
    }

    /**
     * Returns 'data' list
     *
     * @return \service\message\common\CartItem2[]
     */
    public function getData()
    {
        return $this->get(self::data);
    }

    /**
     * Returns 'data' iterator
     *
     * @return \ArrayIterator
     */
    public function getDataIterator()
    {
        return new \ArrayIterator($this->get(self::data));
    }

    /**
     * Returns element from 'data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\CartItem2
     */
    public function getDataAt($offset)
    {
        return $this->get(self::data, $offset);
    }

    /**
     * Returns count of 'data' list
     *
     * @return int
     */
    public function getDataCount()
    {
        return $this->count(self::data);
    }
}
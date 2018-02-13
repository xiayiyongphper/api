<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * CouponReceiveListResponse message
 */
class CouponReceiveListResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const coupon_receive = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::coupon_receive => array(
            'name' => 'coupon_receive',
            'repeated' => true,
            'type' => '\service\message\common\CouponReceive'
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
        $this->values[self::coupon_receive] = array();
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
     * Appends value to 'coupon_receive' list
     *
     * @param \service\message\common\CouponReceive $value Value to append
     *
     * @return null
     */
    public function appendCouponReceive(\service\message\common\CouponReceive $value)
    {
        return $this->append(self::coupon_receive, $value);
    }

    /**
     * Clears 'coupon_receive' list
     *
     * @return null
     */
    public function clearCouponReceive()
    {
        return $this->clear(self::coupon_receive);
    }

    /**
     * Returns 'coupon_receive' list
     *
     * @return \service\message\common\CouponReceive[]
     */
    public function getCouponReceive()
    {
        return $this->get(self::coupon_receive);
    }

    /**
     * Returns 'coupon_receive' iterator
     *
     * @return \ArrayIterator
     */
    public function getCouponReceiveIterator()
    {
        return new \ArrayIterator($this->get(self::coupon_receive));
    }

    /**
     * Returns element from 'coupon_receive' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\CouponReceive
     */
    public function getCouponReceiveAt($offset)
    {
        return $this->get(self::coupon_receive, $offset);
    }

    /**
     * Returns count of 'coupon_receive' list
     *
     * @return int
     */
    public function getCouponReceiveCount()
    {
        return $this->count(self::coupon_receive);
    }
}
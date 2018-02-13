<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * getCustomerCouponListResponse message
 */
class getCustomerCouponListResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const coupon_list = 1;
    const pagination = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::coupon_list => array(
            'name' => 'coupon_list',
            'repeated' => true,
            'type' => '\service\message\common\Coupon'
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
        $this->values[self::coupon_list] = array();
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
     * Appends value to 'coupon_list' list
     *
     * @param \service\message\common\Coupon $value Value to append
     *
     * @return null
     */
    public function appendCouponList(\service\message\common\Coupon $value)
    {
        return $this->append(self::coupon_list, $value);
    }

    /**
     * Clears 'coupon_list' list
     *
     * @return null
     */
    public function clearCouponList()
    {
        return $this->clear(self::coupon_list);
    }

    /**
     * Returns 'coupon_list' list
     *
     * @return \service\message\common\Coupon[]
     */
    public function getCouponList()
    {
        return $this->get(self::coupon_list);
    }

    /**
     * Returns 'coupon_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getCouponListIterator()
    {
        return new \ArrayIterator($this->get(self::coupon_list));
    }

    /**
     * Returns element from 'coupon_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Coupon
     */
    public function getCouponListAt($offset)
    {
        return $this->get(self::coupon_list, $offset);
    }

    /**
     * Returns count of 'coupon_list' list
     *
     * @return int
     */
    public function getCouponListCount()
    {
        return $this->count(self::coupon_list);
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
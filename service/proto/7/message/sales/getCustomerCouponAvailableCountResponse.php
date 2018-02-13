<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * getCustomerCouponAvailableCountResponse message
 */
class getCustomerCouponAvailableCountResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const coupon_available_count = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::coupon_available_count => array(
            'name' => 'coupon_available_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::coupon_available_count] = null;
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
     * Sets value of 'coupon_available_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCouponAvailableCount($value)
    {
        return $this->set(self::coupon_available_count, $value);
    }

    /**
     * Returns value of 'coupon_available_count' property
     *
     * @return integer
     */
    public function getCouponAvailableCount()
    {
        $value = $this->get(self::coupon_available_count);
        return $value === null ? (integer)$value : $value;
    }
}
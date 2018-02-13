<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * HomeResponse message
 */
class HomeResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractorstatics = 1;
    const stores = 2;
    const visited = 3;
    const review_info = 4;
    const customer_info = 5;
    const mark_price_info = 6;
    const more_url = 11;
    const order_tracking = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractorstatics => array(
            'name' => 'contractorStatics',
            'required' => false,
            'type' => '\service\message\common\ContractorStatics'
        ),
        self::stores => array(
            'name' => 'stores',
            'repeated' => true,
            'type' => '\service\message\customer\CustomerResponse'
        ),
        self::visited => array(
            'name' => 'visited',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::review_info => array(
            'name' => 'review_info',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::customer_info => array(
            'name' => 'customer_info',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::mark_price_info => array(
            'name' => 'mark_price_info',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::more_url => array(
            'name' => 'more_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
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
        $this->values[self::contractorstatics] = null;
        $this->values[self::stores] = array();
        $this->values[self::visited] = array();
        $this->values[self::review_info] = array();
        $this->values[self::customer_info] = array();
        $this->values[self::mark_price_info] = array();
        $this->values[self::more_url] = null;
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
     * Sets value of 'contractorStatics' property
     *
     * @param \service\message\common\ContractorStatics $value Property value
     *
     * @return null
     */
    public function setContractorStatics(\service\message\common\ContractorStatics $value=null)
    {
        return $this->set(self::contractorstatics, $value);
    }

    /**
     * Returns value of 'contractorStatics' property
     *
     * @return \service\message\common\ContractorStatics
     */
    public function getContractorStatics()
    {
        return $this->get(self::contractorstatics);
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
     * Appends value to 'visited' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendVisited(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::visited, $value);
    }

    /**
     * Clears 'visited' list
     *
     * @return null
     */
    public function clearVisited()
    {
        return $this->clear(self::visited);
    }

    /**
     * Returns 'visited' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getVisited()
    {
        return $this->get(self::visited);
    }

    /**
     * Returns 'visited' iterator
     *
     * @return \ArrayIterator
     */
    public function getVisitedIterator()
    {
        return new \ArrayIterator($this->get(self::visited));
    }

    /**
     * Returns element from 'visited' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getVisitedAt($offset)
    {
        return $this->get(self::visited, $offset);
    }

    /**
     * Returns count of 'visited' list
     *
     * @return int
     */
    public function getVisitedCount()
    {
        return $this->count(self::visited);
    }

    /**
     * Appends value to 'review_info' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendReviewInfo(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::review_info, $value);
    }

    /**
     * Clears 'review_info' list
     *
     * @return null
     */
    public function clearReviewInfo()
    {
        return $this->clear(self::review_info);
    }

    /**
     * Returns 'review_info' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getReviewInfo()
    {
        return $this->get(self::review_info);
    }

    /**
     * Returns 'review_info' iterator
     *
     * @return \ArrayIterator
     */
    public function getReviewInfoIterator()
    {
        return new \ArrayIterator($this->get(self::review_info));
    }

    /**
     * Returns element from 'review_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getReviewInfoAt($offset)
    {
        return $this->get(self::review_info, $offset);
    }

    /**
     * Returns count of 'review_info' list
     *
     * @return int
     */
    public function getReviewInfoCount()
    {
        return $this->count(self::review_info);
    }

    /**
     * Appends value to 'customer_info' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendCustomerInfo(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::customer_info, $value);
    }

    /**
     * Clears 'customer_info' list
     *
     * @return null
     */
    public function clearCustomerInfo()
    {
        return $this->clear(self::customer_info);
    }

    /**
     * Returns 'customer_info' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getCustomerInfo()
    {
        return $this->get(self::customer_info);
    }

    /**
     * Returns 'customer_info' iterator
     *
     * @return \ArrayIterator
     */
    public function getCustomerInfoIterator()
    {
        return new \ArrayIterator($this->get(self::customer_info));
    }

    /**
     * Returns element from 'customer_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getCustomerInfoAt($offset)
    {
        return $this->get(self::customer_info, $offset);
    }

    /**
     * Returns count of 'customer_info' list
     *
     * @return int
     */
    public function getCustomerInfoCount()
    {
        return $this->count(self::customer_info);
    }

    /**
     * Appends value to 'mark_price_info' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendMarkPriceInfo(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::mark_price_info, $value);
    }

    /**
     * Clears 'mark_price_info' list
     *
     * @return null
     */
    public function clearMarkPriceInfo()
    {
        return $this->clear(self::mark_price_info);
    }

    /**
     * Returns 'mark_price_info' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getMarkPriceInfo()
    {
        return $this->get(self::mark_price_info);
    }

    /**
     * Returns 'mark_price_info' iterator
     *
     * @return \ArrayIterator
     */
    public function getMarkPriceInfoIterator()
    {
        return new \ArrayIterator($this->get(self::mark_price_info));
    }

    /**
     * Returns element from 'mark_price_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getMarkPriceInfoAt($offset)
    {
        return $this->get(self::mark_price_info, $offset);
    }

    /**
     * Returns count of 'mark_price_info' list
     *
     * @return int
     */
    public function getMarkPriceInfoCount()
    {
        return $this->count(self::mark_price_info);
    }

    /**
     * Sets value of 'more_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMoreUrl($value)
    {
        return $this->set(self::more_url, $value);
    }

    /**
     * Returns value of 'more_url' property
     *
     * @return string
     */
    public function getMoreUrl()
    {
        $value = $this->get(self::more_url);
        return $value === null ? (string)$value : $value;
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
<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * GetStoreInfoResponse message
 */
class GetStoreInfoResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const store = 1;
    const records_count = 2;
    const final_record = 3;
    const order_info = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::store => array(
            'name' => 'store',
            'required' => false,
            'type' => '\service\message\customer\CustomerResponse'
        ),
        self::records_count => array(
            'name' => 'records_count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::final_record => array(
            'name' => 'final_record',
            'required' => false,
            'type' => '\service\message\contractor\VisitRecord'
        ),
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
        $this->values[self::store] = null;
        $this->values[self::records_count] = null;
        $this->values[self::final_record] = null;
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
     * Sets value of 'store' property
     *
     * @param \service\message\customer\CustomerResponse $value Property value
     *
     * @return null
     */
    public function setStore(\service\message\customer\CustomerResponse $value=null)
    {
        return $this->set(self::store, $value);
    }

    /**
     * Returns value of 'store' property
     *
     * @return \service\message\customer\CustomerResponse
     */
    public function getStore()
    {
        return $this->get(self::store);
    }

    /**
     * Sets value of 'records_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecordsCount($value)
    {
        return $this->set(self::records_count, $value);
    }

    /**
     * Returns value of 'records_count' property
     *
     * @return integer
     */
    public function getRecordsCount()
    {
        $value = $this->get(self::records_count);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'final_record' property
     *
     * @param \service\message\contractor\VisitRecord $value Property value
     *
     * @return null
     */
    public function setFinalRecord(\service\message\contractor\VisitRecord $value=null)
    {
        return $this->set(self::final_record, $value);
    }

    /**
     * Returns value of 'final_record' property
     *
     * @return \service\message\contractor\VisitRecord
     */
    public function getFinalRecord()
    {
        return $this->get(self::final_record);
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
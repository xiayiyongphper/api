<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ManageStatData message
 */
class ManageStatData extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const title = 1;
    const order_stat = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::title => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::order_stat => array(
            'name' => 'order_stat',
            'repeated' => true,
            'type' => '\service\message\contractor\ContractorSaleData'
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
        $this->values[self::title] = null;
        $this->values[self::order_stat] = array();
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
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::title, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::title);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'order_stat' list
     *
     * @param \service\message\contractor\ContractorSaleData $value Value to append
     *
     * @return null
     */
    public function appendOrderStat(\service\message\contractor\ContractorSaleData $value)
    {
        return $this->append(self::order_stat, $value);
    }

    /**
     * Clears 'order_stat' list
     *
     * @return null
     */
    public function clearOrderStat()
    {
        return $this->clear(self::order_stat);
    }

    /**
     * Returns 'order_stat' list
     *
     * @return \service\message\contractor\ContractorSaleData[]
     */
    public function getOrderStat()
    {
        return $this->get(self::order_stat);
    }

    /**
     * Returns 'order_stat' iterator
     *
     * @return \ArrayIterator
     */
    public function getOrderStatIterator()
    {
        return new \ArrayIterator($this->get(self::order_stat));
    }

    /**
     * Returns element from 'order_stat' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\contractor\ContractorSaleData
     */
    public function getOrderStatAt($offset)
    {
        return $this->get(self::order_stat, $offset);
    }

    /**
     * Returns count of 'order_stat' list
     *
     * @return int
     */
    public function getOrderStatCount()
    {
        return $this->count(self::order_stat);
    }
}
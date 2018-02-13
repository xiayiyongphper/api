<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * HomeResponse2 message
 */
class HomeResponse2 extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const data = 1;
    const month_data = 2;
    const detail_url = 3;
    const quick_entry = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::data => array(
            'name' => 'data',
            'repeated' => true,
            'type' => '\service\message\contractor\ContractorStaticsData'
        ),
        self::month_data => array(
            'name' => 'month_data',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::detail_url => array(
            'name' => 'detail_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::quick_entry => array(
            'name' => 'quick_entry',
            'repeated' => true,
            'type' => '\service\message\contractor\QuickEntry'
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
        $this->values[self::month_data] = array();
        $this->values[self::detail_url] = null;
        $this->values[self::quick_entry] = array();
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
     * @param \service\message\contractor\ContractorStaticsData $value Value to append
     *
     * @return null
     */
    public function appendData(\service\message\contractor\ContractorStaticsData $value)
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
     * @return \service\message\contractor\ContractorStaticsData[]
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
     * @return \service\message\contractor\ContractorStaticsData
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

    /**
     * Appends value to 'month_data' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendMonthData(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::month_data, $value);
    }

    /**
     * Clears 'month_data' list
     *
     * @return null
     */
    public function clearMonthData()
    {
        return $this->clear(self::month_data);
    }

    /**
     * Returns 'month_data' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getMonthData()
    {
        return $this->get(self::month_data);
    }

    /**
     * Returns 'month_data' iterator
     *
     * @return \ArrayIterator
     */
    public function getMonthDataIterator()
    {
        return new \ArrayIterator($this->get(self::month_data));
    }

    /**
     * Returns element from 'month_data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getMonthDataAt($offset)
    {
        return $this->get(self::month_data, $offset);
    }

    /**
     * Returns count of 'month_data' list
     *
     * @return int
     */
    public function getMonthDataCount()
    {
        return $this->count(self::month_data);
    }

    /**
     * Sets value of 'detail_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDetailUrl($value)
    {
        return $this->set(self::detail_url, $value);
    }

    /**
     * Returns value of 'detail_url' property
     *
     * @return string
     */
    public function getDetailUrl()
    {
        $value = $this->get(self::detail_url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'quick_entry' list
     *
     * @param \service\message\contractor\QuickEntry $value Value to append
     *
     * @return null
     */
    public function appendQuickEntry(\service\message\contractor\QuickEntry $value)
    {
        return $this->append(self::quick_entry, $value);
    }

    /**
     * Clears 'quick_entry' list
     *
     * @return null
     */
    public function clearQuickEntry()
    {
        return $this->clear(self::quick_entry);
    }

    /**
     * Returns 'quick_entry' list
     *
     * @return \service\message\contractor\QuickEntry[]
     */
    public function getQuickEntry()
    {
        return $this->get(self::quick_entry);
    }

    /**
     * Returns 'quick_entry' iterator
     *
     * @return \ArrayIterator
     */
    public function getQuickEntryIterator()
    {
        return new \ArrayIterator($this->get(self::quick_entry));
    }

    /**
     * Returns element from 'quick_entry' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\contractor\QuickEntry
     */
    public function getQuickEntryAt($offset)
    {
        return $this->get(self::quick_entry, $offset);
    }

    /**
     * Returns count of 'quick_entry' list
     *
     * @return int
     */
    public function getQuickEntryCount()
    {
        return $this->count(self::quick_entry);
    }
}
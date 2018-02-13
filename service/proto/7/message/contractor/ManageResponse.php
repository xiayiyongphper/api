<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ManageResponse message
 */
class ManageResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const stat_data = 1;
    const quick_entry = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::stat_data => array(
            'name' => 'stat_data',
            'repeated' => true,
            'type' => '\service\message\contractor\ManageStatData'
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
        $this->values[self::stat_data] = array();
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
     * Appends value to 'stat_data' list
     *
     * @param \service\message\contractor\ManageStatData $value Value to append
     *
     * @return null
     */
    public function appendStatData(\service\message\contractor\ManageStatData $value)
    {
        return $this->append(self::stat_data, $value);
    }

    /**
     * Clears 'stat_data' list
     *
     * @return null
     */
    public function clearStatData()
    {
        return $this->clear(self::stat_data);
    }

    /**
     * Returns 'stat_data' list
     *
     * @return \service\message\contractor\ManageStatData[]
     */
    public function getStatData()
    {
        return $this->get(self::stat_data);
    }

    /**
     * Returns 'stat_data' iterator
     *
     * @return \ArrayIterator
     */
    public function getStatDataIterator()
    {
        return new \ArrayIterator($this->get(self::stat_data));
    }

    /**
     * Returns element from 'stat_data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\contractor\ManageStatData
     */
    public function getStatDataAt($offset)
    {
        return $this->get(self::stat_data, $offset);
    }

    /**
     * Returns count of 'stat_data' list
     *
     * @return int
     */
    public function getStatDataCount()
    {
        return $this->count(self::stat_data);
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
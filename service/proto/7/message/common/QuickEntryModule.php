<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * QuickEntryModule message
 */
class QuickEntryModule extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const quick_entry_blocks = 1;
    const background_img = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::quick_entry_blocks => array(
            'name' => 'quick_entry_blocks',
            'repeated' => true,
            'type' => '\service\message\common\QuickEntryBlock'
        ),
        self::background_img => array(
            'name' => 'background_img',
            'required' => false,
            'type' => '\service\message\common\Image'
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
        $this->values[self::quick_entry_blocks] = array();
        $this->values[self::background_img] = null;
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
     * Appends value to 'quick_entry_blocks' list
     *
     * @param \service\message\common\QuickEntryBlock $value Value to append
     *
     * @return null
     */
    public function appendQuickEntryBlocks(\service\message\common\QuickEntryBlock $value)
    {
        return $this->append(self::quick_entry_blocks, $value);
    }

    /**
     * Clears 'quick_entry_blocks' list
     *
     * @return null
     */
    public function clearQuickEntryBlocks()
    {
        return $this->clear(self::quick_entry_blocks);
    }

    /**
     * Returns 'quick_entry_blocks' list
     *
     * @return \service\message\common\QuickEntryBlock[]
     */
    public function getQuickEntryBlocks()
    {
        return $this->get(self::quick_entry_blocks);
    }

    /**
     * Returns 'quick_entry_blocks' iterator
     *
     * @return \ArrayIterator
     */
    public function getQuickEntryBlocksIterator()
    {
        return new \ArrayIterator($this->get(self::quick_entry_blocks));
    }

    /**
     * Returns element from 'quick_entry_blocks' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\QuickEntryBlock
     */
    public function getQuickEntryBlocksAt($offset)
    {
        return $this->get(self::quick_entry_blocks, $offset);
    }

    /**
     * Returns count of 'quick_entry_blocks' list
     *
     * @return int
     */
    public function getQuickEntryBlocksCount()
    {
        return $this->count(self::quick_entry_blocks);
    }

    /**
     * Sets value of 'background_img' property
     *
     * @param \service\message\common\Image $value Property value
     *
     * @return null
     */
    public function setBackgroundImg(\service\message\common\Image $value=null)
    {
        return $this->set(self::background_img, $value);
    }

    /**
     * Returns value of 'background_img' property
     *
     * @return \service\message\common\Image
     */
    public function getBackgroundImg()
    {
        return $this->get(self::background_img);
    }
}
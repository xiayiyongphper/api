<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * HomeResponse2 message
 */
class HomeResponse2 extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const top_fixed_banner = 1;
    const tag = 2;
    const second_fixed_banner = 3;
    const quick_entry_module = 4;
    const topic_blocks = 5;
    const product_blocks = 6;
    const store_block = 7;
    const brand_block = 8;
    const camber_banner = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::top_fixed_banner => array(
            'name' => 'top_fixed_banner',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::tag => array(
            'name' => 'tag',
            'required' => false,
            'type' => '\service\message\common\Tag'
        ),
        self::second_fixed_banner => array(
            'name' => 'second_fixed_banner',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::quick_entry_module => array(
            'name' => 'quick_entry_module',
            'required' => false,
            'type' => '\service\message\common\QuickEntryModule'
        ),
        self::topic_blocks => array(
            'name' => 'topic_blocks',
            'repeated' => true,
            'type' => '\service\message\common\TopicBlock'
        ),
        self::product_blocks => array(
            'name' => 'product_blocks',
            'repeated' => true,
            'type' => '\service\message\common\ProductBlock'
        ),
        self::store_block => array(
            'name' => 'store_block',
            'required' => false,
            'type' => '\service\message\common\StoreBlock'
        ),
        self::brand_block => array(
            'name' => 'brand_block',
            'required' => false,
            'type' => '\service\message\common\BrandBlock'
        ),
        self::camber_banner => array(
            'name' => 'camber_banner',
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
        $this->values[self::top_fixed_banner] = array();
        $this->values[self::tag] = null;
        $this->values[self::second_fixed_banner] = array();
        $this->values[self::quick_entry_module] = null;
        $this->values[self::topic_blocks] = array();
        $this->values[self::product_blocks] = array();
        $this->values[self::store_block] = null;
        $this->values[self::brand_block] = null;
        $this->values[self::camber_banner] = null;
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
     * Appends value to 'top_fixed_banner' list
     *
     * @param \service\message\common\Image $value Value to append
     *
     * @return null
     */
    public function appendTopFixedBanner(\service\message\common\Image $value)
    {
        return $this->append(self::top_fixed_banner, $value);
    }

    /**
     * Clears 'top_fixed_banner' list
     *
     * @return null
     */
    public function clearTopFixedBanner()
    {
        return $this->clear(self::top_fixed_banner);
    }

    /**
     * Returns 'top_fixed_banner' list
     *
     * @return \service\message\common\Image[]
     */
    public function getTopFixedBanner()
    {
        return $this->get(self::top_fixed_banner);
    }

    /**
     * Returns 'top_fixed_banner' iterator
     *
     * @return \ArrayIterator
     */
    public function getTopFixedBannerIterator()
    {
        return new \ArrayIterator($this->get(self::top_fixed_banner));
    }

    /**
     * Returns element from 'top_fixed_banner' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Image
     */
    public function getTopFixedBannerAt($offset)
    {
        return $this->get(self::top_fixed_banner, $offset);
    }

    /**
     * Returns count of 'top_fixed_banner' list
     *
     * @return int
     */
    public function getTopFixedBannerCount()
    {
        return $this->count(self::top_fixed_banner);
    }

    /**
     * Sets value of 'tag' property
     *
     * @param \service\message\common\Tag $value Property value
     *
     * @return null
     */
    public function setTag(\service\message\common\Tag $value=null)
    {
        return $this->set(self::tag, $value);
    }

    /**
     * Returns value of 'tag' property
     *
     * @return \service\message\common\Tag
     */
    public function getTag()
    {
        return $this->get(self::tag);
    }

    /**
     * Appends value to 'second_fixed_banner' list
     *
     * @param \service\message\common\Image $value Value to append
     *
     * @return null
     */
    public function appendSecondFixedBanner(\service\message\common\Image $value)
    {
        return $this->append(self::second_fixed_banner, $value);
    }

    /**
     * Clears 'second_fixed_banner' list
     *
     * @return null
     */
    public function clearSecondFixedBanner()
    {
        return $this->clear(self::second_fixed_banner);
    }

    /**
     * Returns 'second_fixed_banner' list
     *
     * @return \service\message\common\Image[]
     */
    public function getSecondFixedBanner()
    {
        return $this->get(self::second_fixed_banner);
    }

    /**
     * Returns 'second_fixed_banner' iterator
     *
     * @return \ArrayIterator
     */
    public function getSecondFixedBannerIterator()
    {
        return new \ArrayIterator($this->get(self::second_fixed_banner));
    }

    /**
     * Returns element from 'second_fixed_banner' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Image
     */
    public function getSecondFixedBannerAt($offset)
    {
        return $this->get(self::second_fixed_banner, $offset);
    }

    /**
     * Returns count of 'second_fixed_banner' list
     *
     * @return int
     */
    public function getSecondFixedBannerCount()
    {
        return $this->count(self::second_fixed_banner);
    }

    /**
     * Sets value of 'quick_entry_module' property
     *
     * @param \service\message\common\QuickEntryModule $value Property value
     *
     * @return null
     */
    public function setQuickEntryModule(\service\message\common\QuickEntryModule $value=null)
    {
        return $this->set(self::quick_entry_module, $value);
    }

    /**
     * Returns value of 'quick_entry_module' property
     *
     * @return \service\message\common\QuickEntryModule
     */
    public function getQuickEntryModule()
    {
        return $this->get(self::quick_entry_module);
    }

    /**
     * Appends value to 'topic_blocks' list
     *
     * @param \service\message\common\TopicBlock $value Value to append
     *
     * @return null
     */
    public function appendTopicBlocks(\service\message\common\TopicBlock $value)
    {
        return $this->append(self::topic_blocks, $value);
    }

    /**
     * Clears 'topic_blocks' list
     *
     * @return null
     */
    public function clearTopicBlocks()
    {
        return $this->clear(self::topic_blocks);
    }

    /**
     * Returns 'topic_blocks' list
     *
     * @return \service\message\common\TopicBlock[]
     */
    public function getTopicBlocks()
    {
        return $this->get(self::topic_blocks);
    }

    /**
     * Returns 'topic_blocks' iterator
     *
     * @return \ArrayIterator
     */
    public function getTopicBlocksIterator()
    {
        return new \ArrayIterator($this->get(self::topic_blocks));
    }

    /**
     * Returns element from 'topic_blocks' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\TopicBlock
     */
    public function getTopicBlocksAt($offset)
    {
        return $this->get(self::topic_blocks, $offset);
    }

    /**
     * Returns count of 'topic_blocks' list
     *
     * @return int
     */
    public function getTopicBlocksCount()
    {
        return $this->count(self::topic_blocks);
    }

    /**
     * Appends value to 'product_blocks' list
     *
     * @param \service\message\common\ProductBlock $value Value to append
     *
     * @return null
     */
    public function appendProductBlocks(\service\message\common\ProductBlock $value)
    {
        return $this->append(self::product_blocks, $value);
    }

    /**
     * Clears 'product_blocks' list
     *
     * @return null
     */
    public function clearProductBlocks()
    {
        return $this->clear(self::product_blocks);
    }

    /**
     * Returns 'product_blocks' list
     *
     * @return \service\message\common\ProductBlock[]
     */
    public function getProductBlocks()
    {
        return $this->get(self::product_blocks);
    }

    /**
     * Returns 'product_blocks' iterator
     *
     * @return \ArrayIterator
     */
    public function getProductBlocksIterator()
    {
        return new \ArrayIterator($this->get(self::product_blocks));
    }

    /**
     * Returns element from 'product_blocks' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\ProductBlock
     */
    public function getProductBlocksAt($offset)
    {
        return $this->get(self::product_blocks, $offset);
    }

    /**
     * Returns count of 'product_blocks' list
     *
     * @return int
     */
    public function getProductBlocksCount()
    {
        return $this->count(self::product_blocks);
    }

    /**
     * Sets value of 'store_block' property
     *
     * @param \service\message\common\StoreBlock $value Property value
     *
     * @return null
     */
    public function setStoreBlock(\service\message\common\StoreBlock $value=null)
    {
        return $this->set(self::store_block, $value);
    }

    /**
     * Returns value of 'store_block' property
     *
     * @return \service\message\common\StoreBlock
     */
    public function getStoreBlock()
    {
        return $this->get(self::store_block);
    }

    /**
     * Sets value of 'brand_block' property
     *
     * @param \service\message\common\BrandBlock $value Property value
     *
     * @return null
     */
    public function setBrandBlock(\service\message\common\BrandBlock $value=null)
    {
        return $this->set(self::brand_block, $value);
    }

    /**
     * Returns value of 'brand_block' property
     *
     * @return \service\message\common\BrandBlock
     */
    public function getBrandBlock()
    {
        return $this->get(self::brand_block);
    }

    /**
     * Sets value of 'camber_banner' property
     *
     * @param \service\message\common\Image $value Property value
     *
     * @return null
     */
    public function setCamberBanner(\service\message\common\Image $value=null)
    {
        return $this->set(self::camber_banner, $value);
    }

    /**
     * Returns value of 'camber_banner' property
     *
     * @return \service\message\common\Image
     */
    public function getCamberBanner()
    {
        return $this->get(self::camber_banner);
    }
}
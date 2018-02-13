<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * HomeResponse message
 */
class HomeResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const static_banner = 1;
    const banner = 2;
    const discount_block = 3;
    const new_arrival_block = 4;
    const category = 5;
    const right_ad = 6;
    const store = 7;
    const topic_blocks = 8;
    const product_blocks = 9;
    const featured_block = 10;
    const quick_entry_blocks = 11;
    const tag = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::static_banner => array(
            'name' => 'static_banner',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::banner => array(
            'name' => 'banner',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::discount_block => array(
            'name' => 'discount_block',
            'required' => false,
            'type' => '\service\message\common\ProductBlock'
        ),
        self::new_arrival_block => array(
            'name' => 'new_arrival_block',
            'required' => false,
            'type' => '\service\message\common\ProductBlock'
        ),
        self::category => array(
            'name' => 'category',
            'repeated' => true,
            'type' => '\service\message\common\CategoryBlock'
        ),
        self::right_ad => array(
            'name' => 'right_ad',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::store => array(
            'name' => 'store',
            'repeated' => true,
            'type' => '\service\message\common\Store'
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
        self::featured_block => array(
            'name' => 'featured_block',
            'required' => false,
            'type' => '\service\message\common\ProductBlock'
        ),
        self::quick_entry_blocks => array(
            'name' => 'quick_entry_blocks',
            'repeated' => true,
            'type' => '\service\message\common\QuickEntryBlock'
        ),
        self::tag => array(
            'name' => 'tag',
            'required' => false,
            'type' => '\service\message\common\Tag'
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
        $this->values[self::static_banner] = array();
        $this->values[self::banner] = array();
        $this->values[self::discount_block] = null;
        $this->values[self::new_arrival_block] = null;
        $this->values[self::category] = array();
        $this->values[self::right_ad] = array();
        $this->values[self::store] = array();
        $this->values[self::topic_blocks] = array();
        $this->values[self::product_blocks] = array();
        $this->values[self::featured_block] = null;
        $this->values[self::quick_entry_blocks] = array();
        $this->values[self::tag] = null;
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
     * Appends value to 'static_banner' list
     *
     * @param \service\message\common\Image $value Value to append
     *
     * @return null
     */
    public function appendStaticBanner(\service\message\common\Image $value)
    {
        return $this->append(self::static_banner, $value);
    }

    /**
     * Clears 'static_banner' list
     *
     * @return null
     */
    public function clearStaticBanner()
    {
        return $this->clear(self::static_banner);
    }

    /**
     * Returns 'static_banner' list
     *
     * @return \service\message\common\Image[]
     */
    public function getStaticBanner()
    {
        return $this->get(self::static_banner);
    }

    /**
     * Returns 'static_banner' iterator
     *
     * @return \ArrayIterator
     */
    public function getStaticBannerIterator()
    {
        return new \ArrayIterator($this->get(self::static_banner));
    }

    /**
     * Returns element from 'static_banner' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Image
     */
    public function getStaticBannerAt($offset)
    {
        return $this->get(self::static_banner, $offset);
    }

    /**
     * Returns count of 'static_banner' list
     *
     * @return int
     */
    public function getStaticBannerCount()
    {
        return $this->count(self::static_banner);
    }

    /**
     * Appends value to 'banner' list
     *
     * @param \service\message\common\Image $value Value to append
     *
     * @return null
     */
    public function appendBanner(\service\message\common\Image $value)
    {
        return $this->append(self::banner, $value);
    }

    /**
     * Clears 'banner' list
     *
     * @return null
     */
    public function clearBanner()
    {
        return $this->clear(self::banner);
    }

    /**
     * Returns 'banner' list
     *
     * @return \service\message\common\Image[]
     */
    public function getBanner()
    {
        return $this->get(self::banner);
    }

    /**
     * Returns 'banner' iterator
     *
     * @return \ArrayIterator
     */
    public function getBannerIterator()
    {
        return new \ArrayIterator($this->get(self::banner));
    }

    /**
     * Returns element from 'banner' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Image
     */
    public function getBannerAt($offset)
    {
        return $this->get(self::banner, $offset);
    }

    /**
     * Returns count of 'banner' list
     *
     * @return int
     */
    public function getBannerCount()
    {
        return $this->count(self::banner);
    }

    /**
     * Sets value of 'discount_block' property
     *
     * @param \service\message\common\ProductBlock $value Property value
     *
     * @return null
     */
    public function setDiscountBlock(\service\message\common\ProductBlock $value=null)
    {
        return $this->set(self::discount_block, $value);
    }

    /**
     * Returns value of 'discount_block' property
     *
     * @return \service\message\common\ProductBlock
     */
    public function getDiscountBlock()
    {
        return $this->get(self::discount_block);
    }

    /**
     * Sets value of 'new_arrival_block' property
     *
     * @param \service\message\common\ProductBlock $value Property value
     *
     * @return null
     */
    public function setNewArrivalBlock(\service\message\common\ProductBlock $value=null)
    {
        return $this->set(self::new_arrival_block, $value);
    }

    /**
     * Returns value of 'new_arrival_block' property
     *
     * @return \service\message\common\ProductBlock
     */
    public function getNewArrivalBlock()
    {
        return $this->get(self::new_arrival_block);
    }

    /**
     * Appends value to 'category' list
     *
     * @param \service\message\common\CategoryBlock $value Value to append
     *
     * @return null
     */
    public function appendCategory(\service\message\common\CategoryBlock $value)
    {
        return $this->append(self::category, $value);
    }

    /**
     * Clears 'category' list
     *
     * @return null
     */
    public function clearCategory()
    {
        return $this->clear(self::category);
    }

    /**
     * Returns 'category' list
     *
     * @return \service\message\common\CategoryBlock[]
     */
    public function getCategory()
    {
        return $this->get(self::category);
    }

    /**
     * Returns 'category' iterator
     *
     * @return \ArrayIterator
     */
    public function getCategoryIterator()
    {
        return new \ArrayIterator($this->get(self::category));
    }

    /**
     * Returns element from 'category' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\CategoryBlock
     */
    public function getCategoryAt($offset)
    {
        return $this->get(self::category, $offset);
    }

    /**
     * Returns count of 'category' list
     *
     * @return int
     */
    public function getCategoryCount()
    {
        return $this->count(self::category);
    }

    /**
     * Appends value to 'right_ad' list
     *
     * @param \service\message\common\Image $value Value to append
     *
     * @return null
     */
    public function appendRightAd(\service\message\common\Image $value)
    {
        return $this->append(self::right_ad, $value);
    }

    /**
     * Clears 'right_ad' list
     *
     * @return null
     */
    public function clearRightAd()
    {
        return $this->clear(self::right_ad);
    }

    /**
     * Returns 'right_ad' list
     *
     * @return \service\message\common\Image[]
     */
    public function getRightAd()
    {
        return $this->get(self::right_ad);
    }

    /**
     * Returns 'right_ad' iterator
     *
     * @return \ArrayIterator
     */
    public function getRightAdIterator()
    {
        return new \ArrayIterator($this->get(self::right_ad));
    }

    /**
     * Returns element from 'right_ad' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Image
     */
    public function getRightAdAt($offset)
    {
        return $this->get(self::right_ad, $offset);
    }

    /**
     * Returns count of 'right_ad' list
     *
     * @return int
     */
    public function getRightAdCount()
    {
        return $this->count(self::right_ad);
    }

    /**
     * Appends value to 'store' list
     *
     * @param \service\message\common\Store $value Value to append
     *
     * @return null
     */
    public function appendStore(\service\message\common\Store $value)
    {
        return $this->append(self::store, $value);
    }

    /**
     * Clears 'store' list
     *
     * @return null
     */
    public function clearStore()
    {
        return $this->clear(self::store);
    }

    /**
     * Returns 'store' list
     *
     * @return \service\message\common\Store[]
     */
    public function getStore()
    {
        return $this->get(self::store);
    }

    /**
     * Returns 'store' iterator
     *
     * @return \ArrayIterator
     */
    public function getStoreIterator()
    {
        return new \ArrayIterator($this->get(self::store));
    }

    /**
     * Returns element from 'store' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Store
     */
    public function getStoreAt($offset)
    {
        return $this->get(self::store, $offset);
    }

    /**
     * Returns count of 'store' list
     *
     * @return int
     */
    public function getStoreCount()
    {
        return $this->count(self::store);
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
     * Sets value of 'featured_block' property
     *
     * @param \service\message\common\ProductBlock $value Property value
     *
     * @return null
     */
    public function setFeaturedBlock(\service\message\common\ProductBlock $value=null)
    {
        return $this->set(self::featured_block, $value);
    }

    /**
     * Returns value of 'featured_block' property
     *
     * @return \service\message\common\ProductBlock
     */
    public function getFeaturedBlock()
    {
        return $this->get(self::featured_block);
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
}
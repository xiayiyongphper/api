<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * HomePageConfig message
 */
class HomePageConfig extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const topic_blocks = 1;
    const product_blocks = 2;
    const brand_block = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
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
        self::brand_block => array(
            'name' => 'brand_block',
            'required' => false,
            'type' => '\service\message\common\BrandBlock'
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
        $this->values[self::topic_blocks] = array();
        $this->values[self::product_blocks] = array();
        $this->values[self::brand_block] = null;
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
}
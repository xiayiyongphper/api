<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * bestsellerResponse message
 */
class bestsellerResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const top_banner = 1;
    const blocks = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::top_banner => array(
            'name' => 'top_banner',
            'required' => false,
            'type' => '\service\message\common\Image'
        ),
        self::blocks => array(
            'name' => 'blocks',
            'repeated' => true,
            'type' => '\service\message\common\CategoryProductBlock'
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
        $this->values[self::top_banner] = null;
        $this->values[self::blocks] = array();
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
     * Sets value of 'top_banner' property
     *
     * @param \service\message\common\Image $value Property value
     *
     * @return null
     */
    public function setTopBanner(\service\message\common\Image $value=null)
    {
        return $this->set(self::top_banner, $value);
    }

    /**
     * Returns value of 'top_banner' property
     *
     * @return \service\message\common\Image
     */
    public function getTopBanner()
    {
        return $this->get(self::top_banner);
    }

    /**
     * Appends value to 'blocks' list
     *
     * @param \service\message\common\CategoryProductBlock $value Value to append
     *
     * @return null
     */
    public function appendBlocks(\service\message\common\CategoryProductBlock $value)
    {
        return $this->append(self::blocks, $value);
    }

    /**
     * Clears 'blocks' list
     *
     * @return null
     */
    public function clearBlocks()
    {
        return $this->clear(self::blocks);
    }

    /**
     * Returns 'blocks' list
     *
     * @return \service\message\common\CategoryProductBlock[]
     */
    public function getBlocks()
    {
        return $this->get(self::blocks);
    }

    /**
     * Returns 'blocks' iterator
     *
     * @return \ArrayIterator
     */
    public function getBlocksIterator()
    {
        return new \ArrayIterator($this->get(self::blocks));
    }

    /**
     * Returns element from 'blocks' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\CategoryProductBlock
     */
    public function getBlocksAt($offset)
    {
        return $this->get(self::blocks, $offset);
    }

    /**
     * Returns count of 'blocks' list
     *
     * @return int
     */
    public function getBlocksCount()
    {
        return $this->count(self::blocks);
    }
}
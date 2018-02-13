<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * TopicBlock message
 */
class TopicBlock extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const banner = 1;
    const sort = 2;
    const topic_type = 3;
    const title_img = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::banner => array(
            'name' => 'banner',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::sort => array(
            'name' => 'sort',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::topic_type => array(
            'name' => 'topic_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::title_img => array(
            'name' => 'title_img',
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
        $this->values[self::banner] = array();
        $this->values[self::sort] = null;
        $this->values[self::topic_type] = null;
        $this->values[self::title_img] = null;
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
     * Sets value of 'sort' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSort($value)
    {
        return $this->set(self::sort, $value);
    }

    /**
     * Returns value of 'sort' property
     *
     * @return integer
     */
    public function getSort()
    {
        $value = $this->get(self::sort);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'topic_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTopicType($value)
    {
        return $this->set(self::topic_type, $value);
    }

    /**
     * Returns value of 'topic_type' property
     *
     * @return integer
     */
    public function getTopicType()
    {
        $value = $this->get(self::topic_type);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'title_img' property
     *
     * @param \service\message\common\Image $value Property value
     *
     * @return null
     */
    public function setTitleImg(\service\message\common\Image $value=null)
    {
        return $this->set(self::title_img, $value);
    }

    /**
     * Returns value of 'title_img' property
     *
     * @return \service\message\common\Image
     */
    public function getTitleImg()
    {
        return $this->get(self::title_img);
    }
}
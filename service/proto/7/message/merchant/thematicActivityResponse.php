<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * thematicActivityResponse message
 */
class thematicActivityResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const banner = 1;
    const rule = 2;
    const thematic = 3;
    const title = 4;
    const coupon_receive_layout = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::banner => array(
            'name' => 'banner',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::rule => array(
            'name' => 'rule',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::thematic => array(
            'name' => 'thematic',
            'repeated' => true,
            'type' => '\service\message\common\Thematic'
        ),
        self::title => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::coupon_receive_layout => array(
            'name' => 'coupon_receive_layout',
            'required' => false,
            'type' => '\service\message\common\CouponReceiveLayout'
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
        $this->values[self::rule] = null;
        $this->values[self::thematic] = array();
        $this->values[self::title] = null;
        $this->values[self::coupon_receive_layout] = null;
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
     * Sets value of 'rule' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRule($value)
    {
        return $this->set(self::rule, $value);
    }

    /**
     * Returns value of 'rule' property
     *
     * @return string
     */
    public function getRule()
    {
        $value = $this->get(self::rule);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'thematic' list
     *
     * @param \service\message\common\Thematic $value Value to append
     *
     * @return null
     */
    public function appendThematic(\service\message\common\Thematic $value)
    {
        return $this->append(self::thematic, $value);
    }

    /**
     * Clears 'thematic' list
     *
     * @return null
     */
    public function clearThematic()
    {
        return $this->clear(self::thematic);
    }

    /**
     * Returns 'thematic' list
     *
     * @return \service\message\common\Thematic[]
     */
    public function getThematic()
    {
        return $this->get(self::thematic);
    }

    /**
     * Returns 'thematic' iterator
     *
     * @return \ArrayIterator
     */
    public function getThematicIterator()
    {
        return new \ArrayIterator($this->get(self::thematic));
    }

    /**
     * Returns element from 'thematic' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Thematic
     */
    public function getThematicAt($offset)
    {
        return $this->get(self::thematic, $offset);
    }

    /**
     * Returns count of 'thematic' list
     *
     * @return int
     */
    public function getThematicCount()
    {
        return $this->count(self::thematic);
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
     * Sets value of 'coupon_receive_layout' property
     *
     * @param \service\message\common\CouponReceiveLayout $value Property value
     *
     * @return null
     */
    public function setCouponReceiveLayout(\service\message\common\CouponReceiveLayout $value=null)
    {
        return $this->set(self::coupon_receive_layout, $value);
    }

    /**
     * Returns value of 'coupon_receive_layout' property
     *
     * @return \service\message\common\CouponReceiveLayout
     */
    public function getCouponReceiveLayout()
    {
        return $this->get(self::coupon_receive_layout);
    }
}
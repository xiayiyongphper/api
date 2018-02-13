<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * PromotionRule message
 */
class PromotionRule extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const promotion_type = 1;
    const rule = 2;
    const rule_id = 3;
    const name = 4;
    const type = 5;
    const topic_description = 6;
    const topic_banner = 7;
    const tag_short = 8;
    const tag_short_color = 9;
    const tag_long = 10;
    const tag_long_color = 11;
    const wholesaler_id = 12;
    const wholesaler_description = 13;
    const tag_icon = 14;
    const tag_url = 15;
    const stop_rules_processing = 16;
    const coupon_type = 17;
    const subsidies_lelai_included = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::promotion_type => array(
            'name' => 'promotion_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::rule => array(
            'name' => 'rule',
            'repeated' => true,
            'type' => '\service\message\common\Rule'
        ),
        self::rule_id => array(
            'name' => 'rule_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::type => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::topic_description => array(
            'name' => 'topic_description',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::topic_banner => array(
            'name' => 'topic_banner',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tag_short => array(
            'name' => 'tag_short',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tag_short_color => array(
            'name' => 'tag_short_color',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tag_long => array(
            'name' => 'tag_long',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tag_long_color => array(
            'name' => 'tag_long_color',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_description => array(
            'name' => 'wholesaler_description',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tag_icon => array(
            'name' => 'tag_icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tag_url => array(
            'name' => 'tag_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::stop_rules_processing => array(
            'name' => 'stop_rules_processing',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::coupon_type => array(
            'name' => 'coupon_type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::subsidies_lelai_included => array(
            'name' => 'subsidies_lelai_included',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::promotion_type] = null;
        $this->values[self::rule] = array();
        $this->values[self::rule_id] = null;
        $this->values[self::name] = null;
        $this->values[self::type] = null;
        $this->values[self::topic_description] = null;
        $this->values[self::topic_banner] = null;
        $this->values[self::tag_short] = null;
        $this->values[self::tag_short_color] = null;
        $this->values[self::tag_long] = null;
        $this->values[self::tag_long_color] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::wholesaler_description] = null;
        $this->values[self::tag_icon] = null;
        $this->values[self::tag_url] = null;
        $this->values[self::stop_rules_processing] = null;
        $this->values[self::coupon_type] = null;
        $this->values[self::subsidies_lelai_included] = null;
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
     * Sets value of 'promotion_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPromotionType($value)
    {
        return $this->set(self::promotion_type, $value);
    }

    /**
     * Returns value of 'promotion_type' property
     *
     * @return integer
     */
    public function getPromotionType()
    {
        $value = $this->get(self::promotion_type);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'rule' list
     *
     * @param \service\message\common\Rule $value Value to append
     *
     * @return null
     */
    public function appendRule(\service\message\common\Rule $value)
    {
        return $this->append(self::rule, $value);
    }

    /**
     * Clears 'rule' list
     *
     * @return null
     */
    public function clearRule()
    {
        return $this->clear(self::rule);
    }

    /**
     * Returns 'rule' list
     *
     * @return \service\message\common\Rule[]
     */
    public function getRule()
    {
        return $this->get(self::rule);
    }

    /**
     * Returns 'rule' iterator
     *
     * @return \ArrayIterator
     */
    public function getRuleIterator()
    {
        return new \ArrayIterator($this->get(self::rule));
    }

    /**
     * Returns element from 'rule' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Rule
     */
    public function getRuleAt($offset)
    {
        return $this->get(self::rule, $offset);
    }

    /**
     * Returns count of 'rule' list
     *
     * @return int
     */
    public function getRuleCount()
    {
        return $this->count(self::rule);
    }

    /**
     * Sets value of 'rule_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRuleId($value)
    {
        return $this->set(self::rule_id, $value);
    }

    /**
     * Returns value of 'rule_id' property
     *
     * @return integer
     */
    public function getRuleId()
    {
        $value = $this->get(self::rule_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::name, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::type, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::type);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'topic_description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTopicDescription($value)
    {
        return $this->set(self::topic_description, $value);
    }

    /**
     * Returns value of 'topic_description' property
     *
     * @return string
     */
    public function getTopicDescription()
    {
        $value = $this->get(self::topic_description);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'topic_banner' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTopicBanner($value)
    {
        return $this->set(self::topic_banner, $value);
    }

    /**
     * Returns value of 'topic_banner' property
     *
     * @return string
     */
    public function getTopicBanner()
    {
        $value = $this->get(self::topic_banner);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'tag_short' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagShort($value)
    {
        return $this->set(self::tag_short, $value);
    }

    /**
     * Returns value of 'tag_short' property
     *
     * @return string
     */
    public function getTagShort()
    {
        $value = $this->get(self::tag_short);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'tag_short_color' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagShortColor($value)
    {
        return $this->set(self::tag_short_color, $value);
    }

    /**
     * Returns value of 'tag_short_color' property
     *
     * @return string
     */
    public function getTagShortColor()
    {
        $value = $this->get(self::tag_short_color);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'tag_long' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagLong($value)
    {
        return $this->set(self::tag_long, $value);
    }

    /**
     * Returns value of 'tag_long' property
     *
     * @return string
     */
    public function getTagLong()
    {
        $value = $this->get(self::tag_long);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'tag_long_color' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagLongColor($value)
    {
        return $this->set(self::tag_long_color, $value);
    }

    /**
     * Returns value of 'tag_long_color' property
     *
     * @return string
     */
    public function getTagLongColor()
    {
        $value = $this->get(self::tag_long_color);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'wholesaler_id' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWholesalerId($value)
    {
        return $this->set(self::wholesaler_id, $value);
    }

    /**
     * Returns value of 'wholesaler_id' property
     *
     * @return string
     */
    public function getWholesalerId()
    {
        $value = $this->get(self::wholesaler_id);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'wholesaler_description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWholesalerDescription($value)
    {
        return $this->set(self::wholesaler_description, $value);
    }

    /**
     * Returns value of 'wholesaler_description' property
     *
     * @return string
     */
    public function getWholesalerDescription()
    {
        $value = $this->get(self::wholesaler_description);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'tag_icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagIcon($value)
    {
        return $this->set(self::tag_icon, $value);
    }

    /**
     * Returns value of 'tag_icon' property
     *
     * @return string
     */
    public function getTagIcon()
    {
        $value = $this->get(self::tag_icon);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'tag_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagUrl($value)
    {
        return $this->set(self::tag_url, $value);
    }

    /**
     * Returns value of 'tag_url' property
     *
     * @return string
     */
    public function getTagUrl()
    {
        $value = $this->get(self::tag_url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'stop_rules_processing' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStopRulesProcessing($value)
    {
        return $this->set(self::stop_rules_processing, $value);
    }

    /**
     * Returns value of 'stop_rules_processing' property
     *
     * @return integer
     */
    public function getStopRulesProcessing()
    {
        $value = $this->get(self::stop_rules_processing);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'coupon_type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCouponType($value)
    {
        return $this->set(self::coupon_type, $value);
    }

    /**
     * Returns value of 'coupon_type' property
     *
     * @return integer
     */
    public function getCouponType()
    {
        $value = $this->get(self::coupon_type);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'subsidies_lelai_included' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSubsidiesLelaiIncluded($value)
    {
        return $this->set(self::subsidies_lelai_included, $value);
    }

    /**
     * Returns value of 'subsidies_lelai_included' property
     *
     * @return integer
     */
    public function getSubsidiesLelaiIncluded()
    {
        $value = $this->get(self::subsidies_lelai_included);
        return $value === null ? (integer)$value : $value;
    }
}
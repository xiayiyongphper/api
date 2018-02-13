<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * CouponReceiveLayout message
 */
class CouponReceiveLayout extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const button_text = 1;
    const button_image = 2;
    const banner_image = 3;
    const coupon_icon = 4;
    const coupon_title = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::button_text => array(
            'name' => 'button_text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::button_image => array(
            'name' => 'button_image',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::banner_image => array(
            'name' => 'banner_image',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::coupon_icon => array(
            'name' => 'coupon_icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::coupon_title => array(
            'name' => 'coupon_title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::button_text] = null;
        $this->values[self::button_image] = null;
        $this->values[self::banner_image] = null;
        $this->values[self::coupon_icon] = null;
        $this->values[self::coupon_title] = null;
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
     * Sets value of 'button_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setButtonText($value)
    {
        return $this->set(self::button_text, $value);
    }

    /**
     * Returns value of 'button_text' property
     *
     * @return string
     */
    public function getButtonText()
    {
        $value = $this->get(self::button_text);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'button_image' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setButtonImage($value)
    {
        return $this->set(self::button_image, $value);
    }

    /**
     * Returns value of 'button_image' property
     *
     * @return string
     */
    public function getButtonImage()
    {
        $value = $this->get(self::button_image);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'banner_image' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBannerImage($value)
    {
        return $this->set(self::banner_image, $value);
    }

    /**
     * Returns value of 'banner_image' property
     *
     * @return string
     */
    public function getBannerImage()
    {
        $value = $this->get(self::banner_image);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'coupon_icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponIcon($value)
    {
        return $this->set(self::coupon_icon, $value);
    }

    /**
     * Returns value of 'coupon_icon' property
     *
     * @return string
     */
    public function getCouponIcon()
    {
        $value = $this->get(self::coupon_icon);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'coupon_title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponTitle($value)
    {
        return $this->set(self::coupon_title, $value);
    }

    /**
     * Returns value of 'coupon_title' property
     *
     * @return string
     */
    public function getCouponTitle()
    {
        $value = $this->get(self::coupon_title);
        return $value === null ? (string)$value : $value;
    }
}
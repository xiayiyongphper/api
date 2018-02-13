<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * ConfigResponse message
 */
class ConfigResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const csh = 1;
    const ad_show_time = 2;
    const helper_url = 3;
    const ver = 4;
    const debug = 5;
    const debug_options = 6;
    const wallet_helper_url = 7;
    const js_cart = 8;
    const coupon_helper_url = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::csh => array(
            'name' => 'csh',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ad_show_time => array(
            'name' => 'ad_show_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::helper_url => array(
            'name' => 'helper_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ver => array(
            'name' => 'ver',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::debug => array(
            'default' => false,
            'name' => 'debug',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::debug_options => array(
            'name' => 'debug_options',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::wallet_helper_url => array(
            'name' => 'wallet_helper_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::js_cart => array(
            'name' => 'js_cart',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::coupon_helper_url => array(
            'name' => 'coupon_helper_url',
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
        $this->values[self::csh] = null;
        $this->values[self::ad_show_time] = null;
        $this->values[self::helper_url] = null;
        $this->values[self::ver] = null;
        $this->values[self::debug] = self::$fields[self::debug]['default'];
        $this->values[self::debug_options] = array();
        $this->values[self::wallet_helper_url] = null;
        $this->values[self::js_cart] = null;
        $this->values[self::coupon_helper_url] = null;
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
     * Sets value of 'csh' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCsh($value)
    {
        return $this->set(self::csh, $value);
    }

    /**
     * Returns value of 'csh' property
     *
     * @return string
     */
    public function getCsh()
    {
        $value = $this->get(self::csh);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ad_show_time' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAdShowTime($value)
    {
        return $this->set(self::ad_show_time, $value);
    }

    /**
     * Returns value of 'ad_show_time' property
     *
     * @return integer
     */
    public function getAdShowTime()
    {
        $value = $this->get(self::ad_show_time);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'helper_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHelperUrl($value)
    {
        return $this->set(self::helper_url, $value);
    }

    /**
     * Returns value of 'helper_url' property
     *
     * @return string
     */
    public function getHelperUrl()
    {
        $value = $this->get(self::helper_url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'ver' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVer($value)
    {
        return $this->set(self::ver, $value);
    }

    /**
     * Returns value of 'ver' property
     *
     * @return integer
     */
    public function getVer()
    {
        $value = $this->get(self::ver);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'debug' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setDebug($value)
    {
        return $this->set(self::debug, $value);
    }

    /**
     * Returns value of 'debug' property
     *
     * @return boolean
     */
    public function getDebug()
    {
        $value = $this->get(self::debug);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Appends value to 'debug_options' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendDebugOptions(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::debug_options, $value);
    }

    /**
     * Clears 'debug_options' list
     *
     * @return null
     */
    public function clearDebugOptions()
    {
        return $this->clear(self::debug_options);
    }

    /**
     * Returns 'debug_options' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getDebugOptions()
    {
        return $this->get(self::debug_options);
    }

    /**
     * Returns 'debug_options' iterator
     *
     * @return \ArrayIterator
     */
    public function getDebugOptionsIterator()
    {
        return new \ArrayIterator($this->get(self::debug_options));
    }

    /**
     * Returns element from 'debug_options' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getDebugOptionsAt($offset)
    {
        return $this->get(self::debug_options, $offset);
    }

    /**
     * Returns count of 'debug_options' list
     *
     * @return int
     */
    public function getDebugOptionsCount()
    {
        return $this->count(self::debug_options);
    }

    /**
     * Sets value of 'wallet_helper_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWalletHelperUrl($value)
    {
        return $this->set(self::wallet_helper_url, $value);
    }

    /**
     * Returns value of 'wallet_helper_url' property
     *
     * @return string
     */
    public function getWalletHelperUrl()
    {
        $value = $this->get(self::wallet_helper_url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'js_cart' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJsCart($value)
    {
        return $this->set(self::js_cart, $value);
    }

    /**
     * Returns value of 'js_cart' property
     *
     * @return string
     */
    public function getJsCart()
    {
        $value = $this->get(self::js_cart);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'coupon_helper_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCouponHelperUrl($value)
    {
        return $this->set(self::coupon_helper_url, $value);
    }

    /**
     * Returns value of 'coupon_helper_url' property
     *
     * @return string
     */
    public function getCouponHelperUrl()
    {
        $value = $this->get(self::coupon_helper_url);
        return $value === null ? (string)$value : $value;
    }
}
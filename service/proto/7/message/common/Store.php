<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Store message
 */
class Store extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const wholesaler_id = 2;
    const wholesaler_name = 3;
    const icon = 4;
    const logo = 5;
    const image = 6;
    const phone = 7;
    const address = 8;
    const description = 9;
    const area = 10;
    const delivery_time = 11;
    const min_trade_amount = 12;
    const business_license_img = 13;
    const operate_time = 14;
    const customer_service_phone = 15;
    const business_license_code = 16;
    const tax_registration_certificate_img = 17;
    const organization_code_certificate_img = 18;
    const business_category = 19;
    const rebates = 20;
    const rebates_text = 21;
    const city = 22;
    const tags = 23;
    const banner = 24;
    const delivery_text = 25;
    const marketing_tags = 26;
    const category_tags = 27;
    const compensation_service = 28;
    const promotion_message = 30;
    const coupon_receive_layout = 31;
    const homepage_config = 32;
    const promotion_message_in_tag = 33;
    const store_category = 34;
    const status = 35;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wholesaler_name => array(
            'name' => 'wholesaler_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::icon => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::logo => array(
            'name' => 'logo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::image => array(
            'name' => 'image',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::phone => array(
            'name' => 'phone',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::address => array(
            'name' => 'address',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::description => array(
            'name' => 'description',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::area => array(
            'name' => 'area',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::delivery_time => array(
            'name' => 'delivery_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::min_trade_amount => array(
            'name' => 'min_trade_amount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::business_license_img => array(
            'name' => 'business_license_img',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::operate_time => array(
            'name' => 'operate_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::customer_service_phone => array(
            'name' => 'customer_service_phone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::business_license_code => array(
            'name' => 'business_license_code',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tax_registration_certificate_img => array(
            'name' => 'tax_registration_certificate_img',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::organization_code_certificate_img => array(
            'name' => 'organization_code_certificate_img',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::business_category => array(
            'name' => 'business_category',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::rebates => array(
            'name' => 'rebates',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::rebates_text => array(
            'name' => 'rebates_text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tags => array(
            'name' => 'tags',
            'repeated' => true,
            'type' => '\service\message\common\Tag'
        ),
        self::banner => array(
            'name' => 'banner',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::delivery_text => array(
            'name' => 'delivery_text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::marketing_tags => array(
            'name' => 'marketing_tags',
            'repeated' => true,
            'type' => '\service\message\common\Tag'
        ),
        self::category_tags => array(
            'name' => 'category_tags',
            'repeated' => true,
            'type' => '\service\message\common\Tag'
        ),
        self::compensation_service => array(
            'name' => 'compensation_service',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::promotion_message => array(
            'name' => 'promotion_message',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::coupon_receive_layout => array(
            'name' => 'coupon_receive_layout',
            'required' => false,
            'type' => '\service\message\common\CouponReceiveLayout'
        ),
        self::homepage_config => array(
            'name' => 'homepage_config',
            'required' => false,
            'type' => '\service\message\merchant\HomePageConfig'
        ),
        self::promotion_message_in_tag => array(
            'name' => 'promotion_message_in_tag',
            'repeated' => true,
            'type' => '\service\message\common\Tag'
        ),
        self::store_category => array(
            'name' => 'store_category',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::status => array(
            'name' => 'status',
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
        $this->values[self::wholesaler_id] = null;
        $this->values[self::wholesaler_name] = null;
        $this->values[self::icon] = null;
        $this->values[self::logo] = null;
        $this->values[self::image] = array();
        $this->values[self::phone] = array();
        $this->values[self::address] = null;
        $this->values[self::description] = null;
        $this->values[self::area] = null;
        $this->values[self::delivery_time] = null;
        $this->values[self::min_trade_amount] = null;
        $this->values[self::business_license_img] = null;
        $this->values[self::operate_time] = null;
        $this->values[self::customer_service_phone] = null;
        $this->values[self::business_license_code] = null;
        $this->values[self::tax_registration_certificate_img] = null;
        $this->values[self::organization_code_certificate_img] = null;
        $this->values[self::business_category] = null;
        $this->values[self::rebates] = null;
        $this->values[self::rebates_text] = null;
        $this->values[self::city] = null;
        $this->values[self::tags] = array();
        $this->values[self::banner] = array();
        $this->values[self::delivery_text] = null;
        $this->values[self::marketing_tags] = array();
        $this->values[self::category_tags] = array();
        $this->values[self::compensation_service] = null;
        $this->values[self::promotion_message] = array();
        $this->values[self::coupon_receive_layout] = null;
        $this->values[self::homepage_config] = null;
        $this->values[self::promotion_message_in_tag] = array();
        $this->values[self::store_category] = null;
        $this->values[self::status] = null;
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
     * Sets value of 'wholesaler_id' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getWholesalerId()
    {
        $value = $this->get(self::wholesaler_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'wholesaler_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWholesalerName($value)
    {
        return $this->set(self::wholesaler_name, $value);
    }

    /**
     * Returns value of 'wholesaler_name' property
     *
     * @return string
     */
    public function getWholesalerName()
    {
        $value = $this->get(self::wholesaler_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'icon' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIcon($value)
    {
        return $this->set(self::icon, $value);
    }

    /**
     * Returns value of 'icon' property
     *
     * @return string
     */
    public function getIcon()
    {
        $value = $this->get(self::icon);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'logo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLogo($value)
    {
        return $this->set(self::logo, $value);
    }

    /**
     * Returns value of 'logo' property
     *
     * @return string
     */
    public function getLogo()
    {
        $value = $this->get(self::logo);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'image' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendImage($value)
    {
        return $this->append(self::image, $value);
    }

    /**
     * Clears 'image' list
     *
     * @return null
     */
    public function clearImage()
    {
        return $this->clear(self::image);
    }

    /**
     * Returns 'image' list
     *
     * @return string[]
     */
    public function getImage()
    {
        return $this->get(self::image);
    }

    /**
     * Returns 'image' iterator
     *
     * @return \ArrayIterator
     */
    public function getImageIterator()
    {
        return new \ArrayIterator($this->get(self::image));
    }

    /**
     * Returns element from 'image' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getImageAt($offset)
    {
        return $this->get(self::image, $offset);
    }

    /**
     * Returns count of 'image' list
     *
     * @return int
     */
    public function getImageCount()
    {
        return $this->count(self::image);
    }

    /**
     * Appends value to 'phone' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPhone($value)
    {
        return $this->append(self::phone, $value);
    }

    /**
     * Clears 'phone' list
     *
     * @return null
     */
    public function clearPhone()
    {
        return $this->clear(self::phone);
    }

    /**
     * Returns 'phone' list
     *
     * @return string[]
     */
    public function getPhone()
    {
        return $this->get(self::phone);
    }

    /**
     * Returns 'phone' iterator
     *
     * @return \ArrayIterator
     */
    public function getPhoneIterator()
    {
        return new \ArrayIterator($this->get(self::phone));
    }

    /**
     * Returns element from 'phone' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPhoneAt($offset)
    {
        return $this->get(self::phone, $offset);
    }

    /**
     * Returns count of 'phone' list
     *
     * @return int
     */
    public function getPhoneCount()
    {
        return $this->count(self::phone);
    }

    /**
     * Sets value of 'address' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAddress($value)
    {
        return $this->set(self::address, $value);
    }

    /**
     * Returns value of 'address' property
     *
     * @return string
     */
    public function getAddress()
    {
        $value = $this->get(self::address);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescription($value)
    {
        return $this->set(self::description, $value);
    }

    /**
     * Returns value of 'description' property
     *
     * @return string
     */
    public function getDescription()
    {
        $value = $this->get(self::description);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'area' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setArea($value)
    {
        return $this->set(self::area, $value);
    }

    /**
     * Returns value of 'area' property
     *
     * @return string
     */
    public function getArea()
    {
        $value = $this->get(self::area);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'delivery_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeliveryTime($value)
    {
        return $this->set(self::delivery_time, $value);
    }

    /**
     * Returns value of 'delivery_time' property
     *
     * @return string
     */
    public function getDeliveryTime()
    {
        $value = $this->get(self::delivery_time);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'min_trade_amount' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMinTradeAmount($value)
    {
        return $this->set(self::min_trade_amount, $value);
    }

    /**
     * Returns value of 'min_trade_amount' property
     *
     * @return string
     */
    public function getMinTradeAmount()
    {
        $value = $this->get(self::min_trade_amount);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'business_license_img' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBusinessLicenseImg($value)
    {
        return $this->set(self::business_license_img, $value);
    }

    /**
     * Returns value of 'business_license_img' property
     *
     * @return string
     */
    public function getBusinessLicenseImg()
    {
        $value = $this->get(self::business_license_img);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'operate_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOperateTime($value)
    {
        return $this->set(self::operate_time, $value);
    }

    /**
     * Returns value of 'operate_time' property
     *
     * @return string
     */
    public function getOperateTime()
    {
        $value = $this->get(self::operate_time);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'customer_service_phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerServicePhone($value)
    {
        return $this->set(self::customer_service_phone, $value);
    }

    /**
     * Returns value of 'customer_service_phone' property
     *
     * @return string
     */
    public function getCustomerServicePhone()
    {
        $value = $this->get(self::customer_service_phone);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'business_license_code' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBusinessLicenseCode($value)
    {
        return $this->set(self::business_license_code, $value);
    }

    /**
     * Returns value of 'business_license_code' property
     *
     * @return string
     */
    public function getBusinessLicenseCode()
    {
        $value = $this->get(self::business_license_code);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'tax_registration_certificate_img' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTaxRegistrationCertificateImg($value)
    {
        return $this->set(self::tax_registration_certificate_img, $value);
    }

    /**
     * Returns value of 'tax_registration_certificate_img' property
     *
     * @return string
     */
    public function getTaxRegistrationCertificateImg()
    {
        $value = $this->get(self::tax_registration_certificate_img);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'organization_code_certificate_img' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrganizationCodeCertificateImg($value)
    {
        return $this->set(self::organization_code_certificate_img, $value);
    }

    /**
     * Returns value of 'organization_code_certificate_img' property
     *
     * @return string
     */
    public function getOrganizationCodeCertificateImg()
    {
        $value = $this->get(self::organization_code_certificate_img);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'business_category' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBusinessCategory($value)
    {
        return $this->set(self::business_category, $value);
    }

    /**
     * Returns value of 'business_category' property
     *
     * @return string
     */
    public function getBusinessCategory()
    {
        $value = $this->get(self::business_category);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'rebates' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setRebates($value)
    {
        return $this->set(self::rebates, $value);
    }

    /**
     * Returns value of 'rebates' property
     *
     * @return double
     */
    public function getRebates()
    {
        $value = $this->get(self::rebates);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'rebates_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRebatesText($value)
    {
        return $this->set(self::rebates_text, $value);
    }

    /**
     * Returns value of 'rebates_text' property
     *
     * @return string
     */
    public function getRebatesText()
    {
        $value = $this->get(self::rebates_text);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::city, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::city);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'tags' list
     *
     * @param \service\message\common\Tag $value Value to append
     *
     * @return null
     */
    public function appendTags(\service\message\common\Tag $value)
    {
        return $this->append(self::tags, $value);
    }

    /**
     * Clears 'tags' list
     *
     * @return null
     */
    public function clearTags()
    {
        return $this->clear(self::tags);
    }

    /**
     * Returns 'tags' list
     *
     * @return \service\message\common\Tag[]
     */
    public function getTags()
    {
        return $this->get(self::tags);
    }

    /**
     * Returns 'tags' iterator
     *
     * @return \ArrayIterator
     */
    public function getTagsIterator()
    {
        return new \ArrayIterator($this->get(self::tags));
    }

    /**
     * Returns element from 'tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Tag
     */
    public function getTagsAt($offset)
    {
        return $this->get(self::tags, $offset);
    }

    /**
     * Returns count of 'tags' list
     *
     * @return int
     */
    public function getTagsCount()
    {
        return $this->count(self::tags);
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
     * Sets value of 'delivery_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeliveryText($value)
    {
        return $this->set(self::delivery_text, $value);
    }

    /**
     * Returns value of 'delivery_text' property
     *
     * @return string
     */
    public function getDeliveryText()
    {
        $value = $this->get(self::delivery_text);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'marketing_tags' list
     *
     * @param \service\message\common\Tag $value Value to append
     *
     * @return null
     */
    public function appendMarketingTags(\service\message\common\Tag $value)
    {
        return $this->append(self::marketing_tags, $value);
    }

    /**
     * Clears 'marketing_tags' list
     *
     * @return null
     */
    public function clearMarketingTags()
    {
        return $this->clear(self::marketing_tags);
    }

    /**
     * Returns 'marketing_tags' list
     *
     * @return \service\message\common\Tag[]
     */
    public function getMarketingTags()
    {
        return $this->get(self::marketing_tags);
    }

    /**
     * Returns 'marketing_tags' iterator
     *
     * @return \ArrayIterator
     */
    public function getMarketingTagsIterator()
    {
        return new \ArrayIterator($this->get(self::marketing_tags));
    }

    /**
     * Returns element from 'marketing_tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Tag
     */
    public function getMarketingTagsAt($offset)
    {
        return $this->get(self::marketing_tags, $offset);
    }

    /**
     * Returns count of 'marketing_tags' list
     *
     * @return int
     */
    public function getMarketingTagsCount()
    {
        return $this->count(self::marketing_tags);
    }

    /**
     * Appends value to 'category_tags' list
     *
     * @param \service\message\common\Tag $value Value to append
     *
     * @return null
     */
    public function appendCategoryTags(\service\message\common\Tag $value)
    {
        return $this->append(self::category_tags, $value);
    }

    /**
     * Clears 'category_tags' list
     *
     * @return null
     */
    public function clearCategoryTags()
    {
        return $this->clear(self::category_tags);
    }

    /**
     * Returns 'category_tags' list
     *
     * @return \service\message\common\Tag[]
     */
    public function getCategoryTags()
    {
        return $this->get(self::category_tags);
    }

    /**
     * Returns 'category_tags' iterator
     *
     * @return \ArrayIterator
     */
    public function getCategoryTagsIterator()
    {
        return new \ArrayIterator($this->get(self::category_tags));
    }

    /**
     * Returns element from 'category_tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Tag
     */
    public function getCategoryTagsAt($offset)
    {
        return $this->get(self::category_tags, $offset);
    }

    /**
     * Returns count of 'category_tags' list
     *
     * @return int
     */
    public function getCategoryTagsCount()
    {
        return $this->count(self::category_tags);
    }

    /**
     * Sets value of 'compensation_service' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCompensationService($value)
    {
        return $this->set(self::compensation_service, $value);
    }

    /**
     * Returns value of 'compensation_service' property
     *
     * @return integer
     */
    public function getCompensationService()
    {
        $value = $this->get(self::compensation_service);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'promotion_message' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPromotionMessage($value)
    {
        return $this->append(self::promotion_message, $value);
    }

    /**
     * Clears 'promotion_message' list
     *
     * @return null
     */
    public function clearPromotionMessage()
    {
        return $this->clear(self::promotion_message);
    }

    /**
     * Returns 'promotion_message' list
     *
     * @return string[]
     */
    public function getPromotionMessage()
    {
        return $this->get(self::promotion_message);
    }

    /**
     * Returns 'promotion_message' iterator
     *
     * @return \ArrayIterator
     */
    public function getPromotionMessageIterator()
    {
        return new \ArrayIterator($this->get(self::promotion_message));
    }

    /**
     * Returns element from 'promotion_message' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPromotionMessageAt($offset)
    {
        return $this->get(self::promotion_message, $offset);
    }

    /**
     * Returns count of 'promotion_message' list
     *
     * @return int
     */
    public function getPromotionMessageCount()
    {
        return $this->count(self::promotion_message);
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

    /**
     * Sets value of 'homepage_config' property
     *
     * @param \service\message\merchant\HomePageConfig $value Property value
     *
     * @return null
     */
    public function setHomepageConfig(\service\message\merchant\HomePageConfig $value=null)
    {
        return $this->set(self::homepage_config, $value);
    }

    /**
     * Returns value of 'homepage_config' property
     *
     * @return \service\message\merchant\HomePageConfig
     */
    public function getHomepageConfig()
    {
        return $this->get(self::homepage_config);
    }

    /**
     * Appends value to 'promotion_message_in_tag' list
     *
     * @param \service\message\common\Tag $value Value to append
     *
     * @return null
     */
    public function appendPromotionMessageInTag(\service\message\common\Tag $value)
    {
        return $this->append(self::promotion_message_in_tag, $value);
    }

    /**
     * Clears 'promotion_message_in_tag' list
     *
     * @return null
     */
    public function clearPromotionMessageInTag()
    {
        return $this->clear(self::promotion_message_in_tag);
    }

    /**
     * Returns 'promotion_message_in_tag' list
     *
     * @return \service\message\common\Tag[]
     */
    public function getPromotionMessageInTag()
    {
        return $this->get(self::promotion_message_in_tag);
    }

    /**
     * Returns 'promotion_message_in_tag' iterator
     *
     * @return \ArrayIterator
     */
    public function getPromotionMessageInTagIterator()
    {
        return new \ArrayIterator($this->get(self::promotion_message_in_tag));
    }

    /**
     * Returns element from 'promotion_message_in_tag' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Tag
     */
    public function getPromotionMessageInTagAt($offset)
    {
        return $this->get(self::promotion_message_in_tag, $offset);
    }

    /**
     * Returns count of 'promotion_message_in_tag' list
     *
     * @return int
     */
    public function getPromotionMessageInTagCount()
    {
        return $this->count(self::promotion_message_in_tag);
    }

    /**
     * Sets value of 'store_category' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStoreCategory($value)
    {
        return $this->set(self::store_category, $value);
    }

    /**
     * Returns value of 'store_category' property
     *
     * @return string
     */
    public function getStoreCategory()
    {
        $value = $this->get(self::store_category);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::status, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::status);
        return $value === null ? (integer)$value : $value;
    }
}
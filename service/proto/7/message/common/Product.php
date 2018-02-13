<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Product message
 */
class Product extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const product_id = 1;
    const name = 2;
    const url = 3;
    const image = 4;
    const price = 5;
    const original_price = 6;
    const discount = 7;
    const sold = 8;
    const qty = 9;
    const specification = 10;
    const wholesaler_id = 11;
    const wholesaler_name = 12;
    const wholesaler_url = 13;
    const num = 14;
    const barcode = 15;
    const first_category_id = 16;
    const second_category_id = 17;
    const third_category_id = 18;
    const special_price = 19;
    const special_from_date = 20;
    const special_to_date = 21;
    const sold_qty = 22;
    const real_sold_qty = 23;
    const gallery = 24;
    const brand = 25;
    const export = 26;
    const origin = 27;
    const package_num = 28;
    const package_spe = 29;
    const package = 30;
    const shelf_life = 31;
    const desc = 32;
    const sort_weights = 33;
    const shelf_time = 34;
    const created_at = 35;
    const updated_at = 36;
    const status = 37;
    const state = 38;
    const recommend_list = 39;
    const parameters = 40;
    const promotion_text_from = 41;
    const promotion_text_to = 42;
    const promotion_text = 43;
    const product_description = 44;
    const minimum_order = 45;
    const rebates = 46;
    const rebates_lelai = 47;
    const rebates_wholesaler = 48;
    const rebates_all = 49;
    const tags = 50;
    const security_info = 51;
    const is_calculate_lelai_rebates = 52;
    const commission = 53;
    const lelai_rebates = 54;
    const is_collected = 55;
    const restrict_daily = 56;
    const purchased_qty = 57;
    const subsidies_wholesaler = 58;
    const subsidies_lelai = 59;
    const frequency = 60;
    const rule_id = 61;
    const coupon_receive_layout = 62;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::product_id => array(
            'name' => 'product_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::url => array(
            'name' => 'url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::image => array(
            'name' => 'image',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::price => array(
            'name' => 'price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::original_price => array(
            'name' => 'original_price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::discount => array(
            'name' => 'discount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::sold => array(
            'name' => 'sold',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::qty => array(
            'name' => 'qty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::specification => array(
            'name' => 'specification',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::wholesaler_name => array(
            'name' => 'wholesaler_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_url => array(
            'name' => 'wholesaler_url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::num => array(
            'name' => 'num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::barcode => array(
            'name' => 'barcode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::first_category_id => array(
            'name' => 'first_category_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::second_category_id => array(
            'name' => 'second_category_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::third_category_id => array(
            'name' => 'third_category_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::special_price => array(
            'name' => 'special_price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::special_from_date => array(
            'name' => 'special_from_date',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::special_to_date => array(
            'name' => 'special_to_date',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sold_qty => array(
            'name' => 'sold_qty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::real_sold_qty => array(
            'name' => 'real_sold_qty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::gallery => array(
            'name' => 'gallery',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::brand => array(
            'name' => 'brand',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::export => array(
            'name' => 'export',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::origin => array(
            'name' => 'origin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::package_num => array(
            'name' => 'package_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::package_spe => array(
            'name' => 'package_spe',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::package => array(
            'name' => 'package',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::shelf_life => array(
            'name' => 'shelf_life',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::desc => array(
            'name' => 'desc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sort_weights => array(
            'name' => 'sort_weights',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::shelf_time => array(
            'name' => 'shelf_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::created_at => array(
            'name' => 'created_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::updated_at => array(
            'name' => 'updated_at',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::status => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::state => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::recommend_list => array(
            'name' => 'recommend_list',
            'repeated' => true,
            'type' => '\service\message\common\Product'
        ),
        self::parameters => array(
            'name' => 'parameters',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::promotion_text_from => array(
            'name' => 'promotion_text_from',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::promotion_text_to => array(
            'name' => 'promotion_text_to',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::promotion_text => array(
            'name' => 'promotion_text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::product_description => array(
            'name' => 'product_description',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::minimum_order => array(
            'name' => 'minimum_order',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::rebates => array(
            'name' => 'rebates',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::rebates_lelai => array(
            'name' => 'rebates_lelai',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::rebates_wholesaler => array(
            'name' => 'rebates_wholesaler',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::rebates_all => array(
            'name' => 'rebates_all',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tags => array(
            'name' => 'tags',
            'repeated' => true,
            'type' => '\service\message\common\Tag'
        ),
        self::security_info => array(
            'name' => 'security_info',
            'repeated' => true,
            'type' => '\service\message\common\SecurityInfo'
        ),
        self::is_calculate_lelai_rebates => array(
            'name' => 'is_calculate_lelai_rebates',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::commission => array(
            'name' => 'commission',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::lelai_rebates => array(
            'name' => 'lelai_rebates',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::is_collected => array(
            'default' => false,
            'name' => 'is_collected',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::restrict_daily => array(
            'name' => 'restrict_daily',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::purchased_qty => array(
            'name' => 'purchased_qty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::subsidies_wholesaler => array(
            'name' => 'subsidies_wholesaler',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::subsidies_lelai => array(
            'name' => 'subsidies_lelai',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::frequency => array(
            'default' => 0,
            'name' => 'frequency',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::rule_id => array(
            'default' => 0,
            'name' => 'rule_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::product_id] = null;
        $this->values[self::name] = null;
        $this->values[self::url] = null;
        $this->values[self::image] = null;
        $this->values[self::price] = null;
        $this->values[self::original_price] = null;
        $this->values[self::discount] = null;
        $this->values[self::sold] = null;
        $this->values[self::qty] = null;
        $this->values[self::specification] = null;
        $this->values[self::wholesaler_id] = null;
        $this->values[self::wholesaler_name] = null;
        $this->values[self::wholesaler_url] = null;
        $this->values[self::num] = null;
        $this->values[self::barcode] = null;
        $this->values[self::first_category_id] = null;
        $this->values[self::second_category_id] = null;
        $this->values[self::third_category_id] = null;
        $this->values[self::special_price] = null;
        $this->values[self::special_from_date] = null;
        $this->values[self::special_to_date] = null;
        $this->values[self::sold_qty] = null;
        $this->values[self::real_sold_qty] = null;
        $this->values[self::gallery] = array();
        $this->values[self::brand] = null;
        $this->values[self::export] = null;
        $this->values[self::origin] = null;
        $this->values[self::package_num] = null;
        $this->values[self::package_spe] = null;
        $this->values[self::package] = null;
        $this->values[self::shelf_life] = null;
        $this->values[self::desc] = null;
        $this->values[self::sort_weights] = null;
        $this->values[self::shelf_time] = null;
        $this->values[self::created_at] = null;
        $this->values[self::updated_at] = null;
        $this->values[self::status] = null;
        $this->values[self::state] = null;
        $this->values[self::recommend_list] = array();
        $this->values[self::parameters] = array();
        $this->values[self::promotion_text_from] = null;
        $this->values[self::promotion_text_to] = null;
        $this->values[self::promotion_text] = null;
        $this->values[self::product_description] = null;
        $this->values[self::minimum_order] = null;
        $this->values[self::rebates] = null;
        $this->values[self::rebates_lelai] = null;
        $this->values[self::rebates_wholesaler] = null;
        $this->values[self::rebates_all] = null;
        $this->values[self::tags] = array();
        $this->values[self::security_info] = array();
        $this->values[self::is_calculate_lelai_rebates] = null;
        $this->values[self::commission] = null;
        $this->values[self::lelai_rebates] = null;
        $this->values[self::is_collected] = self::$fields[self::is_collected]['default'];
        $this->values[self::restrict_daily] = null;
        $this->values[self::purchased_qty] = null;
        $this->values[self::subsidies_wholesaler] = null;
        $this->values[self::subsidies_lelai] = null;
        $this->values[self::frequency] = self::$fields[self::frequency]['default'];
        $this->values[self::rule_id] = self::$fields[self::rule_id]['default'];
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
     * Sets value of 'product_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProductId($value)
    {
        return $this->set(self::product_id, $value);
    }

    /**
     * Returns value of 'product_id' property
     *
     * @return integer
     */
    public function getProductId()
    {
        $value = $this->get(self::product_id);
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
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::url, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'image' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImage($value)
    {
        return $this->set(self::image, $value);
    }

    /**
     * Returns value of 'image' property
     *
     * @return string
     */
    public function getImage()
    {
        $value = $this->get(self::image);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'price' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setPrice($value)
    {
        return $this->set(self::price, $value);
    }

    /**
     * Returns value of 'price' property
     *
     * @return double
     */
    public function getPrice()
    {
        $value = $this->get(self::price);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'original_price' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setOriginalPrice($value)
    {
        return $this->set(self::original_price, $value);
    }

    /**
     * Returns value of 'original_price' property
     *
     * @return double
     */
    public function getOriginalPrice()
    {
        $value = $this->get(self::original_price);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'discount' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setDiscount($value)
    {
        return $this->set(self::discount, $value);
    }

    /**
     * Returns value of 'discount' property
     *
     * @return double
     */
    public function getDiscount()
    {
        $value = $this->get(self::discount);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'sold' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSold($value)
    {
        return $this->set(self::sold, $value);
    }

    /**
     * Returns value of 'sold' property
     *
     * @return integer
     */
    public function getSold()
    {
        $value = $this->get(self::sold);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'qty' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setQty($value)
    {
        return $this->set(self::qty, $value);
    }

    /**
     * Returns value of 'qty' property
     *
     * @return integer
     */
    public function getQty()
    {
        $value = $this->get(self::qty);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'specification' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpecification($value)
    {
        return $this->set(self::specification, $value);
    }

    /**
     * Returns value of 'specification' property
     *
     * @return string
     */
    public function getSpecification()
    {
        $value = $this->get(self::specification);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'wholesaler_url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWholesalerUrl($value)
    {
        return $this->set(self::wholesaler_url, $value);
    }

    /**
     * Returns value of 'wholesaler_url' property
     *
     * @return string
     */
    public function getWholesalerUrl()
    {
        $value = $this->get(self::wholesaler_url);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNum($value)
    {
        return $this->set(self::num, $value);
    }

    /**
     * Returns value of 'num' property
     *
     * @return integer
     */
    public function getNum()
    {
        $value = $this->get(self::num);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'barcode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBarcode($value)
    {
        return $this->set(self::barcode, $value);
    }

    /**
     * Returns value of 'barcode' property
     *
     * @return string
     */
    public function getBarcode()
    {
        $value = $this->get(self::barcode);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'first_category_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFirstCategoryId($value)
    {
        return $this->set(self::first_category_id, $value);
    }

    /**
     * Returns value of 'first_category_id' property
     *
     * @return integer
     */
    public function getFirstCategoryId()
    {
        $value = $this->get(self::first_category_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'second_category_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSecondCategoryId($value)
    {
        return $this->set(self::second_category_id, $value);
    }

    /**
     * Returns value of 'second_category_id' property
     *
     * @return integer
     */
    public function getSecondCategoryId()
    {
        $value = $this->get(self::second_category_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'third_category_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThirdCategoryId($value)
    {
        return $this->set(self::third_category_id, $value);
    }

    /**
     * Returns value of 'third_category_id' property
     *
     * @return integer
     */
    public function getThirdCategoryId()
    {
        $value = $this->get(self::third_category_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'special_price' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setSpecialPrice($value)
    {
        return $this->set(self::special_price, $value);
    }

    /**
     * Returns value of 'special_price' property
     *
     * @return double
     */
    public function getSpecialPrice()
    {
        $value = $this->get(self::special_price);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'special_from_date' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpecialFromDate($value)
    {
        return $this->set(self::special_from_date, $value);
    }

    /**
     * Returns value of 'special_from_date' property
     *
     * @return string
     */
    public function getSpecialFromDate()
    {
        $value = $this->get(self::special_from_date);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'special_to_date' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpecialToDate($value)
    {
        return $this->set(self::special_to_date, $value);
    }

    /**
     * Returns value of 'special_to_date' property
     *
     * @return string
     */
    public function getSpecialToDate()
    {
        $value = $this->get(self::special_to_date);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'sold_qty' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSoldQty($value)
    {
        return $this->set(self::sold_qty, $value);
    }

    /**
     * Returns value of 'sold_qty' property
     *
     * @return integer
     */
    public function getSoldQty()
    {
        $value = $this->get(self::sold_qty);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'real_sold_qty' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRealSoldQty($value)
    {
        return $this->set(self::real_sold_qty, $value);
    }

    /**
     * Returns value of 'real_sold_qty' property
     *
     * @return integer
     */
    public function getRealSoldQty()
    {
        $value = $this->get(self::real_sold_qty);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'gallery' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendGallery($value)
    {
        return $this->append(self::gallery, $value);
    }

    /**
     * Clears 'gallery' list
     *
     * @return null
     */
    public function clearGallery()
    {
        return $this->clear(self::gallery);
    }

    /**
     * Returns 'gallery' list
     *
     * @return string[]
     */
    public function getGallery()
    {
        return $this->get(self::gallery);
    }

    /**
     * Returns 'gallery' iterator
     *
     * @return \ArrayIterator
     */
    public function getGalleryIterator()
    {
        return new \ArrayIterator($this->get(self::gallery));
    }

    /**
     * Returns element from 'gallery' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getGalleryAt($offset)
    {
        return $this->get(self::gallery, $offset);
    }

    /**
     * Returns count of 'gallery' list
     *
     * @return int
     */
    public function getGalleryCount()
    {
        return $this->count(self::gallery);
    }

    /**
     * Sets value of 'brand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrand($value)
    {
        return $this->set(self::brand, $value);
    }

    /**
     * Returns value of 'brand' property
     *
     * @return string
     */
    public function getBrand()
    {
        $value = $this->get(self::brand);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'export' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExport($value)
    {
        return $this->set(self::export, $value);
    }

    /**
     * Returns value of 'export' property
     *
     * @return string
     */
    public function getExport()
    {
        $value = $this->get(self::export);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'origin' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrigin($value)
    {
        return $this->set(self::origin, $value);
    }

    /**
     * Returns value of 'origin' property
     *
     * @return string
     */
    public function getOrigin()
    {
        $value = $this->get(self::origin);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'package_num' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPackageNum($value)
    {
        return $this->set(self::package_num, $value);
    }

    /**
     * Returns value of 'package_num' property
     *
     * @return string
     */
    public function getPackageNum()
    {
        $value = $this->get(self::package_num);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'package_spe' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPackageSpe($value)
    {
        return $this->set(self::package_spe, $value);
    }

    /**
     * Returns value of 'package_spe' property
     *
     * @return string
     */
    public function getPackageSpe()
    {
        $value = $this->get(self::package_spe);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'package' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPackage($value)
    {
        return $this->set(self::package, $value);
    }

    /**
     * Returns value of 'package' property
     *
     * @return string
     */
    public function getPackage()
    {
        $value = $this->get(self::package);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'shelf_life' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShelfLife($value)
    {
        return $this->set(self::shelf_life, $value);
    }

    /**
     * Returns value of 'shelf_life' property
     *
     * @return string
     */
    public function getShelfLife()
    {
        $value = $this->get(self::shelf_life);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'desc' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDesc($value)
    {
        return $this->set(self::desc, $value);
    }

    /**
     * Returns value of 'desc' property
     *
     * @return string
     */
    public function getDesc()
    {
        $value = $this->get(self::desc);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'sort_weights' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSortWeights($value)
    {
        return $this->set(self::sort_weights, $value);
    }

    /**
     * Returns value of 'sort_weights' property
     *
     * @return integer
     */
    public function getSortWeights()
    {
        $value = $this->get(self::sort_weights);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'shelf_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShelfTime($value)
    {
        return $this->set(self::shelf_time, $value);
    }

    /**
     * Returns value of 'shelf_time' property
     *
     * @return string
     */
    public function getShelfTime()
    {
        $value = $this->get(self::shelf_time);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'created_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCreatedAt($value)
    {
        return $this->set(self::created_at, $value);
    }

    /**
     * Returns value of 'created_at' property
     *
     * @return string
     */
    public function getCreatedAt()
    {
        $value = $this->get(self::created_at);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'updated_at' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUpdatedAt($value)
    {
        return $this->set(self::updated_at, $value);
    }

    /**
     * Returns value of 'updated_at' property
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        $value = $this->get(self::updated_at);
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

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::state, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::state);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'recommend_list' list
     *
     * @param \service\message\common\Product $value Value to append
     *
     * @return null
     */
    public function appendRecommendList(\service\message\common\Product $value)
    {
        return $this->append(self::recommend_list, $value);
    }

    /**
     * Clears 'recommend_list' list
     *
     * @return null
     */
    public function clearRecommendList()
    {
        return $this->clear(self::recommend_list);
    }

    /**
     * Returns 'recommend_list' list
     *
     * @return \service\message\common\Product[]
     */
    public function getRecommendList()
    {
        return $this->get(self::recommend_list);
    }

    /**
     * Returns 'recommend_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getRecommendListIterator()
    {
        return new \ArrayIterator($this->get(self::recommend_list));
    }

    /**
     * Returns element from 'recommend_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Product
     */
    public function getRecommendListAt($offset)
    {
        return $this->get(self::recommend_list, $offset);
    }

    /**
     * Returns count of 'recommend_list' list
     *
     * @return int
     */
    public function getRecommendListCount()
    {
        return $this->count(self::recommend_list);
    }

    /**
     * Appends value to 'parameters' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendParameters(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::parameters, $value);
    }

    /**
     * Clears 'parameters' list
     *
     * @return null
     */
    public function clearParameters()
    {
        return $this->clear(self::parameters);
    }

    /**
     * Returns 'parameters' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getParameters()
    {
        return $this->get(self::parameters);
    }

    /**
     * Returns 'parameters' iterator
     *
     * @return \ArrayIterator
     */
    public function getParametersIterator()
    {
        return new \ArrayIterator($this->get(self::parameters));
    }

    /**
     * Returns element from 'parameters' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getParametersAt($offset)
    {
        return $this->get(self::parameters, $offset);
    }

    /**
     * Returns count of 'parameters' list
     *
     * @return int
     */
    public function getParametersCount()
    {
        return $this->count(self::parameters);
    }

    /**
     * Sets value of 'promotion_text_from' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPromotionTextFrom($value)
    {
        return $this->set(self::promotion_text_from, $value);
    }

    /**
     * Returns value of 'promotion_text_from' property
     *
     * @return string
     */
    public function getPromotionTextFrom()
    {
        $value = $this->get(self::promotion_text_from);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'promotion_text_to' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPromotionTextTo($value)
    {
        return $this->set(self::promotion_text_to, $value);
    }

    /**
     * Returns value of 'promotion_text_to' property
     *
     * @return string
     */
    public function getPromotionTextTo()
    {
        $value = $this->get(self::promotion_text_to);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'promotion_text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPromotionText($value)
    {
        return $this->set(self::promotion_text, $value);
    }

    /**
     * Returns value of 'promotion_text' property
     *
     * @return string
     */
    public function getPromotionText()
    {
        $value = $this->get(self::promotion_text);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'product_description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProductDescription($value)
    {
        return $this->set(self::product_description, $value);
    }

    /**
     * Returns value of 'product_description' property
     *
     * @return string
     */
    public function getProductDescription()
    {
        $value = $this->get(self::product_description);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'minimum_order' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMinimumOrder($value)
    {
        return $this->set(self::minimum_order, $value);
    }

    /**
     * Returns value of 'minimum_order' property
     *
     * @return integer
     */
    public function getMinimumOrder()
    {
        $value = $this->get(self::minimum_order);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'rebates' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getRebates()
    {
        $value = $this->get(self::rebates);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'rebates_lelai' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRebatesLelai($value)
    {
        return $this->set(self::rebates_lelai, $value);
    }

    /**
     * Returns value of 'rebates_lelai' property
     *
     * @return string
     */
    public function getRebatesLelai()
    {
        $value = $this->get(self::rebates_lelai);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'rebates_wholesaler' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRebatesWholesaler($value)
    {
        return $this->set(self::rebates_wholesaler, $value);
    }

    /**
     * Returns value of 'rebates_wholesaler' property
     *
     * @return string
     */
    public function getRebatesWholesaler()
    {
        $value = $this->get(self::rebates_wholesaler);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'rebates_all' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRebatesAll($value)
    {
        return $this->set(self::rebates_all, $value);
    }

    /**
     * Returns value of 'rebates_all' property
     *
     * @return string
     */
    public function getRebatesAll()
    {
        $value = $this->get(self::rebates_all);
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
     * Appends value to 'security_info' list
     *
     * @param \service\message\common\SecurityInfo $value Value to append
     *
     * @return null
     */
    public function appendSecurityInfo(\service\message\common\SecurityInfo $value)
    {
        return $this->append(self::security_info, $value);
    }

    /**
     * Clears 'security_info' list
     *
     * @return null
     */
    public function clearSecurityInfo()
    {
        return $this->clear(self::security_info);
    }

    /**
     * Returns 'security_info' list
     *
     * @return \service\message\common\SecurityInfo[]
     */
    public function getSecurityInfo()
    {
        return $this->get(self::security_info);
    }

    /**
     * Returns 'security_info' iterator
     *
     * @return \ArrayIterator
     */
    public function getSecurityInfoIterator()
    {
        return new \ArrayIterator($this->get(self::security_info));
    }

    /**
     * Returns element from 'security_info' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\SecurityInfo
     */
    public function getSecurityInfoAt($offset)
    {
        return $this->get(self::security_info, $offset);
    }

    /**
     * Returns count of 'security_info' list
     *
     * @return int
     */
    public function getSecurityInfoCount()
    {
        return $this->count(self::security_info);
    }

    /**
     * Sets value of 'is_calculate_lelai_rebates' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsCalculateLelaiRebates($value)
    {
        return $this->set(self::is_calculate_lelai_rebates, $value);
    }

    /**
     * Returns value of 'is_calculate_lelai_rebates' property
     *
     * @return integer
     */
    public function getIsCalculateLelaiRebates()
    {
        $value = $this->get(self::is_calculate_lelai_rebates);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'commission' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCommission($value)
    {
        return $this->set(self::commission, $value);
    }

    /**
     * Returns value of 'commission' property
     *
     * @return string
     */
    public function getCommission()
    {
        $value = $this->get(self::commission);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'lelai_rebates' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLelaiRebates($value)
    {
        return $this->set(self::lelai_rebates, $value);
    }

    /**
     * Returns value of 'lelai_rebates' property
     *
     * @return string
     */
    public function getLelaiRebates()
    {
        $value = $this->get(self::lelai_rebates);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'is_collected' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setIsCollected($value)
    {
        return $this->set(self::is_collected, $value);
    }

    /**
     * Returns value of 'is_collected' property
     *
     * @return boolean
     */
    public function getIsCollected()
    {
        $value = $this->get(self::is_collected);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Sets value of 'restrict_daily' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRestrictDaily($value)
    {
        return $this->set(self::restrict_daily, $value);
    }

    /**
     * Returns value of 'restrict_daily' property
     *
     * @return integer
     */
    public function getRestrictDaily()
    {
        $value = $this->get(self::restrict_daily);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'purchased_qty' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPurchasedQty($value)
    {
        return $this->set(self::purchased_qty, $value);
    }

    /**
     * Returns value of 'purchased_qty' property
     *
     * @return integer
     */
    public function getPurchasedQty()
    {
        $value = $this->get(self::purchased_qty);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'subsidies_wholesaler' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setSubsidiesWholesaler($value)
    {
        return $this->set(self::subsidies_wholesaler, $value);
    }

    /**
     * Returns value of 'subsidies_wholesaler' property
     *
     * @return double
     */
    public function getSubsidiesWholesaler()
    {
        $value = $this->get(self::subsidies_wholesaler);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'subsidies_lelai' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setSubsidiesLelai($value)
    {
        return $this->set(self::subsidies_lelai, $value);
    }

    /**
     * Returns value of 'subsidies_lelai' property
     *
     * @return double
     */
    public function getSubsidiesLelai()
    {
        $value = $this->get(self::subsidies_lelai);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'frequency' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFrequency($value)
    {
        return $this->set(self::frequency, $value);
    }

    /**
     * Returns value of 'frequency' property
     *
     * @return integer
     */
    public function getFrequency()
    {
        $value = $this->get(self::frequency);
        return $value === null ? (integer)$value : $value;
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
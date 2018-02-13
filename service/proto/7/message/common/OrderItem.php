<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * OrderItem message
 */
class OrderItem extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const item_id = 1;
    const name = 2;
    const price = 3;
    const qty = 4;
    const image = 5;
    const product_id = 6;
    const barcode = 7;
    const original_price = 8;
    const row_total = 9;
    const specification = 10;
    const tags = 11;
    const rebates_all = 12;
    const receipt = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::item_id => array(
            'name' => 'item_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::price => array(
            'name' => 'price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::qty => array(
            'name' => 'qty',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::image => array(
            'name' => 'image',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::product_id => array(
            'name' => 'product_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::barcode => array(
            'name' => 'barcode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::original_price => array(
            'name' => 'original_price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::row_total => array(
            'name' => 'row_total',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::specification => array(
            'name' => 'specification',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tags => array(
            'name' => 'tags',
            'repeated' => true,
            'type' => '\service\message\common\Tag'
        ),
        self::rebates_all => array(
            'name' => 'rebates_all',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::receipt => array(
            'default' => 0,
            'name' => 'receipt',
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
        $this->values[self::item_id] = null;
        $this->values[self::name] = null;
        $this->values[self::price] = null;
        $this->values[self::qty] = null;
        $this->values[self::image] = null;
        $this->values[self::product_id] = null;
        $this->values[self::barcode] = null;
        $this->values[self::original_price] = null;
        $this->values[self::row_total] = null;
        $this->values[self::specification] = null;
        $this->values[self::tags] = array();
        $this->values[self::rebates_all] = null;
        $this->values[self::receipt] = self::$fields[self::receipt]['default'];
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
     * Sets value of 'item_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setItemId($value)
    {
        return $this->set(self::item_id, $value);
    }

    /**
     * Returns value of 'item_id' property
     *
     * @return integer
     */
    public function getItemId()
    {
        $value = $this->get(self::item_id);
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
     * Sets value of 'row_total' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setRowTotal($value)
    {
        return $this->set(self::row_total, $value);
    }

    /**
     * Returns value of 'row_total' property
     *
     * @return double
     */
    public function getRowTotal()
    {
        $value = $this->get(self::row_total);
        return $value === null ? (double)$value : $value;
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
     * Sets value of 'rebates_all' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getRebatesAll()
    {
        $value = $this->get(self::rebates_all);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'receipt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReceipt($value)
    {
        return $this->set(self::receipt, $value);
    }

    /**
     * Returns value of 'receipt' property
     *
     * @return integer
     */
    public function getReceipt()
    {
        $value = $this->get(self::receipt);
        return $value === null ? (integer)$value : $value;
    }
}
<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * MarkPriceProduct message
 */
class MarkPriceProduct extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const product_id = 1;
    const name = 2;
    const price = 3;
    const barcode = 4;
    const first_category_id = 5;
    const last_marked_time = 6;
    const contractor_name = 7;
    const history = 8;
    const image = 9;

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
        self::price => array(
            'name' => 'price',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
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
        self::last_marked_time => array(
            'name' => 'last_marked_time',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::contractor_name => array(
            'name' => 'contractor_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::history => array(
            'name' => 'history',
            'repeated' => true,
            'type' => '\service\message\common\MarkPriceHistory'
        ),
        self::image => array(
            'name' => 'image',
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
        $this->values[self::product_id] = null;
        $this->values[self::name] = null;
        $this->values[self::price] = null;
        $this->values[self::barcode] = null;
        $this->values[self::first_category_id] = null;
        $this->values[self::last_marked_time] = null;
        $this->values[self::contractor_name] = null;
        $this->values[self::history] = array();
        $this->values[self::image] = null;
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
     * Sets value of 'last_marked_time' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLastMarkedTime($value)
    {
        return $this->set(self::last_marked_time, $value);
    }

    /**
     * Returns value of 'last_marked_time' property
     *
     * @return string
     */
    public function getLastMarkedTime()
    {
        $value = $this->get(self::last_marked_time);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'contractor_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContractorName($value)
    {
        return $this->set(self::contractor_name, $value);
    }

    /**
     * Returns value of 'contractor_name' property
     *
     * @return string
     */
    public function getContractorName()
    {
        $value = $this->get(self::contractor_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'history' list
     *
     * @param \service\message\common\MarkPriceHistory $value Value to append
     *
     * @return null
     */
    public function appendHistory(\service\message\common\MarkPriceHistory $value)
    {
        return $this->append(self::history, $value);
    }

    /**
     * Clears 'history' list
     *
     * @return null
     */
    public function clearHistory()
    {
        return $this->clear(self::history);
    }

    /**
     * Returns 'history' list
     *
     * @return \service\message\common\MarkPriceHistory[]
     */
    public function getHistory()
    {
        return $this->get(self::history);
    }

    /**
     * Returns 'history' iterator
     *
     * @return \ArrayIterator
     */
    public function getHistoryIterator()
    {
        return new \ArrayIterator($this->get(self::history));
    }

    /**
     * Returns element from 'history' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\MarkPriceHistory
     */
    public function getHistoryAt($offset)
    {
        return $this->get(self::history, $offset);
    }

    /**
     * Returns count of 'history' list
     *
     * @return int
     */
    public function getHistoryCount()
    {
        return $this->count(self::history);
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
}
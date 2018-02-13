<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * ProductBlock message
 */
class ProductBlock extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const title = 1;
    const products = 2;
    const subtitle = 3;
    const desc = 4;
    const url = 5;
    const sort = 6;
    const product_block_title_img = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::title => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::products => array(
            'name' => 'products',
            'repeated' => true,
            'type' => '\service\message\common\Product'
        ),
        self::subtitle => array(
            'name' => 'subtitle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::desc => array(
            'name' => 'desc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::url => array(
            'name' => 'url',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::sort => array(
            'name' => 'sort',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::product_block_title_img => array(
            'name' => 'product_block_title_img',
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
        $this->values[self::title] = null;
        $this->values[self::products] = array();
        $this->values[self::subtitle] = null;
        $this->values[self::desc] = null;
        $this->values[self::url] = null;
        $this->values[self::sort] = null;
        $this->values[self::product_block_title_img] = null;
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
     * Appends value to 'products' list
     *
     * @param \service\message\common\Product $value Value to append
     *
     * @return null
     */
    public function appendProducts(\service\message\common\Product $value)
    {
        return $this->append(self::products, $value);
    }

    /**
     * Clears 'products' list
     *
     * @return null
     */
    public function clearProducts()
    {
        return $this->clear(self::products);
    }

    /**
     * Returns 'products' list
     *
     * @return \service\message\common\Product[]
     */
    public function getProducts()
    {
        return $this->get(self::products);
    }

    /**
     * Returns 'products' iterator
     *
     * @return \ArrayIterator
     */
    public function getProductsIterator()
    {
        return new \ArrayIterator($this->get(self::products));
    }

    /**
     * Returns element from 'products' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Product
     */
    public function getProductsAt($offset)
    {
        return $this->get(self::products, $offset);
    }

    /**
     * Returns count of 'products' list
     *
     * @return int
     */
    public function getProductsCount()
    {
        return $this->count(self::products);
    }

    /**
     * Sets value of 'subtitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubtitle($value)
    {
        return $this->set(self::subtitle, $value);
    }

    /**
     * Returns value of 'subtitle' property
     *
     * @return string
     */
    public function getSubtitle()
    {
        $value = $this->get(self::subtitle);
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
     * Sets value of 'product_block_title_img' property
     *
     * @param \service\message\common\Image $value Property value
     *
     * @return null
     */
    public function setProductBlockTitleImg(\service\message\common\Image $value=null)
    {
        return $this->set(self::product_block_title_img, $value);
    }

    /**
     * Returns value of 'product_block_title_img' property
     *
     * @return \service\message\common\Image
     */
    public function getProductBlockTitleImg()
    {
        return $this->get(self::product_block_title_img);
    }
}
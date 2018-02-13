<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * CategoryBlock message
 */
class CategoryBlock extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const category_id = 1;
    const icon = 2;
    const text_color = 3;
    const name = 4;
    const products = 5;
    const left_images = 6;
    const right_images = 7;
    const child_category = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::category_id => array(
            'name' => 'category_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::icon => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::text_color => array(
            'name' => 'text_color',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::products => array(
            'name' => 'products',
            'repeated' => true,
            'type' => '\service\message\common\Product'
        ),
        self::left_images => array(
            'name' => 'left_images',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::right_images => array(
            'name' => 'right_images',
            'repeated' => true,
            'type' => '\service\message\common\Image'
        ),
        self::child_category => array(
            'name' => 'child_category',
            'repeated' => true,
            'type' => '\service\message\common\CategoryNode'
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
        $this->values[self::category_id] = null;
        $this->values[self::icon] = null;
        $this->values[self::text_color] = null;
        $this->values[self::name] = null;
        $this->values[self::products] = array();
        $this->values[self::left_images] = array();
        $this->values[self::right_images] = array();
        $this->values[self::child_category] = array();
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
     * Sets value of 'category_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCategoryId($value)
    {
        return $this->set(self::category_id, $value);
    }

    /**
     * Returns value of 'category_id' property
     *
     * @return integer
     */
    public function getCategoryId()
    {
        $value = $this->get(self::category_id);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'text_color' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTextColor($value)
    {
        return $this->set(self::text_color, $value);
    }

    /**
     * Returns value of 'text_color' property
     *
     * @return string
     */
    public function getTextColor()
    {
        $value = $this->get(self::text_color);
        return $value === null ? (string)$value : $value;
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
     * Appends value to 'left_images' list
     *
     * @param \service\message\common\Image $value Value to append
     *
     * @return null
     */
    public function appendLeftImages(\service\message\common\Image $value)
    {
        return $this->append(self::left_images, $value);
    }

    /**
     * Clears 'left_images' list
     *
     * @return null
     */
    public function clearLeftImages()
    {
        return $this->clear(self::left_images);
    }

    /**
     * Returns 'left_images' list
     *
     * @return \service\message\common\Image[]
     */
    public function getLeftImages()
    {
        return $this->get(self::left_images);
    }

    /**
     * Returns 'left_images' iterator
     *
     * @return \ArrayIterator
     */
    public function getLeftImagesIterator()
    {
        return new \ArrayIterator($this->get(self::left_images));
    }

    /**
     * Returns element from 'left_images' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Image
     */
    public function getLeftImagesAt($offset)
    {
        return $this->get(self::left_images, $offset);
    }

    /**
     * Returns count of 'left_images' list
     *
     * @return int
     */
    public function getLeftImagesCount()
    {
        return $this->count(self::left_images);
    }

    /**
     * Appends value to 'right_images' list
     *
     * @param \service\message\common\Image $value Value to append
     *
     * @return null
     */
    public function appendRightImages(\service\message\common\Image $value)
    {
        return $this->append(self::right_images, $value);
    }

    /**
     * Clears 'right_images' list
     *
     * @return null
     */
    public function clearRightImages()
    {
        return $this->clear(self::right_images);
    }

    /**
     * Returns 'right_images' list
     *
     * @return \service\message\common\Image[]
     */
    public function getRightImages()
    {
        return $this->get(self::right_images);
    }

    /**
     * Returns 'right_images' iterator
     *
     * @return \ArrayIterator
     */
    public function getRightImagesIterator()
    {
        return new \ArrayIterator($this->get(self::right_images));
    }

    /**
     * Returns element from 'right_images' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Image
     */
    public function getRightImagesAt($offset)
    {
        return $this->get(self::right_images, $offset);
    }

    /**
     * Returns count of 'right_images' list
     *
     * @return int
     */
    public function getRightImagesCount()
    {
        return $this->count(self::right_images);
    }

    /**
     * Appends value to 'child_category' list
     *
     * @param \service\message\common\CategoryNode $value Value to append
     *
     * @return null
     */
    public function appendChildCategory(\service\message\common\CategoryNode $value)
    {
        return $this->append(self::child_category, $value);
    }

    /**
     * Clears 'child_category' list
     *
     * @return null
     */
    public function clearChildCategory()
    {
        return $this->clear(self::child_category);
    }

    /**
     * Returns 'child_category' list
     *
     * @return \service\message\common\CategoryNode[]
     */
    public function getChildCategory()
    {
        return $this->get(self::child_category);
    }

    /**
     * Returns 'child_category' iterator
     *
     * @return \ArrayIterator
     */
    public function getChildCategoryIterator()
    {
        return new \ArrayIterator($this->get(self::child_category));
    }

    /**
     * Returns element from 'child_category' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\CategoryNode
     */
    public function getChildCategoryAt($offset)
    {
        return $this->get(self::child_category, $offset);
    }

    /**
     * Returns count of 'child_category' list
     *
     * @return int
     */
    public function getChildCategoryCount()
    {
        return $this->count(self::child_category);
    }
}
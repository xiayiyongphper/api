<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * CategoryNode message
 */
class CategoryNode extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const id = 1;
    const parent_id = 2;
    const name = 3;
    const path = 4;
    const level = 5;
    const child_category = 6;
    const icon = 7;
    const brands = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::id => array(
            'name' => 'id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::parent_id => array(
            'name' => 'parent_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::path => array(
            'name' => 'path',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::level => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::child_category => array(
            'name' => 'child_category',
            'repeated' => true,
            'type' => '\service\message\common\CategoryNode'
        ),
        self::icon => array(
            'name' => 'icon',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::brands => array(
            'name' => 'brands',
            'repeated' => true,
            'type' => '\service\message\common\Brand'
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
        $this->values[self::id] = null;
        $this->values[self::parent_id] = null;
        $this->values[self::name] = null;
        $this->values[self::path] = null;
        $this->values[self::level] = null;
        $this->values[self::child_category] = array();
        $this->values[self::icon] = null;
        $this->values[self::brands] = array();
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::id, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'parent_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setParentId($value)
    {
        return $this->set(self::parent_id, $value);
    }

    /**
     * Returns value of 'parent_id' property
     *
     * @return integer
     */
    public function getParentId()
    {
        $value = $this->get(self::parent_id);
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
     * Sets value of 'path' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPath($value)
    {
        return $this->set(self::path, $value);
    }

    /**
     * Returns value of 'path' property
     *
     * @return string
     */
    public function getPath()
    {
        $value = $this->get(self::path);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'level' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::level, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return string
     */
    public function getLevel()
    {
        $value = $this->get(self::level);
        return $value === null ? (string)$value : $value;
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
     * Appends value to 'brands' list
     *
     * @param \service\message\common\Brand $value Value to append
     *
     * @return null
     */
    public function appendBrands(\service\message\common\Brand $value)
    {
        return $this->append(self::brands, $value);
    }

    /**
     * Clears 'brands' list
     *
     * @return null
     */
    public function clearBrands()
    {
        return $this->clear(self::brands);
    }

    /**
     * Returns 'brands' list
     *
     * @return \service\message\common\Brand[]
     */
    public function getBrands()
    {
        return $this->get(self::brands);
    }

    /**
     * Returns 'brands' iterator
     *
     * @return \ArrayIterator
     */
    public function getBrandsIterator()
    {
        return new \ArrayIterator($this->get(self::brands));
    }

    /**
     * Returns element from 'brands' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Brand
     */
    public function getBrandsAt($offset)
    {
        return $this->get(self::brands, $offset);
    }

    /**
     * Returns count of 'brands' list
     *
     * @return int
     */
    public function getBrandsCount()
    {
        return $this->count(self::brands);
    }
}
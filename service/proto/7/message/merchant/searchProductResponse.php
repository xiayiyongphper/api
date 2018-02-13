<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * searchProductResponse message
 */
class searchProductResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const product_list = 1;
    const pages = 2;
    const category = 3;
    const words = 4;
    const wholesaler_list = 5;
    const title_img = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::product_list => array(
            'name' => 'product_list',
            'repeated' => true,
            'type' => '\service\message\common\Product'
        ),
        self::pages => array(
            'name' => 'pages',
            'required' => false,
            'type' => '\service\message\common\Pagination'
        ),
        self::category => array(
            'name' => 'category',
            'required' => false,
            'type' => '\service\message\common\CategoryNode'
        ),
        self::words => array(
            'name' => 'words',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::wholesaler_list => array(
            'name' => 'wholesaler_list',
            'repeated' => true,
            'type' => '\service\message\common\Store'
        ),
        self::title_img => array(
            'name' => 'title_img',
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
        $this->values[self::product_list] = array();
        $this->values[self::pages] = null;
        $this->values[self::category] = null;
        $this->values[self::words] = array();
        $this->values[self::wholesaler_list] = array();
        $this->values[self::title_img] = null;
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
     * Appends value to 'product_list' list
     *
     * @param \service\message\common\Product $value Value to append
     *
     * @return null
     */
    public function appendProductList(\service\message\common\Product $value)
    {
        return $this->append(self::product_list, $value);
    }

    /**
     * Clears 'product_list' list
     *
     * @return null
     */
    public function clearProductList()
    {
        return $this->clear(self::product_list);
    }

    /**
     * Returns 'product_list' list
     *
     * @return \service\message\common\Product[]
     */
    public function getProductList()
    {
        return $this->get(self::product_list);
    }

    /**
     * Returns 'product_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getProductListIterator()
    {
        return new \ArrayIterator($this->get(self::product_list));
    }

    /**
     * Returns element from 'product_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Product
     */
    public function getProductListAt($offset)
    {
        return $this->get(self::product_list, $offset);
    }

    /**
     * Returns count of 'product_list' list
     *
     * @return int
     */
    public function getProductListCount()
    {
        return $this->count(self::product_list);
    }

    /**
     * Sets value of 'pages' property
     *
     * @param \service\message\common\Pagination $value Property value
     *
     * @return null
     */
    public function setPages(\service\message\common\Pagination $value=null)
    {
        return $this->set(self::pages, $value);
    }

    /**
     * Returns value of 'pages' property
     *
     * @return \service\message\common\Pagination
     */
    public function getPages()
    {
        return $this->get(self::pages);
    }

    /**
     * Sets value of 'category' property
     *
     * @param \service\message\common\CategoryNode $value Property value
     *
     * @return null
     */
    public function setCategory(\service\message\common\CategoryNode $value=null)
    {
        return $this->set(self::category, $value);
    }

    /**
     * Returns value of 'category' property
     *
     * @return \service\message\common\CategoryNode
     */
    public function getCategory()
    {
        return $this->get(self::category);
    }

    /**
     * Appends value to 'words' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendWords($value)
    {
        return $this->append(self::words, $value);
    }

    /**
     * Clears 'words' list
     *
     * @return null
     */
    public function clearWords()
    {
        return $this->clear(self::words);
    }

    /**
     * Returns 'words' list
     *
     * @return string[]
     */
    public function getWords()
    {
        return $this->get(self::words);
    }

    /**
     * Returns 'words' iterator
     *
     * @return \ArrayIterator
     */
    public function getWordsIterator()
    {
        return new \ArrayIterator($this->get(self::words));
    }

    /**
     * Returns element from 'words' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getWordsAt($offset)
    {
        return $this->get(self::words, $offset);
    }

    /**
     * Returns count of 'words' list
     *
     * @return int
     */
    public function getWordsCount()
    {
        return $this->count(self::words);
    }

    /**
     * Appends value to 'wholesaler_list' list
     *
     * @param \service\message\common\Store $value Value to append
     *
     * @return null
     */
    public function appendWholesalerList(\service\message\common\Store $value)
    {
        return $this->append(self::wholesaler_list, $value);
    }

    /**
     * Clears 'wholesaler_list' list
     *
     * @return null
     */
    public function clearWholesalerList()
    {
        return $this->clear(self::wholesaler_list);
    }

    /**
     * Returns 'wholesaler_list' list
     *
     * @return \service\message\common\Store[]
     */
    public function getWholesalerList()
    {
        return $this->get(self::wholesaler_list);
    }

    /**
     * Returns 'wholesaler_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getWholesalerListIterator()
    {
        return new \ArrayIterator($this->get(self::wholesaler_list));
    }

    /**
     * Returns element from 'wholesaler_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Store
     */
    public function getWholesalerListAt($offset)
    {
        return $this->get(self::wholesaler_list, $offset);
    }

    /**
     * Returns count of 'wholesaler_list' list
     *
     * @return int
     */
    public function getWholesalerListCount()
    {
        return $this->count(self::wholesaler_list);
    }

    /**
     * Sets value of 'title_img' property
     *
     * @param \service\message\common\Image $value Property value
     *
     * @return null
     */
    public function setTitleImg(\service\message\common\Image $value=null)
    {
        return $this->set(self::title_img, $value);
    }

    /**
     * Returns value of 'title_img' property
     *
     * @return \service\message\common\Image
     */
    public function getTitleImg()
    {
        return $this->get(self::title_img);
    }
}
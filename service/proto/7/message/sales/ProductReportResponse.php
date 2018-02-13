<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * ProductReportResponse message
 */
class ProductReportResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const group_size = 1;
    const items = 2;
    const pages = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::group_size => array(
            'name' => 'group_size',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::items => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::pages => array(
            'name' => 'pages',
            'required' => false,
            'type' => '\service\message\common\Pagination'
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
        $this->values[self::group_size] = null;
        $this->values[self::items] = array();
        $this->values[self::pages] = null;
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
     * Sets value of 'group_size' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupSize($value)
    {
        return $this->set(self::group_size, $value);
    }

    /**
     * Returns value of 'group_size' property
     *
     * @return integer
     */
    public function getGroupSize()
    {
        $value = $this->get(self::group_size);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'items' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendItems(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::items, $value);
    }

    /**
     * Clears 'items' list
     *
     * @return null
     */
    public function clearItems()
    {
        return $this->clear(self::items);
    }

    /**
     * Returns 'items' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getItems()
    {
        return $this->get(self::items);
    }

    /**
     * Returns 'items' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemsIterator()
    {
        return new \ArrayIterator($this->get(self::items));
    }

    /**
     * Returns element from 'items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getItemsAt($offset)
    {
        return $this->get(self::items, $offset);
    }

    /**
     * Returns count of 'items' list
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->count(self::items);
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
}
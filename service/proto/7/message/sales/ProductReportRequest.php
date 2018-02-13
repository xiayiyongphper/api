<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * ProductReportRequest message
 */
class ProductReportRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const filters = 1;
    const pagination = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::filters => array(
            'name' => 'filters',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::pagination => array(
            'name' => 'pagination',
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
        $this->values[self::filters] = array();
        $this->values[self::pagination] = null;
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
     * Appends value to 'filters' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendFilters(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::filters, $value);
    }

    /**
     * Clears 'filters' list
     *
     * @return null
     */
    public function clearFilters()
    {
        return $this->clear(self::filters);
    }

    /**
     * Returns 'filters' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getFilters()
    {
        return $this->get(self::filters);
    }

    /**
     * Returns 'filters' iterator
     *
     * @return \ArrayIterator
     */
    public function getFiltersIterator()
    {
        return new \ArrayIterator($this->get(self::filters));
    }

    /**
     * Returns element from 'filters' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getFiltersAt($offset)
    {
        return $this->get(self::filters, $offset);
    }

    /**
     * Returns count of 'filters' list
     *
     * @return int
     */
    public function getFiltersCount()
    {
        return $this->count(self::filters);
    }

    /**
     * Sets value of 'pagination' property
     *
     * @param \service\message\common\Pagination $value Property value
     *
     * @return null
     */
    public function setPagination(\service\message\common\Pagination $value=null)
    {
        return $this->set(self::pagination, $value);
    }

    /**
     * Returns value of 'pagination' property
     *
     * @return \service\message\common\Pagination
     */
    public function getPagination()
    {
        return $this->get(self::pagination);
    }
}
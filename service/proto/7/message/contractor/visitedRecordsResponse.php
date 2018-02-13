<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * visitedRecordsResponse message
 */
class visitedRecordsResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const records = 1;
    const pagination = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::records => array(
            'name' => 'records',
            'repeated' => true,
            'type' => '\service\message\contractor\VisitRecord'
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
        $this->values[self::records] = array();
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
     * Appends value to 'records' list
     *
     * @param \service\message\contractor\VisitRecord $value Value to append
     *
     * @return null
     */
    public function appendRecords(\service\message\contractor\VisitRecord $value)
    {
        return $this->append(self::records, $value);
    }

    /**
     * Clears 'records' list
     *
     * @return null
     */
    public function clearRecords()
    {
        return $this->clear(self::records);
    }

    /**
     * Returns 'records' list
     *
     * @return \service\message\contractor\VisitRecord[]
     */
    public function getRecords()
    {
        return $this->get(self::records);
    }

    /**
     * Returns 'records' iterator
     *
     * @return \ArrayIterator
     */
    public function getRecordsIterator()
    {
        return new \ArrayIterator($this->get(self::records));
    }

    /**
     * Returns element from 'records' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\contractor\VisitRecord
     */
    public function getRecordsAt($offset)
    {
        return $this->get(self::records, $offset);
    }

    /**
     * Returns count of 'records' list
     *
     * @return int
     */
    public function getRecordsCount()
    {
        return $this->count(self::records);
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
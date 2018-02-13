<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * getCustomerOrderStatResponse message
 */
class getCustomerOrderStatResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const stat_all = 1;
    const stat_list = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::stat_all => array(
            'name' => 'stat_all',
            'required' => false,
            'type' => '\service\message\sales\customerOrderStatItem'
        ),
        self::stat_list => array(
            'name' => 'stat_list',
            'repeated' => true,
            'type' => '\service\message\sales\customerOrderStatItem'
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
        $this->values[self::stat_all] = null;
        $this->values[self::stat_list] = array();
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
     * Sets value of 'stat_all' property
     *
     * @param \service\message\sales\customerOrderStatItem $value Property value
     *
     * @return null
     */
    public function setStatAll(\service\message\sales\customerOrderStatItem $value=null)
    {
        return $this->set(self::stat_all, $value);
    }

    /**
     * Returns value of 'stat_all' property
     *
     * @return \service\message\sales\customerOrderStatItem
     */
    public function getStatAll()
    {
        return $this->get(self::stat_all);
    }

    /**
     * Appends value to 'stat_list' list
     *
     * @param \service\message\sales\customerOrderStatItem $value Value to append
     *
     * @return null
     */
    public function appendStatList(\service\message\sales\customerOrderStatItem $value)
    {
        return $this->append(self::stat_list, $value);
    }

    /**
     * Clears 'stat_list' list
     *
     * @return null
     */
    public function clearStatList()
    {
        return $this->clear(self::stat_list);
    }

    /**
     * Returns 'stat_list' list
     *
     * @return \service\message\sales\customerOrderStatItem[]
     */
    public function getStatList()
    {
        return $this->get(self::stat_list);
    }

    /**
     * Returns 'stat_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getStatListIterator()
    {
        return new \ArrayIterator($this->get(self::stat_list));
    }

    /**
     * Returns element from 'stat_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\sales\customerOrderStatItem
     */
    public function getStatListAt($offset)
    {
        return $this->get(self::stat_list, $offset);
    }

    /**
     * Returns count of 'stat_list' list
     *
     * @return int
     */
    public function getStatListCount()
    {
        return $this->count(self::stat_list);
    }
}
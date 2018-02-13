<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * contractorCityListResponse message
 */
class contractorCityListResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const city_tree = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::city_tree => array(
            'name' => 'city_tree',
            'repeated' => true,
            'type' => '\service\message\common\Province'
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
        $this->values[self::city_tree] = array();
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
     * Appends value to 'city_tree' list
     *
     * @param \service\message\common\Province $value Value to append
     *
     * @return null
     */
    public function appendCityTree(\service\message\common\Province $value)
    {
        return $this->append(self::city_tree, $value);
    }

    /**
     * Clears 'city_tree' list
     *
     * @return null
     */
    public function clearCityTree()
    {
        return $this->clear(self::city_tree);
    }

    /**
     * Returns 'city_tree' list
     *
     * @return \service\message\common\Province[]
     */
    public function getCityTree()
    {
        return $this->get(self::city_tree);
    }

    /**
     * Returns 'city_tree' iterator
     *
     * @return \ArrayIterator
     */
    public function getCityTreeIterator()
    {
        return new \ArrayIterator($this->get(self::city_tree));
    }

    /**
     * Returns element from 'city_tree' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Province
     */
    public function getCityTreeAt($offset)
    {
        return $this->get(self::city_tree, $offset);
    }

    /**
     * Returns count of 'city_tree' list
     *
     * @return int
     */
    public function getCityTreeCount()
    {
        return $this->count(self::city_tree);
    }
}
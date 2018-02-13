<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * AvailableCityListResponse message
 */
class AvailableCityListResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const city = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::city => array(
            'name' => 'city',
            'repeated' => true,
            'type' => '\service\message\common\City'
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
        $this->values[self::city] = array();
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
     * Appends value to 'city' list
     *
     * @param \service\message\common\City $value Value to append
     *
     * @return null
     */
    public function appendCity(\service\message\common\City $value)
    {
        return $this->append(self::city, $value);
    }

    /**
     * Clears 'city' list
     *
     * @return null
     */
    public function clearCity()
    {
        return $this->clear(self::city);
    }

    /**
     * Returns 'city' list
     *
     * @return \service\message\common\City[]
     */
    public function getCity()
    {
        return $this->get(self::city);
    }

    /**
     * Returns 'city' iterator
     *
     * @return \ArrayIterator
     */
    public function getCityIterator()
    {
        return new \ArrayIterator($this->get(self::city));
    }

    /**
     * Returns element from 'city' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\City
     */
    public function getCityAt($offset)
    {
        return $this->get(self::city, $offset);
    }

    /**
     * Returns count of 'city' list
     *
     * @return int
     */
    public function getCityCount()
    {
        return $this->count(self::city);
    }
}
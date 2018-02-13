<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Province message
 */
class Province extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const name = 1;
    const code = 2;
    const city_list = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::name => array(
            'name' => 'name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::code => array(
            'name' => 'code',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::city_list => array(
            'name' => 'city_list',
            'repeated' => true,
            'type' => '\service\message\common\CitySingle'
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
        $this->values[self::name] = null;
        $this->values[self::code] = null;
        $this->values[self::city_list] = array();
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
     * Sets value of 'code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::code, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return integer
     */
    public function getCode()
    {
        $value = $this->get(self::code);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'city_list' list
     *
     * @param \service\message\common\CitySingle $value Value to append
     *
     * @return null
     */
    public function appendCityList(\service\message\common\CitySingle $value)
    {
        return $this->append(self::city_list, $value);
    }

    /**
     * Clears 'city_list' list
     *
     * @return null
     */
    public function clearCityList()
    {
        return $this->clear(self::city_list);
    }

    /**
     * Returns 'city_list' list
     *
     * @return \service\message\common\CitySingle[]
     */
    public function getCityList()
    {
        return $this->get(self::city_list);
    }

    /**
     * Returns 'city_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getCityListIterator()
    {
        return new \ArrayIterator($this->get(self::city_list));
    }

    /**
     * Returns element from 'city_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\CitySingle
     */
    public function getCityListAt($offset)
    {
        return $this->get(self::city_list, $offset);
    }

    /**
     * Returns count of 'city_list' list
     *
     * @return int
     */
    public function getCityListCount()
    {
        return $this->count(self::city_list);
    }
}
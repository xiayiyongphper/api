<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * DataInfo message
 */
class DataInfo extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const name = 1;
    const data = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::data => array(
            'name' => 'data',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
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
        $this->values[self::data] = array();
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
     * Appends value to 'data' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendData(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::data, $value);
    }

    /**
     * Clears 'data' list
     *
     * @return null
     */
    public function clearData()
    {
        return $this->clear(self::data);
    }

    /**
     * Returns 'data' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getData()
    {
        return $this->get(self::data);
    }

    /**
     * Returns 'data' iterator
     *
     * @return \ArrayIterator
     */
    public function getDataIterator()
    {
        return new \ArrayIterator($this->get(self::data));
    }

    /**
     * Returns element from 'data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getDataAt($offset)
    {
        return $this->get(self::data, $offset);
    }

    /**
     * Returns count of 'data' list
     *
     * @return int
     */
    public function getDataCount()
    {
        return $this->count(self::data);
    }
}
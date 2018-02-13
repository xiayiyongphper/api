<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorSaleData message
 */
class ContractorSaleData extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const name = 1;
    const value = 2;
    const compare_data = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::name => array(
            'name' => 'name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::value => array(
            'name' => 'value',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::compare_data => array(
            'name' => 'compare_data',
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
        $this->values[self::value] = null;
        $this->values[self::compare_data] = array();
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
     * Sets value of 'value' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setValue($value)
    {
        return $this->set(self::value, $value);
    }

    /**
     * Returns value of 'value' property
     *
     * @return string
     */
    public function getValue()
    {
        $value = $this->get(self::value);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'compare_data' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendCompareData(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::compare_data, $value);
    }

    /**
     * Clears 'compare_data' list
     *
     * @return null
     */
    public function clearCompareData()
    {
        return $this->clear(self::compare_data);
    }

    /**
     * Returns 'compare_data' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getCompareData()
    {
        return $this->get(self::compare_data);
    }

    /**
     * Returns 'compare_data' iterator
     *
     * @return \ArrayIterator
     */
    public function getCompareDataIterator()
    {
        return new \ArrayIterator($this->get(self::compare_data));
    }

    /**
     * Returns element from 'compare_data' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getCompareDataAt($offset)
    {
        return $this->get(self::compare_data, $offset);
    }

    /**
     * Returns count of 'compare_data' list
     *
     * @return int
     */
    public function getCompareDataCount()
    {
        return $this->count(self::compare_data);
    }
}
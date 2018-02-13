<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorStaticsData message
 */
class ContractorStaticsData extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const title = 1;
    const data = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::title => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::data => array(
            'name' => 'data',
            'repeated' => true,
            'type' => '\service\message\contractor\ContractorSaleData'
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
        $this->values[self::title] = null;
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
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::title, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::title);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'data' list
     *
     * @param \service\message\contractor\ContractorSaleData $value Value to append
     *
     * @return null
     */
    public function appendData(\service\message\contractor\ContractorSaleData $value)
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
     * @return \service\message\contractor\ContractorSaleData[]
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
     * @return \service\message\contractor\ContractorSaleData
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
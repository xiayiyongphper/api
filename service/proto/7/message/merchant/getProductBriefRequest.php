<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * getProductBriefRequest message
 */
class getProductBriefRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const city = 1;
    const product_ids = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::city => array(
            'name' => 'city',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::product_ids => array(
            'name' => 'product_ids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::city] = null;
        $this->values[self::product_ids] = array();
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
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::city, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::city);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'product_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendProductIds($value)
    {
        return $this->append(self::product_ids, $value);
    }

    /**
     * Clears 'product_ids' list
     *
     * @return null
     */
    public function clearProductIds()
    {
        return $this->clear(self::product_ids);
    }

    /**
     * Returns 'product_ids' list
     *
     * @return integer[]
     */
    public function getProductIds()
    {
        return $this->get(self::product_ids);
    }

    /**
     * Returns 'product_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getProductIdsIterator()
    {
        return new \ArrayIterator($this->get(self::product_ids));
    }

    /**
     * Returns element from 'product_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getProductIdsAt($offset)
    {
        return $this->get(self::product_ids, $offset);
    }

    /**
     * Returns count of 'product_ids' list
     *
     * @return int
     */
    public function getProductIdsCount()
    {
        return $this->count(self::product_ids);
    }
}
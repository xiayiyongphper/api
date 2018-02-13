<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * getAreaBrandResponse message
 */
class getAreaBrandResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const brand_list = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::brand_list => array(
            'name' => 'brand_list',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::brand_list] = array();
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
     * Appends value to 'brand_list' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendBrandList($value)
    {
        return $this->append(self::brand_list, $value);
    }

    /**
     * Clears 'brand_list' list
     *
     * @return null
     */
    public function clearBrandList()
    {
        return $this->clear(self::brand_list);
    }

    /**
     * Returns 'brand_list' list
     *
     * @return string[]
     */
    public function getBrandList()
    {
        return $this->get(self::brand_list);
    }

    /**
     * Returns 'brand_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getBrandListIterator()
    {
        return new \ArrayIterator($this->get(self::brand_list));
    }

    /**
     * Returns element from 'brand_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getBrandListAt($offset)
    {
        return $this->get(self::brand_list, $offset);
    }

    /**
     * Returns count of 'brand_list' list
     *
     * @return int
     */
    public function getBrandListCount()
    {
        return $this->count(self::brand_list);
    }
}
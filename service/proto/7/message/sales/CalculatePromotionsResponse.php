<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * CalculatePromotionsResponse message
 */
class CalculatePromotionsResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const discount_note = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::discount_note => array(
            'name' => 'discount_note',
            'repeated' => true,
            'type' => '\service\message\common\DiscountNote'
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
        $this->values[self::discount_note] = array();
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
     * Appends value to 'discount_note' list
     *
     * @param \service\message\common\DiscountNote $value Value to append
     *
     * @return null
     */
    public function appendDiscountNote(\service\message\common\DiscountNote $value)
    {
        return $this->append(self::discount_note, $value);
    }

    /**
     * Clears 'discount_note' list
     *
     * @return null
     */
    public function clearDiscountNote()
    {
        return $this->clear(self::discount_note);
    }

    /**
     * Returns 'discount_note' list
     *
     * @return \service\message\common\DiscountNote[]
     */
    public function getDiscountNote()
    {
        return $this->get(self::discount_note);
    }

    /**
     * Returns 'discount_note' iterator
     *
     * @return \ArrayIterator
     */
    public function getDiscountNoteIterator()
    {
        return new \ArrayIterator($this->get(self::discount_note));
    }

    /**
     * Returns element from 'discount_note' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\DiscountNote
     */
    public function getDiscountNoteAt($offset)
    {
        return $this->get(self::discount_note, $offset);
    }

    /**
     * Returns count of 'discount_note' list
     *
     * @return int
     */
    public function getDiscountNoteCount()
    {
        return $this->count(self::discount_note);
    }
}
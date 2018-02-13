<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * DiscountNote message
 */
class DiscountNote extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const wholesaler_id = 1;
    const promotions = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::promotions => array(
            'name' => 'promotions',
            'repeated' => true,
            'type' => '\service\message\common\PromotionInfo'
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
        $this->values[self::wholesaler_id] = null;
        $this->values[self::promotions] = array();
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
     * Sets value of 'wholesaler_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWholesalerId($value)
    {
        return $this->set(self::wholesaler_id, $value);
    }

    /**
     * Returns value of 'wholesaler_id' property
     *
     * @return integer
     */
    public function getWholesalerId()
    {
        $value = $this->get(self::wholesaler_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'promotions' list
     *
     * @param \service\message\common\PromotionInfo $value Value to append
     *
     * @return null
     */
    public function appendPromotions(\service\message\common\PromotionInfo $value)
    {
        return $this->append(self::promotions, $value);
    }

    /**
     * Clears 'promotions' list
     *
     * @return null
     */
    public function clearPromotions()
    {
        return $this->clear(self::promotions);
    }

    /**
     * Returns 'promotions' list
     *
     * @return \service\message\common\PromotionInfo[]
     */
    public function getPromotions()
    {
        return $this->get(self::promotions);
    }

    /**
     * Returns 'promotions' iterator
     *
     * @return \ArrayIterator
     */
    public function getPromotionsIterator()
    {
        return new \ArrayIterator($this->get(self::promotions));
    }

    /**
     * Returns element from 'promotions' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\PromotionInfo
     */
    public function getPromotionsAt($offset)
    {
        return $this->get(self::promotions, $offset);
    }

    /**
     * Returns count of 'promotions' list
     *
     * @return int
     */
    public function getPromotionsCount()
    {
        return $this->count(self::promotions);
    }
}
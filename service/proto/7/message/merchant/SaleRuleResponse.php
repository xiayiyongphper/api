<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * SaleRuleResponse message
 */
class SaleRuleResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const promotions = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::promotions => array(
            'name' => 'promotions',
            'repeated' => true,
            'type' => '\service\message\common\PromotionRule'
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
     * Appends value to 'promotions' list
     *
     * @param \service\message\common\PromotionRule $value Value to append
     *
     * @return null
     */
    public function appendPromotions(\service\message\common\PromotionRule $value)
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
     * @return \service\message\common\PromotionRule[]
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
     * @return \service\message\common\PromotionRule
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
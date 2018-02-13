<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * getStoresByAreaIdsResponse message
 */
class getStoresByAreaIdsResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const wholesaler_list = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::wholesaler_list => array(
            'name' => 'wholesaler_list',
            'repeated' => true,
            'type' => '\service\message\common\Store'
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
        $this->values[self::wholesaler_list] = array();
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
     * Appends value to 'wholesaler_list' list
     *
     * @param \service\message\common\Store $value Value to append
     *
     * @return null
     */
    public function appendWholesalerList(\service\message\common\Store $value)
    {
        return $this->append(self::wholesaler_list, $value);
    }

    /**
     * Clears 'wholesaler_list' list
     *
     * @return null
     */
    public function clearWholesalerList()
    {
        return $this->clear(self::wholesaler_list);
    }

    /**
     * Returns 'wholesaler_list' list
     *
     * @return \service\message\common\Store[]
     */
    public function getWholesalerList()
    {
        return $this->get(self::wholesaler_list);
    }

    /**
     * Returns 'wholesaler_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getWholesalerListIterator()
    {
        return new \ArrayIterator($this->get(self::wholesaler_list));
    }

    /**
     * Returns element from 'wholesaler_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Store
     */
    public function getWholesalerListAt($offset)
    {
        return $this->get(self::wholesaler_list, $offset);
    }

    /**
     * Returns count of 'wholesaler_list' list
     *
     * @return int
     */
    public function getWholesalerListCount()
    {
        return $this->count(self::wholesaler_list);
    }
}
<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * ContractorMerchantResponse message
 */
class ContractorMerchantResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const merchant = 1;
    const pagination = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::merchant => array(
            'name' => 'merchant',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::pagination => array(
            'name' => 'pagination',
            'required' => false,
            'type' => '\service\message\common\Pagination'
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
        $this->values[self::merchant] = array();
        $this->values[self::pagination] = null;
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
     * Appends value to 'merchant' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendMerchant(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::merchant, $value);
    }

    /**
     * Clears 'merchant' list
     *
     * @return null
     */
    public function clearMerchant()
    {
        return $this->clear(self::merchant);
    }

    /**
     * Returns 'merchant' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getMerchant()
    {
        return $this->get(self::merchant);
    }

    /**
     * Returns 'merchant' iterator
     *
     * @return \ArrayIterator
     */
    public function getMerchantIterator()
    {
        return new \ArrayIterator($this->get(self::merchant));
    }

    /**
     * Returns element from 'merchant' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getMerchantAt($offset)
    {
        return $this->get(self::merchant, $offset);
    }

    /**
     * Returns count of 'merchant' list
     *
     * @return int
     */
    public function getMerchantCount()
    {
        return $this->count(self::merchant);
    }

    /**
     * Sets value of 'pagination' property
     *
     * @param \service\message\common\Pagination $value Property value
     *
     * @return null
     */
    public function setPagination(\service\message\common\Pagination $value=null)
    {
        return $this->set(self::pagination, $value);
    }

    /**
     * Returns value of 'pagination' property
     *
     * @return \service\message\common\Pagination
     */
    public function getPagination()
    {
        return $this->get(self::pagination);
    }
}
<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * ContractorStatics message
 */
class ContractorStatics extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const sales_count = 1;
    const datas = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::sales_count => array(
            'name' => 'sales_count',
            'required' => false,
            'type' => '\service\message\common\SalesCountStatics'
        ),
        self::datas => array(
            'name' => 'datas',
            'repeated' => true,
            'type' => '\service\message\common\DataInfo'
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
        $this->values[self::sales_count] = null;
        $this->values[self::datas] = array();
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
     * Sets value of 'sales_count' property
     *
     * @param \service\message\common\SalesCountStatics $value Property value
     *
     * @return null
     */
    public function setSalesCount(\service\message\common\SalesCountStatics $value=null)
    {
        return $this->set(self::sales_count, $value);
    }

    /**
     * Returns value of 'sales_count' property
     *
     * @return \service\message\common\SalesCountStatics
     */
    public function getSalesCount()
    {
        return $this->get(self::sales_count);
    }

    /**
     * Appends value to 'datas' list
     *
     * @param \service\message\common\DataInfo $value Value to append
     *
     * @return null
     */
    public function appendDatas(\service\message\common\DataInfo $value)
    {
        return $this->append(self::datas, $value);
    }

    /**
     * Clears 'datas' list
     *
     * @return null
     */
    public function clearDatas()
    {
        return $this->clear(self::datas);
    }

    /**
     * Returns 'datas' list
     *
     * @return \service\message\common\DataInfo[]
     */
    public function getDatas()
    {
        return $this->get(self::datas);
    }

    /**
     * Returns 'datas' iterator
     *
     * @return \ArrayIterator
     */
    public function getDatasIterator()
    {
        return new \ArrayIterator($this->get(self::datas));
    }

    /**
     * Returns element from 'datas' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\DataInfo
     */
    public function getDatasAt($offset)
    {
        return $this->get(self::datas, $offset);
    }

    /**
     * Returns count of 'datas' list
     *
     * @return int
     */
    public function getDatasCount()
    {
        return $this->count(self::datas);
    }
}
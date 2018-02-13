<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * PromotionInfo message
 */
class PromotionInfo extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const text = 1;
    const description = 2;
    const rebates_wholesaler = 3;
    const rebates_lelai = 4;
    const off_money = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::text => array(
            'name' => 'text',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::description => array(
            'name' => 'description',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::rebates_wholesaler => array(
            'name' => 'rebates_wholesaler',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::rebates_lelai => array(
            'name' => 'rebates_lelai',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::off_money => array(
            'name' => 'off_money',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
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
        $this->values[self::text] = null;
        $this->values[self::description] = null;
        $this->values[self::rebates_wholesaler] = null;
        $this->values[self::rebates_lelai] = null;
        $this->values[self::off_money] = null;
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
     * Sets value of 'text' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setText($value)
    {
        return $this->set(self::text, $value);
    }

    /**
     * Returns value of 'text' property
     *
     * @return string
     */
    public function getText()
    {
        $value = $this->get(self::text);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescription($value)
    {
        return $this->set(self::description, $value);
    }

    /**
     * Returns value of 'description' property
     *
     * @return string
     */
    public function getDescription()
    {
        $value = $this->get(self::description);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'rebates_wholesaler' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRebatesWholesaler($value)
    {
        return $this->set(self::rebates_wholesaler, $value);
    }

    /**
     * Returns value of 'rebates_wholesaler' property
     *
     * @return string
     */
    public function getRebatesWholesaler()
    {
        $value = $this->get(self::rebates_wholesaler);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'rebates_lelai' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRebatesLelai($value)
    {
        return $this->set(self::rebates_lelai, $value);
    }

    /**
     * Returns value of 'rebates_lelai' property
     *
     * @return string
     */
    public function getRebatesLelai()
    {
        $value = $this->get(self::rebates_lelai);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'off_money' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setOffMoney($value)
    {
        return $this->set(self::off_money, $value);
    }

    /**
     * Returns value of 'off_money' property
     *
     * @return double
     */
    public function getOffMoney()
    {
        $value = $this->get(self::off_money);
        return $value === null ? (double)$value : $value;
    }
}
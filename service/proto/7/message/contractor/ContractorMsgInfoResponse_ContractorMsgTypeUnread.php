<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorMsgTypeUnread message embedded in ContractorMsgInfoResponse message
 */
class ContractorMsgInfoResponse_ContractorMsgTypeUnread extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const type = 1;
    const count = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::type => array(
            'name' => 'type',
            'required' => true,
            'type' => '\service\message\common\ContractorMsgType'
        ),
        self::count => array(
            'name' => 'count',
            'required' => true,
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
        $this->values[self::type] = null;
        $this->values[self::count] = null;
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
     * Sets value of 'type' property
     *
     * @param \service\message\common\ContractorMsgType $value Property value
     *
     * @return null
     */
    public function setType(\service\message\common\ContractorMsgType $value=null)
    {
        return $this->set(self::type, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return \service\message\common\ContractorMsgType
     */
    public function getType()
    {
        return $this->get(self::type);
    }

    /**
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::count, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::count);
        return $value === null ? (integer)$value : $value;
    }
}
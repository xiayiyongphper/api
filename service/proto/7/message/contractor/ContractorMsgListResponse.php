<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorMsgListResponse message
 */
class ContractorMsgListResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const msg_list = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::msg_list => array(
            'name' => 'msg_list',
            'repeated' => true,
            'type' => '\service\message\common\ContractorMsg'
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
        $this->values[self::msg_list] = array();
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
     * Appends value to 'msg_list' list
     *
     * @param \service\message\common\ContractorMsg $value Value to append
     *
     * @return null
     */
    public function appendMsgList(\service\message\common\ContractorMsg $value)
    {
        return $this->append(self::msg_list, $value);
    }

    /**
     * Clears 'msg_list' list
     *
     * @return null
     */
    public function clearMsgList()
    {
        return $this->clear(self::msg_list);
    }

    /**
     * Returns 'msg_list' list
     *
     * @return \service\message\common\ContractorMsg[]
     */
    public function getMsgList()
    {
        return $this->get(self::msg_list);
    }

    /**
     * Returns 'msg_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getMsgListIterator()
    {
        return new \ArrayIterator($this->get(self::msg_list));
    }

    /**
     * Returns element from 'msg_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\ContractorMsg
     */
    public function getMsgListAt($offset)
    {
        return $this->get(self::msg_list, $offset);
    }

    /**
     * Returns count of 'msg_list' list
     *
     * @return int
     */
    public function getMsgListCount()
    {
        return $this->count(self::msg_list);
    }
}
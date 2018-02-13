<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorMsgInfoResponse message
 */
class ContractorMsgInfoResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const unread_list = 1;
    const unread_count = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::unread_list => array(
            'name' => 'unread_list',
            'repeated' => true,
            'type' => '\service\message\contractor\ContractorMsgInfoResponse_ContractorMsgTypeUnread'
        ),
        self::unread_count => array(
            'name' => 'unread_count',
            'required' => false,
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
        $this->values[self::unread_list] = array();
        $this->values[self::unread_count] = null;
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
     * Appends value to 'unread_list' list
     *
     * @param \service\message\contractor\ContractorMsgInfoResponse_ContractorMsgTypeUnread $value Value to append
     *
     * @return null
     */
    public function appendUnreadList(\service\message\contractor\ContractorMsgInfoResponse_ContractorMsgTypeUnread $value)
    {
        return $this->append(self::unread_list, $value);
    }

    /**
     * Clears 'unread_list' list
     *
     * @return null
     */
    public function clearUnreadList()
    {
        return $this->clear(self::unread_list);
    }

    /**
     * Returns 'unread_list' list
     *
     * @return \service\message\contractor\ContractorMsgInfoResponse_ContractorMsgTypeUnread[]
     */
    public function getUnreadList()
    {
        return $this->get(self::unread_list);
    }

    /**
     * Returns 'unread_list' iterator
     *
     * @return \ArrayIterator
     */
    public function getUnreadListIterator()
    {
        return new \ArrayIterator($this->get(self::unread_list));
    }

    /**
     * Returns element from 'unread_list' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\contractor\ContractorMsgInfoResponse_ContractorMsgTypeUnread
     */
    public function getUnreadListAt($offset)
    {
        return $this->get(self::unread_list, $offset);
    }

    /**
     * Returns count of 'unread_list' list
     *
     * @return int
     */
    public function getUnreadListCount()
    {
        return $this->count(self::unread_list);
    }

    /**
     * Sets value of 'unread_count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnreadCount($value)
    {
        return $this->set(self::unread_count, $value);
    }

    /**
     * Returns value of 'unread_count' property
     *
     * @return integer
     */
    public function getUnreadCount()
    {
        $value = $this->get(self::unread_count);
        return $value === null ? (integer)$value : $value;
    }
}
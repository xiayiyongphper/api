<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * GetTerminalNoResponse message
 */
class GetTerminalNoResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const terminal_no = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::terminal_no => array(
            'name' => 'terminal_no',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::terminal_no] = null;
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
     * Sets value of 'terminal_no' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTerminalNo($value)
    {
        return $this->set(self::terminal_no, $value);
    }

    /**
     * Returns value of 'terminal_no' property
     *
     * @return string
     */
    public function getTerminalNo()
    {
        $value = $this->get(self::terminal_no);
        return $value === null ? (string)$value : $value;
    }
}
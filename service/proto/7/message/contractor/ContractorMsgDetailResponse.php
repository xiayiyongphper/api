<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * ContractorMsgDetailResponse message
 */
class ContractorMsgDetailResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const detail = 1;
    const url = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::detail => array(
            'name' => 'detail',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::url => array(
            'name' => 'url',
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
        $this->values[self::detail] = null;
        $this->values[self::url] = null;
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
     * Sets value of 'detail' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDetail($value)
    {
        return $this->set(self::detail, $value);
    }

    /**
     * Returns value of 'detail' property
     *
     * @return string
     */
    public function getDetail()
    {
        $value = $this->get(self::detail);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::url, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::url);
        return $value === null ? (string)$value : $value;
    }
}
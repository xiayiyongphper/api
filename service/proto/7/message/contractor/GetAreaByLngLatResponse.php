<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * GetAreaByLngLatResponse message
 */
class GetAreaByLngLatResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const area_id = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::area_id => array(
            'name' => 'area_id',
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
        $this->values[self::area_id] = null;
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
     * Sets value of 'area_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAreaId($value)
    {
        return $this->set(self::area_id, $value);
    }

    /**
     * Returns value of 'area_id' property
     *
     * @return integer
     */
    public function getAreaId()
    {
        $value = $this->get(self::area_id);
        return $value === null ? (integer)$value : $value;
    }
}
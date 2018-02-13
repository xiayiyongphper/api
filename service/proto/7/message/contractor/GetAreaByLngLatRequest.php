<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * GetAreaByLngLatRequest message
 */
class GetAreaByLngLatRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const lat = 3;
    const lng = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::contractor_id => array(
            'name' => 'contractor_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::lat => array(
            'name' => 'lat',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::lng => array(
            'name' => 'lng',
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
        $this->values[self::contractor_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::lat] = null;
        $this->values[self::lng] = null;
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
     * Sets value of 'contractor_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContractorId($value)
    {
        return $this->set(self::contractor_id, $value);
    }

    /**
     * Returns value of 'contractor_id' property
     *
     * @return integer
     */
    public function getContractorId()
    {
        $value = $this->get(self::contractor_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'auth_token' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthToken($value)
    {
        return $this->set(self::auth_token, $value);
    }

    /**
     * Returns value of 'auth_token' property
     *
     * @return string
     */
    public function getAuthToken()
    {
        $value = $this->get(self::auth_token);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'lat' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setLat($value)
    {
        return $this->set(self::lat, $value);
    }

    /**
     * Returns value of 'lat' property
     *
     * @return double
     */
    public function getLat()
    {
        $value = $this->get(self::lat);
        return $value === null ? (double)$value : $value;
    }

    /**
     * Sets value of 'lng' property
     *
     * @param double $value Property value
     *
     * @return null
     */
    public function setLng($value)
    {
        return $this->set(self::lng, $value);
    }

    /**
     * Returns value of 'lng' property
     *
     * @return double
     */
    public function getLng()
    {
        $value = $this->get(self::lng);
        return $value === null ? (double)$value : $value;
    }
}
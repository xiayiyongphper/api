<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * SetStoreValidRequest message
 */
class SetStoreValidRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const store_id = 3;
    const is_intentioned = 4;
    const disabled = 5;

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
        self::store_id => array(
            'name' => 'store_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::is_intentioned => array(
            'name' => 'is_intentioned',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::disabled => array(
            'name' => 'disabled',
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
        $this->values[self::contractor_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::store_id] = null;
        $this->values[self::is_intentioned] = null;
        $this->values[self::disabled] = null;
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
     * Sets value of 'store_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStoreId($value)
    {
        return $this->set(self::store_id, $value);
    }

    /**
     * Returns value of 'store_id' property
     *
     * @return integer
     */
    public function getStoreId()
    {
        $value = $this->get(self::store_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'is_intentioned' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsIntentioned($value)
    {
        return $this->set(self::is_intentioned, $value);
    }

    /**
     * Returns value of 'is_intentioned' property
     *
     * @return integer
     */
    public function getIsIntentioned()
    {
        $value = $this->get(self::is_intentioned);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'disabled' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDisabled($value)
    {
        return $this->set(self::disabled, $value);
    }

    /**
     * Returns value of 'disabled' property
     *
     * @return integer
     */
    public function getDisabled()
    {
        $value = $this->get(self::disabled);
        return $value === null ? (integer)$value : $value;
    }
}
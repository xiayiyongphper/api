<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * GetStoreInfoRequest message
 */
class GetStoreInfoRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const customer_id = 3;
    const customer_style = 4;

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
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::customer_style => array(
            'name' => 'customer_style',
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
        $this->values[self::contractor_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::customer_style] = null;
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
     * Sets value of 'customer_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCustomerId($value)
    {
        return $this->set(self::customer_id, $value);
    }

    /**
     * Returns value of 'customer_id' property
     *
     * @return integer
     */
    public function getCustomerId()
    {
        $value = $this->get(self::customer_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'customer_style' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCustomerStyle($value)
    {
        return $this->set(self::customer_style, $value);
    }

    /**
     * Returns value of 'customer_style' property
     *
     * @return string
     */
    public function getCustomerStyle()
    {
        $value = $this->get(self::customer_style);
        return $value === null ? (string)$value : $value;
    }
}
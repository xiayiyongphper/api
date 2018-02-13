<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * MarkPriceDetailRequest message
 */
class MarkPriceDetailRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const product_id = 3;

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
        self::product_id => array(
            'name' => 'product_id',
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
        $this->values[self::contractor_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::product_id] = null;
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
     * Sets value of 'product_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setProductId($value)
    {
        return $this->set(self::product_id, $value);
    }

    /**
     * Returns value of 'product_id' property
     *
     * @return integer
     */
    public function getProductId()
    {
        $value = $this->get(self::product_id);
        return $value === null ? (integer)$value : $value;
    }
}
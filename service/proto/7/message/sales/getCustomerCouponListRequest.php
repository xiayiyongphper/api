<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * getCustomerCouponListRequest message
 */
class getCustomerCouponListRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const expire_list = 3;
    const pagination = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::customer_id => array(
            'name' => 'customer_id',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::expire_list => array(
            'name' => 'expire_list',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::pagination => array(
            'name' => 'pagination',
            'required' => false,
            'type' => '\service\message\common\Pagination'
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
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
        $this->values[self::expire_list] = null;
        $this->values[self::pagination] = null;
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
     * Sets value of 'expire_list' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpireList($value)
    {
        return $this->set(self::expire_list, $value);
    }

    /**
     * Returns value of 'expire_list' property
     *
     * @return integer
     */
    public function getExpireList()
    {
        $value = $this->get(self::expire_list);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'pagination' property
     *
     * @param \service\message\common\Pagination $value Property value
     *
     * @return null
     */
    public function setPagination(\service\message\common\Pagination $value=null)
    {
        return $this->set(self::pagination, $value);
    }

    /**
     * Returns value of 'pagination' property
     *
     * @return \service\message\common\Pagination
     */
    public function getPagination()
    {
        return $this->get(self::pagination);
    }
}
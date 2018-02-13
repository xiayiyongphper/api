<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * getProductRequest message
 */
class getProductRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const wholesaler_id = 1;
    const product_ids = 2;
    const recommend_num = 3;
    const customer_id = 4;
    const auth_token = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::wholesaler_id => array(
            'name' => 'wholesaler_id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::product_ids => array(
            'name' => 'product_ids',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::recommend_num => array(
            'name' => 'recommend_num',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
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
        $this->values[self::wholesaler_id] = null;
        $this->values[self::product_ids] = array();
        $this->values[self::recommend_num] = null;
        $this->values[self::customer_id] = null;
        $this->values[self::auth_token] = null;
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
     * Sets value of 'wholesaler_id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWholesalerId($value)
    {
        return $this->set(self::wholesaler_id, $value);
    }

    /**
     * Returns value of 'wholesaler_id' property
     *
     * @return integer
     */
    public function getWholesalerId()
    {
        $value = $this->get(self::wholesaler_id);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'product_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendProductIds($value)
    {
        return $this->append(self::product_ids, $value);
    }

    /**
     * Clears 'product_ids' list
     *
     * @return null
     */
    public function clearProductIds()
    {
        return $this->clear(self::product_ids);
    }

    /**
     * Returns 'product_ids' list
     *
     * @return integer[]
     */
    public function getProductIds()
    {
        return $this->get(self::product_ids);
    }

    /**
     * Returns 'product_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getProductIdsIterator()
    {
        return new \ArrayIterator($this->get(self::product_ids));
    }

    /**
     * Returns element from 'product_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getProductIdsAt($offset)
    {
        return $this->get(self::product_ids, $offset);
    }

    /**
     * Returns count of 'product_ids' list
     *
     * @return int
     */
    public function getProductIdsCount()
    {
        return $this->count(self::product_ids);
    }

    /**
     * Sets value of 'recommend_num' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRecommendNum($value)
    {
        return $this->set(self::recommend_num, $value);
    }

    /**
     * Returns value of 'recommend_num' property
     *
     * @return integer
     */
    public function getRecommendNum()
    {
        $value = $this->get(self::recommend_num);
        return $value === null ? (integer)$value : $value;
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
}
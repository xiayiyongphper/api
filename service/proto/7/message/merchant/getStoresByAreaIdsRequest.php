<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * getStoresByAreaIdsRequest message
 */
class getStoresByAreaIdsRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const area_ids = 1;
    const customer_id = 2;
    const auth_token = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::area_ids => array(
            'name' => 'area_ids',
            'repeated' => true,
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
        $this->values[self::area_ids] = array();
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
     * Appends value to 'area_ids' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendAreaIds($value)
    {
        return $this->append(self::area_ids, $value);
    }

    /**
     * Clears 'area_ids' list
     *
     * @return null
     */
    public function clearAreaIds()
    {
        return $this->clear(self::area_ids);
    }

    /**
     * Returns 'area_ids' list
     *
     * @return integer[]
     */
    public function getAreaIds()
    {
        return $this->get(self::area_ids);
    }

    /**
     * Returns 'area_ids' iterator
     *
     * @return \ArrayIterator
     */
    public function getAreaIdsIterator()
    {
        return new \ArrayIterator($this->get(self::area_ids));
    }

    /**
     * Returns element from 'area_ids' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getAreaIdsAt($offset)
    {
        return $this->get(self::area_ids, $offset);
    }

    /**
     * Returns count of 'area_ids' list
     *
     * @return int
     */
    public function getAreaIdsCount()
    {
        return $this->count(self::area_ids);
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
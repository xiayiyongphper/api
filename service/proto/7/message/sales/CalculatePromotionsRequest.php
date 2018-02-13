<?php
/**
 *
 * service.message.sales package
 */

namespace service\message\sales;
/**
 * CalculatePromotionsRequest message
 */
class CalculatePromotionsRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const customer_id = 1;
    const auth_token = 2;
    const items = 4;

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
        self::items => array(
            'name' => 'items',
            'repeated' => true,
            'type' => '\service\message\common\CalculateData'
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
        $this->values[self::items] = array();
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
     * Appends value to 'items' list
     *
     * @param \service\message\common\CalculateData $value Value to append
     *
     * @return null
     */
    public function appendItems(\service\message\common\CalculateData $value)
    {
        return $this->append(self::items, $value);
    }

    /**
     * Clears 'items' list
     *
     * @return null
     */
    public function clearItems()
    {
        return $this->clear(self::items);
    }

    /**
     * Returns 'items' list
     *
     * @return \service\message\common\CalculateData[]
     */
    public function getItems()
    {
        return $this->get(self::items);
    }

    /**
     * Returns 'items' iterator
     *
     * @return \ArrayIterator
     */
    public function getItemsIterator()
    {
        return new \ArrayIterator($this->get(self::items));
    }

    /**
     * Returns element from 'items' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\CalculateData
     */
    public function getItemsAt($offset)
    {
        return $this->get(self::items, $offset);
    }

    /**
     * Returns count of 'items' list
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->count(self::items);
    }
}
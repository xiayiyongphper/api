<?php
/**
 *
 * service.message.driver package
 */

namespace service\message\driver;
/**
 * OrderActionResponse message
 */
class OrderActionResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const message = 1;
    const order = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::message => array(
            'name' => 'message',
            'required' => false,
            'type' => '\service\message\common\Message'
        ),
        self::order => array(
            'name' => 'order',
            'required' => false,
            'type' => '\service\message\driver\DriverOrder'
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
        $this->values[self::message] = null;
        $this->values[self::order] = null;
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
     * Sets value of 'message' property
     *
     * @param \service\message\common\Message $value Property value
     *
     * @return null
     */
    public function setMessage(\service\message\common\Message $value=null)
    {
        return $this->set(self::message, $value);
    }

    /**
     * Returns value of 'message' property
     *
     * @return \service\message\common\Message
     */
    public function getMessage()
    {
        return $this->get(self::message);
    }

    /**
     * Sets value of 'order' property
     *
     * @param \service\message\driver\DriverOrder $value Property value
     *
     * @return null
     */
    public function setOrder(\service\message\driver\DriverOrder $value=null)
    {
        return $this->set(self::order, $value);
    }

    /**
     * Returns value of 'order' property
     *
     * @return \service\message\driver\DriverOrder
     */
    public function getOrder()
    {
        return $this->get(self::order);
    }
}
<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * FetchRouteResponse message
 */
class FetchRouteResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const services = 1;
    const mapping = 2;
    const short_tcp = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::services => array(
            'name' => 'services',
            'repeated' => true,
            'type' => '\service\message\common\Service'
        ),
        self::mapping => array(
            'name' => 'mapping',
            'repeated' => true,
            'type' => '\service\message\common\KeyValueItem'
        ),
        self::short_tcp => array(
            'default' => false,
            'name' => 'short_tcp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::services] = array();
        $this->values[self::mapping] = array();
        $this->values[self::short_tcp] = self::$fields[self::short_tcp]['default'];
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
     * Appends value to 'services' list
     *
     * @param \service\message\common\Service $value Value to append
     *
     * @return null
     */
    public function appendServices(\service\message\common\Service $value)
    {
        return $this->append(self::services, $value);
    }

    /**
     * Clears 'services' list
     *
     * @return null
     */
    public function clearServices()
    {
        return $this->clear(self::services);
    }

    /**
     * Returns 'services' list
     *
     * @return \service\message\common\Service[]
     */
    public function getServices()
    {
        return $this->get(self::services);
    }

    /**
     * Returns 'services' iterator
     *
     * @return \ArrayIterator
     */
    public function getServicesIterator()
    {
        return new \ArrayIterator($this->get(self::services));
    }

    /**
     * Returns element from 'services' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Service
     */
    public function getServicesAt($offset)
    {
        return $this->get(self::services, $offset);
    }

    /**
     * Returns count of 'services' list
     *
     * @return int
     */
    public function getServicesCount()
    {
        return $this->count(self::services);
    }

    /**
     * Appends value to 'mapping' list
     *
     * @param \service\message\common\KeyValueItem $value Value to append
     *
     * @return null
     */
    public function appendMapping(\service\message\common\KeyValueItem $value)
    {
        return $this->append(self::mapping, $value);
    }

    /**
     * Clears 'mapping' list
     *
     * @return null
     */
    public function clearMapping()
    {
        return $this->clear(self::mapping);
    }

    /**
     * Returns 'mapping' list
     *
     * @return \service\message\common\KeyValueItem[]
     */
    public function getMapping()
    {
        return $this->get(self::mapping);
    }

    /**
     * Returns 'mapping' iterator
     *
     * @return \ArrayIterator
     */
    public function getMappingIterator()
    {
        return new \ArrayIterator($this->get(self::mapping));
    }

    /**
     * Returns element from 'mapping' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\KeyValueItem
     */
    public function getMappingAt($offset)
    {
        return $this->get(self::mapping, $offset);
    }

    /**
     * Returns count of 'mapping' list
     *
     * @return int
     */
    public function getMappingCount()
    {
        return $this->count(self::mapping);
    }

    /**
     * Sets value of 'short_tcp' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setShortTcp($value)
    {
        return $this->set(self::short_tcp, $value);
    }

    /**
     * Returns value of 'short_tcp' property
     *
     * @return boolean
     */
    public function getShortTcp()
    {
        $value = $this->get(self::short_tcp);
        return $value === null ? (boolean)$value : $value;
    }
}
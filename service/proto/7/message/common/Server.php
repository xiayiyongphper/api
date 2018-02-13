<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * Server message
 */
class Server extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const memory = 1;
    const cpu = 2;
    const cores = 3;
    const loads = 4;
    const ip = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::memory => array(
            'name' => 'memory',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::cpu => array(
            'name' => 'cpu',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::cores => array(
            'name' => 'cores',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::loads => array(
            'name' => 'loads',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_FLOAT,
        ),
        self::ip => array(
            'name' => 'ip',
            'required' => true,
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
        $this->values[self::memory] = null;
        $this->values[self::cpu] = null;
        $this->values[self::cores] = null;
        $this->values[self::loads] = array();
        $this->values[self::ip] = null;
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
     * Sets value of 'memory' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMemory($value)
    {
        return $this->set(self::memory, $value);
    }

    /**
     * Returns value of 'memory' property
     *
     * @return integer
     */
    public function getMemory()
    {
        $value = $this->get(self::memory);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'cpu' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCpu($value)
    {
        return $this->set(self::cpu, $value);
    }

    /**
     * Returns value of 'cpu' property
     *
     * @return integer
     */
    public function getCpu()
    {
        $value = $this->get(self::cpu);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'cores' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCores($value)
    {
        return $this->set(self::cores, $value);
    }

    /**
     * Returns value of 'cores' property
     *
     * @return integer
     */
    public function getCores()
    {
        $value = $this->get(self::cores);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Appends value to 'loads' list
     *
     * @param double $value Value to append
     *
     * @return null
     */
    public function appendLoads($value)
    {
        return $this->append(self::loads, $value);
    }

    /**
     * Clears 'loads' list
     *
     * @return null
     */
    public function clearLoads()
    {
        return $this->clear(self::loads);
    }

    /**
     * Returns 'loads' list
     *
     * @return double[]
     */
    public function getLoads()
    {
        return $this->get(self::loads);
    }

    /**
     * Returns 'loads' iterator
     *
     * @return \ArrayIterator
     */
    public function getLoadsIterator()
    {
        return new \ArrayIterator($this->get(self::loads));
    }

    /**
     * Returns element from 'loads' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return double
     */
    public function getLoadsAt($offset)
    {
        return $this->get(self::loads, $offset);
    }

    /**
     * Returns count of 'loads' list
     *
     * @return int
     */
    public function getLoadsCount()
    {
        return $this->count(self::loads);
    }

    /**
     * Sets value of 'ip' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIp($value)
    {
        return $this->set(self::ip, $value);
    }

    /**
     * Returns value of 'ip' property
     *
     * @return string
     */
    public function getIp()
    {
        $value = $this->get(self::ip);
        return $value === null ? (string)$value : $value;
    }
}
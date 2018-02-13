<?php
/**
 *
 * service.message.core package
 */

namespace service\message\core;
/**
 * ReportRouteRequest message
 */
class ReportRouteRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const auth_token = 1;
    const remote_service = 2;
    const local_service = 3;
    const server = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::auth_token => array(
            'name' => 'auth_token',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::remote_service => array(
            'name' => 'remote_service',
            'repeated' => true,
            'type' => '\service\message\common\Service'
        ),
        self::local_service => array(
            'name' => 'local_service',
            'repeated' => true,
            'type' => '\service\message\common\Service'
        ),
        self::server => array(
            'name' => 'server',
            'required' => false,
            'type' => '\service\message\common\Server'
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
        $this->values[self::auth_token] = null;
        $this->values[self::remote_service] = array();
        $this->values[self::local_service] = array();
        $this->values[self::server] = null;
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
     * Appends value to 'remote_service' list
     *
     * @param \service\message\common\Service $value Value to append
     *
     * @return null
     */
    public function appendRemoteService(\service\message\common\Service $value)
    {
        return $this->append(self::remote_service, $value);
    }

    /**
     * Clears 'remote_service' list
     *
     * @return null
     */
    public function clearRemoteService()
    {
        return $this->clear(self::remote_service);
    }

    /**
     * Returns 'remote_service' list
     *
     * @return \service\message\common\Service[]
     */
    public function getRemoteService()
    {
        return $this->get(self::remote_service);
    }

    /**
     * Returns 'remote_service' iterator
     *
     * @return \ArrayIterator
     */
    public function getRemoteServiceIterator()
    {
        return new \ArrayIterator($this->get(self::remote_service));
    }

    /**
     * Returns element from 'remote_service' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Service
     */
    public function getRemoteServiceAt($offset)
    {
        return $this->get(self::remote_service, $offset);
    }

    /**
     * Returns count of 'remote_service' list
     *
     * @return int
     */
    public function getRemoteServiceCount()
    {
        return $this->count(self::remote_service);
    }

    /**
     * Appends value to 'local_service' list
     *
     * @param \service\message\common\Service $value Value to append
     *
     * @return null
     */
    public function appendLocalService(\service\message\common\Service $value)
    {
        return $this->append(self::local_service, $value);
    }

    /**
     * Clears 'local_service' list
     *
     * @return null
     */
    public function clearLocalService()
    {
        return $this->clear(self::local_service);
    }

    /**
     * Returns 'local_service' list
     *
     * @return \service\message\common\Service[]
     */
    public function getLocalService()
    {
        return $this->get(self::local_service);
    }

    /**
     * Returns 'local_service' iterator
     *
     * @return \ArrayIterator
     */
    public function getLocalServiceIterator()
    {
        return new \ArrayIterator($this->get(self::local_service));
    }

    /**
     * Returns element from 'local_service' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Service
     */
    public function getLocalServiceAt($offset)
    {
        return $this->get(self::local_service, $offset);
    }

    /**
     * Returns count of 'local_service' list
     *
     * @return int
     */
    public function getLocalServiceCount()
    {
        return $this->count(self::local_service);
    }

    /**
     * Sets value of 'server' property
     *
     * @param \service\message\common\Server $value Property value
     *
     * @return null
     */
    public function setServer(\service\message\common\Server $value=null)
    {
        return $this->set(self::server, $value);
    }

    /**
     * Returns value of 'server' property
     *
     * @return \service\message\common\Server
     */
    public function getServer()
    {
        return $this->get(self::server);
    }
}
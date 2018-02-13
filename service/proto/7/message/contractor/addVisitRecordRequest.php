<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * addVisitRecordRequest message
 */
class addVisitRecordRequest extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const action = 3;
    const record = 4;

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
        self::action => array(
            'default' => 1,
            'name' => 'action',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::record => array(
            'name' => 'record',
            'required' => false,
            'type' => '\service\message\contractor\VisitRecord'
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
        $this->values[self::action] = self::$fields[self::action]['default'];
        $this->values[self::record] = null;
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
     * Sets value of 'action' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAction($value)
    {
        return $this->set(self::action, $value);
    }

    /**
     * Returns value of 'action' property
     *
     * @return integer
     */
    public function getAction()
    {
        $value = $this->get(self::action);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Sets value of 'record' property
     *
     * @param \service\message\contractor\VisitRecord $value Property value
     *
     * @return null
     */
    public function setRecord(\service\message\contractor\VisitRecord $value=null)
    {
        return $this->set(self::record, $value);
    }

    /**
     * Returns value of 'record' property
     *
     * @return \service\message\contractor\VisitRecord
     */
    public function getRecord()
    {
        return $this->get(self::record);
    }
}
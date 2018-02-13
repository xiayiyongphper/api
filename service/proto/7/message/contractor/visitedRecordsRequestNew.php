<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * visitedRecordsRequestNew message
 */
class visitedRecordsRequestNew extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const contractor_id = 1;
    const auth_token = 2;
    const city = 3;
    const pagination = 4;
    const visit_date_start = 5;
    const visit_date_end = 6;
    const visit_purpose = 7;
    const visit_way = 8;
    const chosen_contractor_id = 9;
    const customer_id = 10;

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
        self::city => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::pagination => array(
            'name' => 'pagination',
            'required' => false,
            'type' => '\service\message\common\Pagination'
        ),
        self::visit_date_start => array(
            'name' => 'visit_date_start',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::visit_date_end => array(
            'name' => 'visit_date_end',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::visit_purpose => array(
            'name' => 'visit_purpose',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::visit_way => array(
            'name' => 'visit_way',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::chosen_contractor_id => array(
            'name' => 'chosen_contractor_id',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::customer_id => array(
            'name' => 'customer_id',
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
        $this->values[self::city] = null;
        $this->values[self::pagination] = null;
        $this->values[self::visit_date_start] = null;
        $this->values[self::visit_date_end] = null;
        $this->values[self::visit_purpose] = array();
        $this->values[self::visit_way] = array();
        $this->values[self::chosen_contractor_id] = array();
        $this->values[self::customer_id] = null;
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
     * Sets value of 'city' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::city, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return integer
     */
    public function getCity()
    {
        $value = $this->get(self::city);
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

    /**
     * Sets value of 'visit_date_start' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVisitDateStart($value)
    {
        return $this->set(self::visit_date_start, $value);
    }

    /**
     * Returns value of 'visit_date_start' property
     *
     * @return string
     */
    public function getVisitDateStart()
    {
        $value = $this->get(self::visit_date_start);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Sets value of 'visit_date_end' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVisitDateEnd($value)
    {
        return $this->set(self::visit_date_end, $value);
    }

    /**
     * Returns value of 'visit_date_end' property
     *
     * @return string
     */
    public function getVisitDateEnd()
    {
        $value = $this->get(self::visit_date_end);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'visit_purpose' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendVisitPurpose($value)
    {
        return $this->append(self::visit_purpose, $value);
    }

    /**
     * Clears 'visit_purpose' list
     *
     * @return null
     */
    public function clearVisitPurpose()
    {
        return $this->clear(self::visit_purpose);
    }

    /**
     * Returns 'visit_purpose' list
     *
     * @return string[]
     */
    public function getVisitPurpose()
    {
        return $this->get(self::visit_purpose);
    }

    /**
     * Returns 'visit_purpose' iterator
     *
     * @return \ArrayIterator
     */
    public function getVisitPurposeIterator()
    {
        return new \ArrayIterator($this->get(self::visit_purpose));
    }

    /**
     * Returns element from 'visit_purpose' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getVisitPurposeAt($offset)
    {
        return $this->get(self::visit_purpose, $offset);
    }

    /**
     * Returns count of 'visit_purpose' list
     *
     * @return int
     */
    public function getVisitPurposeCount()
    {
        return $this->count(self::visit_purpose);
    }

    /**
     * Appends value to 'visit_way' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendVisitWay($value)
    {
        return $this->append(self::visit_way, $value);
    }

    /**
     * Clears 'visit_way' list
     *
     * @return null
     */
    public function clearVisitWay()
    {
        return $this->clear(self::visit_way);
    }

    /**
     * Returns 'visit_way' list
     *
     * @return string[]
     */
    public function getVisitWay()
    {
        return $this->get(self::visit_way);
    }

    /**
     * Returns 'visit_way' iterator
     *
     * @return \ArrayIterator
     */
    public function getVisitWayIterator()
    {
        return new \ArrayIterator($this->get(self::visit_way));
    }

    /**
     * Returns element from 'visit_way' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getVisitWayAt($offset)
    {
        return $this->get(self::visit_way, $offset);
    }

    /**
     * Returns count of 'visit_way' list
     *
     * @return int
     */
    public function getVisitWayCount()
    {
        return $this->count(self::visit_way);
    }

    /**
     * Appends value to 'chosen_contractor_id' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendChosenContractorId($value)
    {
        return $this->append(self::chosen_contractor_id, $value);
    }

    /**
     * Clears 'chosen_contractor_id' list
     *
     * @return null
     */
    public function clearChosenContractorId()
    {
        return $this->clear(self::chosen_contractor_id);
    }

    /**
     * Returns 'chosen_contractor_id' list
     *
     * @return integer[]
     */
    public function getChosenContractorId()
    {
        return $this->get(self::chosen_contractor_id);
    }

    /**
     * Returns 'chosen_contractor_id' iterator
     *
     * @return \ArrayIterator
     */
    public function getChosenContractorIdIterator()
    {
        return new \ArrayIterator($this->get(self::chosen_contractor_id));
    }

    /**
     * Returns element from 'chosen_contractor_id' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getChosenContractorIdAt($offset)
    {
        return $this->get(self::chosen_contractor_id, $offset);
    }

    /**
     * Returns count of 'chosen_contractor_id' list
     *
     * @return int
     */
    public function getChosenContractorIdCount()
    {
        return $this->count(self::chosen_contractor_id);
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
}
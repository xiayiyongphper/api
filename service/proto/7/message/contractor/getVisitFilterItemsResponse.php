<?php
/**
 *
 * service.message.contractor package
 */

namespace service\message\contractor;
/**
 * getVisitFilterItemsResponse message
 */
class getVisitFilterItemsResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const visit_purpose_options = 1;
    const visit_way_options = 2;
    const contractors = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::visit_purpose_options => array(
            'name' => 'visit_purpose_options',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::visit_way_options => array(
            'name' => 'visit_way_options',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::contractors => array(
            'name' => 'contractors',
            'repeated' => true,
            'type' => '\service\message\contractor\ContractorResponse'
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
        $this->values[self::visit_purpose_options] = array();
        $this->values[self::visit_way_options] = array();
        $this->values[self::contractors] = array();
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
     * Appends value to 'visit_purpose_options' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendVisitPurposeOptions($value)
    {
        return $this->append(self::visit_purpose_options, $value);
    }

    /**
     * Clears 'visit_purpose_options' list
     *
     * @return null
     */
    public function clearVisitPurposeOptions()
    {
        return $this->clear(self::visit_purpose_options);
    }

    /**
     * Returns 'visit_purpose_options' list
     *
     * @return string[]
     */
    public function getVisitPurposeOptions()
    {
        return $this->get(self::visit_purpose_options);
    }

    /**
     * Returns 'visit_purpose_options' iterator
     *
     * @return \ArrayIterator
     */
    public function getVisitPurposeOptionsIterator()
    {
        return new \ArrayIterator($this->get(self::visit_purpose_options));
    }

    /**
     * Returns element from 'visit_purpose_options' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getVisitPurposeOptionsAt($offset)
    {
        return $this->get(self::visit_purpose_options, $offset);
    }

    /**
     * Returns count of 'visit_purpose_options' list
     *
     * @return int
     */
    public function getVisitPurposeOptionsCount()
    {
        return $this->count(self::visit_purpose_options);
    }

    /**
     * Appends value to 'visit_way_options' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendVisitWayOptions($value)
    {
        return $this->append(self::visit_way_options, $value);
    }

    /**
     * Clears 'visit_way_options' list
     *
     * @return null
     */
    public function clearVisitWayOptions()
    {
        return $this->clear(self::visit_way_options);
    }

    /**
     * Returns 'visit_way_options' list
     *
     * @return string[]
     */
    public function getVisitWayOptions()
    {
        return $this->get(self::visit_way_options);
    }

    /**
     * Returns 'visit_way_options' iterator
     *
     * @return \ArrayIterator
     */
    public function getVisitWayOptionsIterator()
    {
        return new \ArrayIterator($this->get(self::visit_way_options));
    }

    /**
     * Returns element from 'visit_way_options' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getVisitWayOptionsAt($offset)
    {
        return $this->get(self::visit_way_options, $offset);
    }

    /**
     * Returns count of 'visit_way_options' list
     *
     * @return int
     */
    public function getVisitWayOptionsCount()
    {
        return $this->count(self::visit_way_options);
    }

    /**
     * Appends value to 'contractors' list
     *
     * @param \service\message\contractor\ContractorResponse $value Value to append
     *
     * @return null
     */
    public function appendContractors(\service\message\contractor\ContractorResponse $value)
    {
        return $this->append(self::contractors, $value);
    }

    /**
     * Clears 'contractors' list
     *
     * @return null
     */
    public function clearContractors()
    {
        return $this->clear(self::contractors);
    }

    /**
     * Returns 'contractors' list
     *
     * @return \service\message\contractor\ContractorResponse[]
     */
    public function getContractors()
    {
        return $this->get(self::contractors);
    }

    /**
     * Returns 'contractors' iterator
     *
     * @return \ArrayIterator
     */
    public function getContractorsIterator()
    {
        return new \ArrayIterator($this->get(self::contractors));
    }

    /**
     * Returns element from 'contractors' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\contractor\ContractorResponse
     */
    public function getContractorsAt($offset)
    {
        return $this->get(self::contractors, $offset);
    }

    /**
     * Returns count of 'contractors' list
     *
     * @return int
     */
    public function getContractorsCount()
    {
        return $this->count(self::contractors);
    }
}
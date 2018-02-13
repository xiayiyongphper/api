<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * searchSuggestResponse message
 */
class searchSuggestResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const suggest = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::suggest => array(
            'name' => 'suggest',
            'repeated' => true,
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
        $this->values[self::suggest] = array();
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
     * Appends value to 'suggest' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendSuggest($value)
    {
        return $this->append(self::suggest, $value);
    }

    /**
     * Clears 'suggest' list
     *
     * @return null
     */
    public function clearSuggest()
    {
        return $this->clear(self::suggest);
    }

    /**
     * Returns 'suggest' list
     *
     * @return string[]
     */
    public function getSuggest()
    {
        return $this->get(self::suggest);
    }

    /**
     * Returns 'suggest' iterator
     *
     * @return \ArrayIterator
     */
    public function getSuggestIterator()
    {
        return new \ArrayIterator($this->get(self::suggest));
    }

    /**
     * Returns element from 'suggest' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getSuggestAt($offset)
    {
        return $this->get(self::suggest, $offset);
    }

    /**
     * Returns count of 'suggest' list
     *
     * @return int
     */
    public function getSuggestCount()
    {
        return $this->count(self::suggest);
    }
}
<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * TagGroup message
 */
class TagGroup extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const group_name = 1;
    const tags = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::group_name => array(
            'name' => 'group_name',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::tags => array(
            'name' => 'tags',
            'repeated' => true,
            'type' => '\service\message\common\Tag'
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
        $this->values[self::group_name] = null;
        $this->values[self::tags] = array();
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
     * Sets value of 'group_name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGroupName($value)
    {
        return $this->set(self::group_name, $value);
    }

    /**
     * Returns value of 'group_name' property
     *
     * @return string
     */
    public function getGroupName()
    {
        $value = $this->get(self::group_name);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Appends value to 'tags' list
     *
     * @param \service\message\common\Tag $value Value to append
     *
     * @return null
     */
    public function appendTags(\service\message\common\Tag $value)
    {
        return $this->append(self::tags, $value);
    }

    /**
     * Clears 'tags' list
     *
     * @return null
     */
    public function clearTags()
    {
        return $this->clear(self::tags);
    }

    /**
     * Returns 'tags' list
     *
     * @return \service\message\common\Tag[]
     */
    public function getTags()
    {
        return $this->get(self::tags);
    }

    /**
     * Returns 'tags' iterator
     *
     * @return \ArrayIterator
     */
    public function getTagsIterator()
    {
        return new \ArrayIterator($this->get(self::tags));
    }

    /**
     * Returns element from 'tags' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Tag
     */
    public function getTagsAt($offset)
    {
        return $this->get(self::tags, $offset);
    }

    /**
     * Returns count of 'tags' list
     *
     * @return int
     */
    public function getTagsCount()
    {
        return $this->count(self::tags);
    }
}
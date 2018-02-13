<?php
/**
 *
 * service.message.merchant package
 */

namespace service\message\merchant;
/**
 * searchProductByBarcodeResponse message
 */
class searchProductByBarcodeResponse extends \framework\protocolbuffers\Message
{
    /* Field index constants */
    const barcode_search_result = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::barcode_search_result => array(
            'name' => 'barcode_search_result',
            'repeated' => true,
            'type' => '\service\message\common\Thematic'
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
        $this->values[self::barcode_search_result] = array();
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
     * Appends value to 'barcode_search_result' list
     *
     * @param \service\message\common\Thematic $value Value to append
     *
     * @return null
     */
    public function appendBarcodeSearchResult(\service\message\common\Thematic $value)
    {
        return $this->append(self::barcode_search_result, $value);
    }

    /**
     * Clears 'barcode_search_result' list
     *
     * @return null
     */
    public function clearBarcodeSearchResult()
    {
        return $this->clear(self::barcode_search_result);
    }

    /**
     * Returns 'barcode_search_result' list
     *
     * @return \service\message\common\Thematic[]
     */
    public function getBarcodeSearchResult()
    {
        return $this->get(self::barcode_search_result);
    }

    /**
     * Returns 'barcode_search_result' iterator
     *
     * @return \ArrayIterator
     */
    public function getBarcodeSearchResultIterator()
    {
        return new \ArrayIterator($this->get(self::barcode_search_result));
    }

    /**
     * Returns element from 'barcode_search_result' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \service\message\common\Thematic
     */
    public function getBarcodeSearchResultAt($offset)
    {
        return $this->get(self::barcode_search_result, $offset);
    }

    /**
     * Returns count of 'barcode_search_result' list
     *
     * @return int
     */
    public function getBarcodeSearchResultCount()
    {
        return $this->count(self::barcode_search_result);
    }
}
<?php
/**
 *
 * service.message.syncProcess package
 */

namespace service\message\syncprocess;
/**
 * Status enum
 */
final class Status
{
    const NEW = 1;
    const PROCESSING = 2;
    const FAIL = 3;
    const APPLIED = 4;
    const CLOSE = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NEW' => self::NEW,
            'PROCESSING' => self::PROCESSING,
            'FAIL' => self::FAIL,
            'APPLIED' => self::APPLIED,
            'CLOSE' => self::CLOSE,
        );
    }
}
<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * Operation enum
 */
final class Operation
{
    const SELECT = 1;
    const UPDATE = 2;
    const DELETE = 3;
    const INSERT = 4;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SELECT' => self::SELECT,
            'UPDATE' => self::UPDATE,
            'DELETE' => self::DELETE,
            'INSERT' => self::INSERT,
        );
    }
}
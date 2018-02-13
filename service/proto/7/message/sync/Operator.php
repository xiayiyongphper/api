<?php
/**
 *
 * service.message.sync package
 */

namespace service\message\sync;
/**
 * Operator enum
 */
final class Operator
{
    const NORMAL = 1;
    const ADD = 2;
    const SUBTRACT = 3;
    const MULTIPLY = 4;
    const DEVIDE = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'NORMAL' => self::NORMAL,
            'ADD' => self::ADD,
            'SUBTRACT' => self::SUBTRACT,
            'MULTIPLY' => self::MULTIPLY,
            'DEVIDE' => self::DEVIDE,
        );
    }
}
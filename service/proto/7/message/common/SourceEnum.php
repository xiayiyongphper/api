<?php
/**
 *
 * service.message.common package
 */

namespace service\message\common;
/**
 * SourceEnum enum
 */
final class SourceEnum
{
    const PCWEB = 1;
    const ANDROID_SHOP = 2;
    const IOS_SHOP = 3;
    const CORE = 4;
    const MERCHANT = 5;
    const CUSTOMER = 6;
    const ANDROID_CASH = 7;
    const SYNC = 8;
    const SYNC_PROCESS = 9;
    const IOS_DRIVER = 10;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'PCWEB' => self::PCWEB,
            'ANDROID_SHOP' => self::ANDROID_SHOP,
            'IOS_SHOP' => self::IOS_SHOP,
            'CORE' => self::CORE,
            'MERCHANT' => self::MERCHANT,
            'CUSTOMER' => self::CUSTOMER,
            'ANDROID_CASH' => self::ANDROID_CASH,
            'SYNC' => self::SYNC,
            'SYNC_PROCESS' => self::SYNC_PROCESS,
            'IOS_DRIVER' => self::IOS_DRIVER,
        );
    }
}
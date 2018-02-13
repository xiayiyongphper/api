<?php
/**
 * Created by Jason.
 * Author: Jason Y. Wang
 * Date: 2016/1/25
 * Time: 13:35
 */

namespace service\server;

use yii\base\Exception;

class ServerException extends Exception
{
    const SERVICE_NOT_AVAILABLE = 10001;
    const SERVICE_NOT_AVAILABLE_TEXT = '系统错误，请稍后重试！';
    const SYSTEM_MAINTENANCE = 10002;
    const SYSTEM_MAINTENANCE_TEXT = '系统维护中，请稍后重试';
    const SYSTEM_NOT_FOUND = 10003;
    const SYSTEM_NOT_FOUND_TEXT = '找不到相关信息';
    const RESOURCE_NOT_FOUND = 10004;
    const RESOURCE_NOT_FOUND_TEXT = '找不到相关资源';
    const INVALID_REQUEST_ROUTE = 10005;
    const INVALID_REQUEST_ROUTE_TEXT = '非法的请求';

    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }

    public static function customerSystemMaintenance()
    {
        throw new ServerException(self::SYSTEM_MAINTENANCE_TEXT, self::SYSTEM_MAINTENANCE);
    }

    public static function customerSystemError()
    {
        throw new ServerException(self::SERVICE_NOT_AVAILABLE_TEXT, self::SERVICE_NOT_AVAILABLE);
    }

    public static function resourceNotFound()
    {
        throw new ServerException(self::RESOURCE_NOT_FOUND_TEXT, self::RESOURCE_NOT_FOUND);
    }

    public static function systemNotFound()
    {
        throw new ServerException(self::SYSTEM_NOT_FOUND_TEXT, self::SYSTEM_NOT_FOUND);
    }

    public static function invalidRequestRoute()
    {
        throw new ServerException(self::INVALID_REQUEST_ROUTE_TEXT, self::INVALID_REQUEST_ROUTE);
    }

}
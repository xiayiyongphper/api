<?php
namespace common\proxy;

use framework\message\Message;
use service\message\common\Header;
use service\message\common\SourceEnum;
use service\Tools\Tools;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/25
 * Time: 11:02
 */
class Proxy
{

    public static function getRoute($route,$host){
        $host = $host?:(isset($_COOKIE['host'])?$_COOKIE['host']:'127.0.0.1');
        if($route == 'route.fetch'){
            return [$host,'9091'];
        }else{
            $routeCollection = unserialize($_COOKIE['route']);
            $arg = explode('.',$route);
            return explode(':',$routeCollection[$arg[0]]);
        }

    }

    /**
     * Function: initHeader
     * Author: Jason Y. Wang
     *
     * @param $route
     * @param $version
     * @return Header
     */
    protected static function initHeader($route,$version){
        if($route){
            $header = new Header();
            $header->setVersion($version);
            $header->setRoute($route);
            $header->setSource(SourceEnum::ANDROID_SHOP);
            return $header;
        }else{
            return null;
        }
    }

    public static function sendRequest($route, $request, $version = 1,$host = null)
    {
        list($ip, $port) = self::getRoute($route,$host);
        $client = self::getClient($ip, $port);
        $header = self::initHeader($route,$version);
        //Tools::log(Message::pack($header, $request),'wangyang.log');
        $client->send(Message::pack($header, $request));
        $result = $client->recv();
        $message = new Message();
        //只要返回result，就说明message可以解包，不然会抛出异常。一定会有包头，包体可能为空
        $message->unpackResponse($result);
        return $message;
    }

    /**
     * @param $ip
     * @param $port
     * @return \swoole_client
     * @throws CustomerException
     */
    protected static function getClient($ip, $port)
    {
        $client = new \swoole_client(SWOOLE_SOCK_TCP);
        $client->set(array(
            'open_length_check'     => 1,
            'package_length_type'   => 'N',
            'package_length_offset' => 0,       //第N个字节是包长度的值
            'package_body_offset'   => 4,       //第几个字节开始计算长度
            'package_max_length'    => 2000000,  //协议最大长度
            'socket_buffer_size'    => 1024 * 1024 * 2, //2M缓存区
        ));
        $client->connect($ip, $port,30);
        return $client;
    }


}
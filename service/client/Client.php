<?php
/**
 * Created by Jason.
 * Author: Jason Y. Wang
 * Date: 2016/3/25
 * Time: 14:20
 */

namespace service\client;

use service\message\common\Header;
use service\message\common\SourceEnum;
use service\message\Message;
use yii\base\Application;
use yii\base\Exception;
use yii\base\Response;

class Client extends Application
{
    public $host;
    public $port;

    /**
     * Function: initHeader
     * Author: Jason Y. Wang
     *
     * @param $route
     * @return Header
     */
    public static function initHeader($route){
        if($route){
            $header = new Header();
            $header->setVersion(1);
            $header->setRoute($route);
            $header->setSource(SourceEnum::CUSTOMER);
            return $header;
        }else{
            return null;
        }
    }

    /**
     * Handles the specified request.
     *
     * This method should return an instance of [[Response]] or its child class
     * which represents the handling result of the request.
     *
     * @param Request $request the request to be handled
     * @return Response the resulting response
     */
    public function handleRequest($request)
    {
        parent::handleRequest($request);
    }

    public function send($header,$request)
    {
        $client = new \swoole_client(SWOOLE_SOCK_TCP);
        if (!$client->connect($this->host,$this->port,5)) {
            throw new Exception('connect error');
        }
        $client->send(Message::pack($header,$request));
        $result = $client->recv();
        return $result;
    }

}
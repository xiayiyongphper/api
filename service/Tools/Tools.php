<?php
namespace service\Tools;

use common\proxy\Proxy;
use service\message\common\Service;
use service\message\core\FetchRouteRequest;
use service\message\core\FetchRouteResponse;
use Yii;

/**
 * public function
 */
class Tools
{

    public static function log($data,$filename = null)
    {
        if(!$filename){
            $filename = 'system.log';
        }
        $file = dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR .'log'. DIRECTORY_SEPARATOR . $filename;
        file_put_contents($file, print_r($data,true) . PHP_EOL, FILE_APPEND);
    }

    /**
     * @param \Exception $e
     * @param null $filename
     */
    public static function logException($e,$filename = null)
    {
        if(!$filename){
            $filename = 'exception.log';
        }
        $file = dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR .'log'. DIRECTORY_SEPARATOR . $filename;
        file_put_contents($file, '['.date('Y-m-d H:i:s',time()).'] '.$e->__toString() . PHP_EOL, FILE_APPEND);
    }

    public static function getRoute($host){

        $request = new FetchRouteRequest();
        $request->setAuthToken('yggBfivOTkMOFNDm');
        $result = Proxy::sendRequest('route.fetch',$request,1,$host);
        $header = $result->getHeader();
        if($header->getCode() == 0){
            $response = new FetchRouteResponse();
            $response->parseFromString($result->getPackageBody());
//            $response = FetchRouteResponse::parseFromString($result->getPackageBody());
            $routes = $response->getServices();
            $routeCollection = [];
            /** @var Service $route */
            foreach ($routes as $route){
                $routeCollection[$route->getModule()] = $route->getIp().':'.$route->getPort();
            }
            setcookie('route',serialize($routeCollection),time()+315360000);
        }
    }

}
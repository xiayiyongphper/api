<?php
namespace service\server;

use service\message\common\ResponseHeader;
use service\Tools\ServerException;


/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/8
 * Time: 16:19
 */
class Application extends \yii\base\Application
{
    public $resources = [];
    const OPTION_APPCONFIG = 'appconfig';

    protected $_handleRequest;

    /**
     * @param \yii\base\Request $request
     * @return int|\yii\console\Response|\yii\web\Response
     * @throws ServerException
     */
    public function handleRequest($request)
    {
        /** @var \service\message\common\Header $header */
        list ($header, $params) = $request->resolve();
        $this->requestedRoute = $header->getRoute();
        $this->_handleRequest = $request;
        $result = $this->runAction($header, $params);
        return $result;
    }

    /**
     * Runs a controller action specified by a route.
     * This method parses the specified route and creates the corresponding child module(s), controller and action
     * instances. It then calls [[Controller::runAction()]] to run the action with the given parameters.
     * If the route is empty, the method will use [[defaultRoute]].
     * @param string $route the route that specifies the action.
     * @param array $params the parameters to be passed to the action
     * @return mixed the result of the action.
     * @throws ServerException if the requested route cannot be resolved into an action successfully
     */
    public function runAction($route, $params = [])
    {

        /** @var \service\message\common\Header $header */
        $header = $route;
        $methodName = 'run';
        $responseHeader = new ResponseHeader();
        $responseHeader->setTimestamp(date('Y-m-d H:i:s'));
        $responseHeader->setCode(0);
        $responseHeader->setRoute($header->getRoute());
        $data = false;
        if($header->getRequestId()){
            $responseHeader->setRequestId($header->getRequestId());
        }
        try{
            $className = $this->getResource($header->getRoute(),$header->getVersion());
            /** @var  Controller $model */
            if(class_exists($className)){
                $model = new $className($header);
            }else{
                ServerException::invalidRequestRoute();
            }
            if (method_exists($model, $methodName) &&  $model instanceof Controller) {
//                /** @var \ProtocolBuffers\Message $data */
                $model->setHeader($header);//修改
                $model->setRequest($this->_handleRequest);//修改
                $data = $model->$methodName($params);
            } else {
                ServerException::invalidRequestRoute();
            }
        }catch (\Exception $e){
            $responseHeader->setCode($e->getCode());
            $responseHeader->setMsg($e->getMessage());
        }
        return [$responseHeader,$data];
    }

    public function getResource($route, $version)
    {
        $parts = explode('.', $route);
        $version = 'v' . $version;
        if (count($parts) == 2) {
            $path = $parts[0];
            $fileName = $parts[1];
            if (isset($this->resources[$path])) {
                return $this->resources[$path] . '\\' . $version . '\\' . $fileName;
            } else {
                ServerException::resourceNotFound();
            }
        }else{
            ServerException::invalidRequestRoute();
        }
    }

    /**
     * Returns the request component.
     * @return \yii\web\Request|\yii\console\Request|\service\Request the request component.
     */
    public function getRequest()
    {
        return $this->get('request');
    }
}
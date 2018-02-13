<?php
namespace frontend\controllers;

use common\proxy\Proxy;
use frontend\test\TestAbstract;
use service\message\customer\CustomerResponse;
use service\Tools\Tools;
use yii\web\Controller;

/**
 * Site controller
 */
class IndexController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionError()
    {

        return $this->render('index', [
            'exception' => \Yii::$app->errorHandler->exception
        ]);
    }

    public function actionHost()
    {

        $params = \Yii::$app->getRequest()->get();
        $host = $params['host'];
        setcookie('host',$host,time()+315360000);
        //拿到路由表
        Tools::getRoute($host);
        $this->redirect('index');
    }

    public function actionIndex()
    {
        $class = \Yii::$app->getRequest()->get('class')?:'CustomerLogin';
        $module = \Yii::$app->getRequest()->get('module')?:'customer';
        $model = 'frontend\test\\'.$module.'\\'.$class;
        $model = new $model();
//        print_r($model);
//        exit();
        //请求接口
        $returnClass = null;
        $menu = $this->generateMenu();
        return $this->render('index', [
            'menu' => $menu,
            'model' => $model,
        ]);

    }

    private function generateMenu(){
        $testPath = \Yii::getAlias('@test');
        $directories = scandir($testPath);
//        print_r($directories);
        $testClasses = [];
        foreach ($directories as $directory) {
            if(strpos($directory,'.') === false){
                $filePath = $testPath . '/'.$directory;
                $files = scandir($filePath);
                foreach ($files as $file) {
                    if ($file != '.' && $file != '..') {
                        $fileInfo = pathinfo($file);
                        $className = $fileInfo['filename'];
                        $model = 'frontend\test\\'.$directory.'\\'.$fileInfo['filename'];
                        //print_r($class);
                        $model = new $model();
//                        if(is_null($returnClass)){
//                            $returnClass = $model;
//                        }
//                        if($class == $className){
//                            $returnClass = $model;
//                        }
                        $testClasses[$directory][$className]['name'] = $model->name;
                        $testClasses[$directory][$className]['class'] = $className;
                    }
                }
            }
        }
        $menu = $this->menu($testClasses);
        return $menu;
    }

    /**
     * @param $testData
     * Author Jason Y. wang
     *
     * @return array
     */
    protected function menu($testData){
        $items = [];
        foreach ($testData as $key => $testClasses){
            $item = [];
            $item['label'] = $key;
            $item['active'] = true;
            foreach ($testClasses as $testClass){
                $class['label'] = $testClass['name'];
                $class['url'] = \Yii::$app->getHomeUrl().'index?module='.$key.'&class='.$testClass['class'];
                $item['items'][] = $class;

            }
            $items[] = $item;
        }
        return $items;
    }


    public function actionSend()
    {

        if(isset($_COOKIE['customer_id']) && isset($_COOKIE['auth_token'])){
            $customer = [
                'customer_id' => $_COOKIE['customer_id'],
                'auth_token' => $_COOKIE['auth_token'],
            ];
        }else{
            $customer = [
                'customer_id' => 1057,
                'auth_token' => '222222',
            ];
        }
        $menu = $this->generateMenu();

        $params = \Yii::$app->getRequest()->post();
        $class = $params['class'];

        /** @var TestAbstract $testModel */
        $testModel = new $class();
        $data = $testModel->generateData($params);
        //请求PB类
        /** @var \ProtocolBuffers\Message $request */
        $request = $testModel->request;
        $request = new $request();
        try{
            if(strstr($testModel->route,'contractor') == false){
                $addIdentifyData = array_merge($data,$customer);
            }else{
                $addIdentifyData = $data;
            }

            $request->setFrom($addIdentifyData);

        }catch (\Exception $e){
            $request->setFrom($data);
        }
//        print_r($addIdentifyData);
//        print_r($request->toArray());
//        exit();
        //返回PB类
        $response = $testModel->response;

        if(!empty($response)){
            /** @var \ProtocolBuffers\Message $responseModel */
            $responseModel = new $response();
        }

        //print_r($response);
        //发送请求
        $startTime = microtime(true);
//        print_r($request->toArray());
//        exit();
        $result = Proxy::sendRequest($testModel->route, $request);

        $endTime = microtime(true);
        $time = $endTime - $startTime;
        $header = $result->getHeader();
        try {
            $responseModel->parseFromString($result->getPackageBody());
//            print_r($responseModel);
//            exit();
            if($testModel->route == 'customers.login'){
                /** @var CustomerResponse $body */
                setcookie('customer_id',$responseModel->getCustomerId(),time()+315360000);
                setcookie('auth_token',$responseModel->getAuthToken(),time()+315360000);
            }
//            print_r($responseModel);
//            exit();
            $body = $responseModel->toArray();


        } catch (\Exception $e) {
            print_r($e);exit();
            $body = null;
        }

        return $this->render('api', [
            'request' => $request,
            'response' => $response,
            'route' => $testModel->route,
            'header' => $header->toArray(),
//            'header' => $header,
//            'body' => $body,
            'body' => $body,
            'menu' => $menu,
            'time' => $time
        ]);
    }



}

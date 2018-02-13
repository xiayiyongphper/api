<?php
namespace frontend\controllers;

use common\proxy\Proxy;
use service\message\common\CategoryNode;
use service\message\common\MarkPriceProduct;
use service\message\common\Pagination;
use service\message\contractor\ContractorAuthenticationRequest;
use service\message\contractor\ContractorResponse;
use service\message\contractor\EditStoreInfoRequest;
use service\message\contractor\EditStoreInfoResponse;
use service\message\contractor\GetAreaByLngLatRequest;
use service\message\contractor\GetAreaByLngLatResponse;
use service\message\contractor\GetStoreInfoRequest;
use service\message\contractor\GetStoreInfoResponse;
use service\message\contractor\GetUnReviewStoresRequest;
use service\message\contractor\HomeResponse;
use service\message\contractor\MarkPriceDetailRequest;
use service\message\contractor\MarkPriceProductListRequest;
use service\message\contractor\MarkPriceProductListResponse;
use service\message\contractor\MarkPriceRequest;
use service\message\contractor\QuickRegisterCustomerRequest;
use service\message\contractor\SmsLoginRequest;
use service\message\contractor\StoresListRequest;
use service\message\contractor\StoresResponse;
use service\message\core\getCategoryRequest;
use service\message\customer\CustomerResponse;
use service\message\customer\GetSmsRequest;
use yii\web\Controller;

/**
 * Site controller
 */
class ContractorController extends Controller
{
    //203
//    public $username = '15118841518';
//    public $password = 'e10adc3949ba59abbe56e057f20f883e';
//    public $auth_token = 'ruJbfJqVoo9DRdEz';
//    public $customer_id = '3850';

//线上
    public $phone = '18682002348';
    public $code = '8888';
    public $type = 1;
    public $contractor_id = '96';
    public $auth_token = 'ZiH20sEV0LklAPiF';
    public $sms_token = '9gdgtq7eym0579dobesmqm5ze0ig3mpm';
    public $lat = '22.541284';
    public $lng = '113.960701';

//    public $phone = '18682002348';
//    public $auth_token = 'u6riyHcHM2ch2cGC';
//    public $contractor_id = '17';

    //线上
//    public $username = '18682002348';
//    public $password = 'e10adc3949ba59abbe56e057f20f883e';
//    public $auth_token = 'fZbiS17N9wsb5ost';
//    public $customer_id = '1088';


    public function actionError(){
        return $this->render('index',[
            'exception' => \Yii::$app->errorHandler->exception
        ]);
    }

    public function actionContractorsms()
    {
        $route = 'contractor.sms';
        $request = new GetSmsRequest();
        $request->setPhone($this->phone);
        $request->setToken($this->sms_token);
        $request->setType($this->type);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        //$body = HomeResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            //'body' => $body
        ]);
    }

    public function actionContractorsmslogin()
    {
        $route = 'contractor.smsLogin';
        $request = new SmsLoginRequest();
        $request->setPhone($this->phone);
        $request->setCode($this->code);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = ContractorResponse::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionHome()
    {
        $route = 'contractor.home';
        $request = new ContractorAuthenticationRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = HomeResponse::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionArea()
    {
        $route = 'contractor.getAreaByLngLat';
        $request = new GetAreaByLngLatRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $request->setLat(23.737525);
        $request->setLng(113.014189);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = GetAreaByLngLatResponse::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }


    public function actionEditstore()
    {
        $route = 'contractor.EditStoreInfo';
        $request = new EditStoreInfoRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $request->setStoreId(1021);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = EditStoreInfoResponse::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionStoreinfo()
    {
        $route = 'contractor.getStoreInfo';
        $request = new GetStoreInfoRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $request->setCustomerId(1057);
        $request->setCustomerStyle(1);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = GetStoreInfoResponse::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionCreatestore()
    {
        $route = 'contractor.quickCreateCustomer';
        $request = new QuickRegisterCustomerRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $request->setCustomerId(1057);
        $request->setPhone('18682002344');
        $request->setCode('8888');
        $request->setUsername('test001');
        $request->setPassword('e10adc3949ba59abbe56e057f20f883e');
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = CustomerResponse::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionStorelist()
    {
        $route = 'contractor.storeList';
        $request = new StoresListRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $request->setListType(1);
        $request->setLat($this->lat);
        $request->setLng($this->lng);
        $pagination = new Pagination();
        $pagination->setPage(1);
        $pagination->setPageSize(10);
        $request->setPagination($pagination);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = StoresResponse::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionProductlist()
    {
        $route = 'contractor.markPriceProductList';
        $request = new MarkPriceProductListRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $request->setPage(1);
        $request->setPageSize(10);
        $request->setCategoryId(0);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = MarkPriceProductListResponse::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionProductdetail()
    {
        $route = 'contractor.markPriceProductDetail';
        $request = new MarkPriceDetailRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $request->setProductId(2);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = MarkPriceProduct::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionMarkprice()
    {
        $route = 'contractor.markPrice';
        $request = new MarkPriceRequest();
        $request->setContractorId($this->contractor_id);
        $request->setAuthToken($this->auth_token);
        $request->setProductId(2);
        $request->setPrice(10);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = MarkPriceProduct::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionCategories()
    {
        $route = 'merchant.getFirstCategoryFromPms';
        $request = new getCategoryRequest();
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = CategoryNode::parseFromString($result->getPackageBody());
        }catch (\Exception $e){
            $body = null;
        }
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }




    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $methods = get_class_methods($this);
        return $this->render('index',[
            'methods' => $methods,
        ]);
    }

}

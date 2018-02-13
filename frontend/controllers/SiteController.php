<?php
namespace frontend\controllers;

use common\proxy\Proxy;
use service\message\common\Address;
use service\message\common\CalculateData;
use service\message\common\CategoryNode;
use service\message\common\Header;
use service\message\common\Order;
use service\message\common\Product;
use service\message\common\Store;
use service\message\core\getCategoryRequest;
use service\message\core\getHomeActivityRequest;
use service\message\core\getHomeActivityResponse;
use service\message\core\HomeRequest;
use service\message\core\HomeResponse;
use service\message\customer\CartItemsRequest;
use service\message\customer\CartItemsResponse;
use service\message\customer\CustomerAuthenticationRequest;
use service\message\customer\CustomerResponse;
use service\message\customer\LoginRequest;
use service\message\customer\RemoveCartItemsRequest;
use service\message\customer\UpdateCartItemsRequest;
use service\message\merchant\getAreaCategoryRequest;
use service\message\merchant\getCategoryStoresRequest;
use service\message\merchant\getCategoryStoresResponse;
use service\message\merchant\getFeatureProductsRequest;
use service\message\merchant\getFeatureProductsResponse;
use service\message\merchant\getProductRequest;
use service\message\merchant\getProductResponse;
use service\message\merchant\getStoreDetailRequest;
use service\message\merchant\getStoresByAreaIdsRequest;
use service\message\merchant\getStoresByAreaIdsResponse;
use service\message\merchant\searchProductByBarcodeResponse;
use service\message\merchant\searchProductRequest;
use service\message\merchant\searchProductResponse;
use service\message\merchant\thematicActivityRequest;
use service\message\merchant\thematicActivityResponse;
use service\message\sales\CalculatePromotionsRequest;
use service\message\sales\CalculatePromotionsResponse;
use service\message\sales\CreateOrdersRequest;
use service\message\sales\CreateOrdersResponse;
use service\message\sales\OrderCommentRequest;
use service\message\sales\OrderDetailRequest;
use service\message\sales\OrderReviewRequest;
use service\message\sales\OrderReviewResponse;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
//    //203
//    public $username = '13729648097';
//    public $password = 'e10adc3949ba59abbe56e057f20f883e';
//    public $auth_token = 'H1lpLqbm9ZRiJKYp';
//    public $customer_id = '1021';

    //201
    public $username = '18682002348';
    public $customer_id = '1057';
    public $password = 'e10adc3949ba59abbe56e057f20f883e';
    public $auth_token = 'nvgUjDzOTcSXXbVp';

//    public $username = '哈哈';
//    public $customer_id = '1071';
//    public $auth_token = 'pwwAlRacnspmo4zV';
//    public $password = 'e10adc3949ba59abbe56e057f20f883e';

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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionHome2()
    {
        $route = 'merchant.home2';
        $request = new HomeRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = HomeResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionHome3()
    {
        $route = 'merchant.home3';
        $request = new HomeRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        //print_r($header);
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

    public function actionHome4()
    {
        $route = 'merchant.home4';
        $request = new HomeRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        //print_r($header);
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


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionFirstcategory()
    {
        $route = 'merchant.getFirstCategory';
        $request = new getCategoryRequest();
        $request->setWholesalerId(3);
        $request->setCity(441800);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = CategoryNode::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionCategory()
    {
        $route = 'merchant.getAreaCategory';
        $request = new getAreaCategoryRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = CategoryNode::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }


    public function actionAuthentication()
    {
        $route = 'customers.customerAuthentication';
        $request = new CustomerAuthenticationRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = CustomerResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionHome()
    {
        $route = 'merchant.home';
        $request = new HomeRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = HomeResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionTopic()
    {
        $route = 'merchant.getTopic';
        $request = new thematicActivityRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
//        $request->setIdentifier('selectionTopic');
        //$request->setIdentifier('newArriveTopic');
        $request->setIdentifier('featured_product_list');
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = thematicActivityResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }


    public function actionActivity()
    {
        $route = 'core.getHomeActivity';
        $request = new getHomeActivityRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = getHomeActivityResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionTopic2()
    {
        $route = 'merchant.getTopicV2';
        $request = new thematicActivityRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $request->setIdentifier('featured_product_list');
//        $request->setIdentifier('newArriveTopic');
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = thematicActivityResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {

        $route = 'customers.login';
        $request = new LoginRequest();
        $request->setUsername($this->username);
        $request->setPassword($this->password);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = CustomerResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionSearch()
    {
        $route = 'merchant.searchProduct';
        $request = new searchProductRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        //$request->setKeyword('方便面');
        $request->setWholesalerId(3);
        $request->setPageSize(10);
        $request->setCategoryId(377);
        $request->setCategoryLevel(3);
//        $request->setBrand('百威;王老吉;');
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = searchProductResponse::parseFromString($result->getPackageBody());
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

    public function actionSearchbarcode()
    {
        $route = 'merchant.searchProductByBarcode';
        $request = new searchProductRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        //$request->setWholesalerId(25);
        $request->setKeyword('6923450657935');
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = searchProductByBarcodeResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionProductdetail()
    {
        $route = 'merchant.getProduct';
        $request = new getProductRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $request->setWholesalerId(33);
        $request->appendProductIds(4678);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = getProductResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionOrderdetail()
    {
        $route = 'sales.orderDetail';
        $request = new OrderDetailRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $request->setOrderId(270);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = Order::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionOrdercomment()
    {
        $route = 'sales.orderComment';
        $request = new OrderCommentRequest();
        $request->setCustomerId(1057);
        $request->setAuthToken('nvgUjDzOTcSXXbVp');
        $request->setOrderId(578);
        $request->setWholesalerId(33);
        $request->setQuality(5);
        $request->setDelivery(5);
        $request->setComment('测试');
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = Order::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionStores()
    {
        $route = 'merchant.getStoresByAreaIds';
        $request = new getStoresByAreaIdsRequest();
        $request->appendAreaIds(39);
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = getStoresByAreaIdsResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionCategorystores()
    {
        $route = 'merchant.getCategoryStores';
        $request = new getCategoryStoresRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        //$request->setAreaId(5);
        $request->setCategoryId(377);
        $request->setCategoryLevel(3);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = getCategoryStoresResponse::parseFromString($result->getPackageBody());
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

    public function actionStoredetail()
    {
        $route = 'merchant.getStoreDetail';
        $request = new getStoreDetailRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $request->setWholesalerId(3);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = Store::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionCreateorder()
    {
        $route = 'sales.createOrders';
        $request = new CreateOrdersRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $product = new Product();
        $product->setProductId(1);
        $product->setWholesalerId(3);
        $product->setNum(5);
        $address = new Address();
        $address->setName($this->username);
        $address->setPhone($this->username);
        $request->setAddress($address);
        $request->appendItems($product);
        $request->setPaymentMethod(3);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = CreateOrdersResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionOrderreview()
    {
        $route = 'sales.orderReview';
        $request = new OrderReviewRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $product = new Product();
        $product->setProductId(1);
        $product->setWholesalerId(3);
        $product->setNum(50);
        $product2 = new Product();
        $product2->setProductId(2);
        $product2->setWholesalerId(3);
        $product2->setNum(100);
        $request->appendItems($product);
        $request->appendItems($product2);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = OrderReviewResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }

    public function actionCalculate()
    {
        $route = 'merchant.calculatePromotions';
        $request = new CalculatePromotionsRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $data = new CalculateData();
        $data->setWholesalerId(3);
        $product = new Product();
        $product->setProductId(1);
        $product->setNum(1);
        $product2 = new Product();
        $product2->setProductId(2);
        $product2->setWholesalerId(3);
        $product2->setNum(1);
        $data->appendProductList($product);
        $data->appendProductList($product2);
        $request->appendItems($data);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = CalculatePromotionsResponse::parseFromString($result->getPackageBody());
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => $body
        ]);
    }


    
    public function actionCartitem()
    {
        $route = 'merchant.cartItems';
        $request = new CartItemsRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        try{
            $body = CartItemsResponse::parseFromString($result->getPackageBody());
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

    public function actionRemovecartitems()
    {
        $route = 'merchant.removeCartItems';
        $request = new RemoveCartItemsRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $product = new Product();
        $product->setProductId(1);
        $product->setWholesalerId(3);
        $request->appendProducts($product);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => ''
        ]);
    }

    public function actionUpdatecart()
    {
        $route = 'merchant.updateItems';
        $request = new UpdateCartItemsRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $product = new Product();
        $product->setProductId(1);
        $product->setWholesalerId(3);
        $product->setNum(10);
        $product2 = new Product();
        $product2->setProductId(2);
        $product2->setWholesalerId(3);
        $product2->setNum(10);
        $request->appendProducts($product);
        $request->appendProducts($product2);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        return $this->render('index',[
            'request' => $request->toArray(),
            'route' => $route,
            'header' => $header,
            'body' => ''
        ]);
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionFeatureproduct()
    {
        $route = 'merchant.getFeatureProduct';
        $request = new getFeatureProductsRequest();
        $request->setCustomerId($this->customer_id);
        $request->setAuthToken($this->auth_token);
        $request->setWholesalerId(3);
        $result = Proxy::sendRequest($route, $request);
        $header = $result->getHeader();
        $body = getFeatureProductsResponse::parseFromString($result->getPackageBody());
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
    public function actionSignup()
    {

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


    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {

    }
}

<?php
namespace console\controllers;

use frontend\test\CustomerTest;
use yii\console\Controller;

/**
 * CustomerController
 */
class CustomerController extends Controller
{


    public function actionError(){

        return $this->render('index',[
            'exception' => \Yii::$app->errorHandler->exception
        ]);
    }

    public function actionIndex()
    {
        $customer = new CustomerTest();
        $params = get_class_methods($customer);
        return $this->render('index');

    }

}

<?php

namespace frontend\test\customer;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class CustomerCreate extends TestAbstract
{
    public $name = '注册接口';

    public $route = 'customers.login';

    public $request = 'service\message\customer\LoginRequest';
    public $response = 'service\message\customer\CustomerResponse';

    public $username = '18682002348';
    public $password = 'e10adc3949ba59abbe56e057f20f883e';

    public $data = [
        'username' => ['label' => '登录名称','value' => '18682002348'],
        'password' => ['label' => '密码','value' => 'e10adc3949ba59abbe56e057f20f883e'],
        'token' => ['label' => '密码','value' => 'e10adc3949ba59abbe56e057f20f883e'],
    ];

    public $description = '测试';

}
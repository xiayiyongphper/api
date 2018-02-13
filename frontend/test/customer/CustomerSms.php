<?php

namespace frontend\test\customer;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class CustomerSms extends TestAbstract
{
    public $name = '短信接口';

    public $route = 'customers.sms';

    public $request = 'service\message\customer\GetSmsRequest';
    public $response = 'service\message\common\UniversalResponse';

    public $data = [
        'token' => ['label' => 'token','value' => '9gdgtq7eym0579dobesmqm5ze0ig3mpm'],
        'type' => ['label' => 'type','value' => '1'],
        'phone' => ['label' => 'phone','value' => '18682002348'],
    ];

    public $description = '短信接口';

}
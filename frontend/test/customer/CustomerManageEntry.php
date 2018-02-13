<?php

namespace frontend\test\customer;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class CustomerManageEntry extends TestAbstract
{
    public $name = '超市管理快捷';

    public $route = 'customers.customerManageEntry';

    public $request = 'service\message\contractor\ContractorAuthenticationRequest';
    public $response = 'service\message\contractor\ManageResponse';

    public $data = [
        'contractor_id' => ['label' => 'contractor_id','value' => '17'],
        'auth_token' => ['label' => 'auth_token','value' => 'DqiQHBbRzXW9dxfA'],
        'city' => ['label' => 'city','value' => '441800'],
    ];

    public $description = '超市管理快捷';

}
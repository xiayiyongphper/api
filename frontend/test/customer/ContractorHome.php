<?php

namespace frontend\test\customer;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class ContractorHome extends TestAbstract
{
    public $name = '业务员首页';

    public $route = 'contractor.home';

    public $request = 'service\message\contractor\ContractorAuthenticationRequest';
    public $response = 'service\message\contractor\HomeResponse';

    public $data = [
        'contractor_id' => ['label' => '业务员ID','value' => self::CONTRACTOR_ID],
        'auth_token' => ['label' => 'Token','value' => self::CONTRACTOR_AUTH_TOKEN],
    ];

    public $description = '业务员首页';

}
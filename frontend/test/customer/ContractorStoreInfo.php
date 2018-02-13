<?php

namespace frontend\test\customer;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class ContractorStoreInfo extends TestAbstract
{
    public $name = '业务员店铺详情';

    public $route = 'contractor.getStoreInfo';

    public $request = 'service\message\contractor\GetStoreInfoRequest';
    public $response = 'service\message\contractor\GetStoreInfoResponse';

    public $data = [
        'contractor_id' => ['label' => '业务员ID','value' => self::CONTRACTOR_ID],
        'auth_token' => ['label' => 'Token','value' => self::CONTRACTOR_AUTH_TOKEN],
        'customer_id' => ['label' => '超市ID','value' => '1057'],
        'customer_style' => ['label' => '是否是意向超市','value' => '0'],
    ];

    public $description = '业务员APP店铺详情';

}
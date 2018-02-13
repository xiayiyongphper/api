<?php

namespace frontend\test\customer;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class ContractorStoreList extends TestAbstract
{
    public $name = '业务员店铺列表';

    public $route = 'contractor.storeList';

    public $request = 'service\message\contractor\StoresListRequest';
    public $response = 'service\message\contractor\StoresResponse';

    public $data = [
        'contractor_id' => ['label' => '业务员ID','value' => self::CONTRACTOR_ID],
        'auth_token' => ['label' => 'Token','value' => self::CONTRACTOR_AUTH_TOKEN],
        'list_type' => ['label' => '列表类型','value' => '0'],
        'lat' => ['label' => 'lat','value' => '22.535255'],
        'lng' => ['label' => 'lng','value' => '113.954872'],

    ];

    public $description = '业务员店铺列表';

}
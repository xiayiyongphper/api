<?php

namespace frontend\test\sales;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class ContractorOrderCollection extends TestAbstract
{
    public $name = '业务员订单跟踪';

    public $route = 'sales.contractorOrderCollection';

    public $request = 'service\message\contractor\OrderListRequest';
    public $response = 'service\message\sales\OrderCollectionResponse';

    public $data = [
        'contractor_id' => ['label' => '业务员ID','value' => self::CONTRACTOR_ID],
        'auth_token' => ['label' => 'Token','value' => self::CONTRACTOR_AUTH_TOKEN],
    ];

    public $description = '业务员订单跟踪';

}
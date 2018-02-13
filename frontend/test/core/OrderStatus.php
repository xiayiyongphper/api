<?php

namespace frontend\test\core;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class OrderStatus extends TestAbstract
{
    public $name = '订单状态';

    public $route = 'core.getStatus';

    public $request = 'service\message\core\OrderStatusRequest';
    public $response = 'service\message\core\OrderStatusResponse';

    public $data = [
        'contractor_id' => ['label' => '业务员ID','value' => self::CONTRACTOR_ID],
        'auth_token' => ['label' => 'Token','value' => self::CONTRACTOR_AUTH_TOKEN],
    ];

    public $description = '全部订单状态';

}
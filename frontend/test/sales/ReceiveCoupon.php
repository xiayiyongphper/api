<?php

namespace frontend\test\sales;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class ReceiveCoupon extends TestAbstract
{
    public $name = '领取优惠券';

    public $route = 'sales.receiveCoupon';

    public $request = 'service\message\core\ReceiveCouponRequest';

    public $data = [
        'rule_id' => ['label' => '规则ID','value' => '133'],
    ];

    public $description = '领取优惠券';

}
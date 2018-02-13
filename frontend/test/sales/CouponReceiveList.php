<?php

namespace frontend\test\sales;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class CouponReceiveList extends TestAbstract
{
    public $name = '领取优惠券列表';

    public $route = 'sales.couponReceiveList';

    public $request = 'service\message\core\CouponReceiveListRequest';
    public $response = 'service\message\core\CouponReceiveListResponse';

    public $data = [
        'location' => ['label' => '展示位置','value' => '1'],
        'wholesaler_id' => ['label' => '供应商','value' => '3'],
        'rule_id' => ['label' => '规则ID','value' => '54'],
    ];

    public $description = '领取优惠券列表  location 1、商品详情  2、 供应商首页  3、专题页面 4、购物车页面';

}
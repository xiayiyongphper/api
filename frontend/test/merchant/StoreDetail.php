<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class StoreDetail extends TestAbstract
{
    public $name = '店铺详情';

    public $route = 'merchant.getStoreDetail';

    public $request = 'service\message\merchant\getStoreDetailRequest';
    public $response = 'service\message\common\Store';

    public $data = [
        'wholesaler_id' => ['label' => '店铺ID','value' => 3],
    ];

    public $description = '店铺详情';
}
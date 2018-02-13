<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class MostFavourableProduct extends TestAbstract
{
    public $name = '全场最惠';

    public $route = 'merchant.getMostFavourableProduct';

    public $request = 'service\message\merchant\searchProductRequest';
    public $response = 'service\message\merchant\searchProductResponse';

    public $data = [
        'wholesaler_id' => ['label' => '店铺ID','value' => '3'],
    ];

    public $description = '全场最惠';

}
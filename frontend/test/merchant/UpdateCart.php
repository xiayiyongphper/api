<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class UpdateCart extends TestAbstract
{
    public $name = '添加购物车';

    public $route = 'merchant.updateItems';

    public $request = 'service\message\customer\UpdateCartItemsRequest';
    //public $response = 'service\message\customer\CartItemsResponse';

    public $data = [
        'product_id' => ['label' => '商品ID','value' => 1],
        'wholesaler_id' => ['label' => '店铺ID','value' => 3],
        'num' => ['label' => '数量','value' => 3],
    ];

    public function generateData($params){
        $products = [];
        foreach ($params as $key => $param){
            if(strpos($key, 'data_') === 0){
                $new_key = substr($key,5);
                $data[$new_key] = $param;
            }
        }
        array_push($products,$data);
        $data = [
            'products' => $products
        ];
        return $data;
    }

    public $description = '添加购物车接口';

}
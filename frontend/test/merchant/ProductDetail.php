<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class ProductDetail extends TestAbstract
{
    public $name = '商品详情';

    public $route = 'merchant.getProduct';

    public $request = 'service\message\merchant\getProductRequest';
    public $response = 'service\message\merchant\getProductResponse';

    public $data = [
        'wholesaler_id' => ['label' => '店铺ID','value' => 3],
        'product_id' => ['label' => '商品ID','value' => 3],
    ];

    public $description = '店铺详情';

    public function generateData($params){
        $products = [];
        foreach ($params as $key => $param){
            if(strpos($key, 'data_') === 0){
                $new_key = substr($key,5);
                $data[$new_key] = $param;
            }
        }
        array_push($products,$data['product_id']);
        $data = [
            'wholesaler_id' => $data['wholesaler_id'],
            'product_ids' => $products
        ];
        return $data;
    }

}
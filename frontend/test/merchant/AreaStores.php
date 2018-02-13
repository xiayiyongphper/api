<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class AreaStores extends TestAbstract
{
    public $name = '全部供应商';

    public $route = 'merchant.getAreaStores';

    public $request = 'service\message\merchant\getStoresByAreaIdsRequest';
    public $response = 'service\message\common\StoreBlock';

    public $data = [
        'area_ids' => ['label' => '区域ID','value' => 3],
    ];

    public $description = '全部供应商';

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

}
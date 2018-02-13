<?php

namespace frontend\test\sales;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class ContractorOrderList extends TestAbstract
{
    public $name = '业务员订单列表';

    public $route = 'sales.contractorOrderCollection';

    public $request = 'service\message\contractor\OrderListRequest';
    public $response = 'service\message\sales\OrderCollectionResponse';

    public $data = [
        'contractor_id' => ['label' => '业务员ID','value' => self::CONTRACTOR_ID],
        'auth_token' => ['label' => 'Token','value' => self::CONTRACTOR_AUTH_TOKEN],
        'keyword' => ['label' => '关键字','value' => '汇兴隆'],
        'wholesaler_id' => ['label' => '供应商IDS','value' => '3'],
        'status' => ['label' => '状态','value' => 'canceled'],
    ];


    public function generateData($params){
        $data = [];
        foreach ($params as $key => $param){
            if(strpos($key, 'data_') === 0){
                $new_key = substr($key,5);
                if($new_key == 'wholesaler_id' || $new_key=='status'){
                    $data[$new_key] = array_filter(explode(',',$param));
                }else{
                    $data[$new_key] = $param;
                }
            }
        }
        return $data;
    }

    public $description = '业务员订单列表';

}
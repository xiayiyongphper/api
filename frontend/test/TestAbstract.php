<?php
/**
 * Created by PhpStorm.
 * User: Jason Y. wang
 * Date: 16-11-1
 * Time: 上午9:39
 */

namespace frontend\test;


use yii\base\Model;

class TestAbstract  extends Model
{
    const CONTRACTOR_ID = 96;
    const CONTRACTOR_AUTH_TOKEN = 'tEcJwUc9CdVtf2oA';

    public $route;
    public $request;
    public $response;
    public $data;
    public $description;

    public function generateData($params){
        $data = [];
        foreach ($params as $key => $param){
            if(strpos($key, 'data_') === 0){
                $new_key = substr($key,5);
                $data[$new_key] = $param;
            }
        }
        return $data;
    }
}
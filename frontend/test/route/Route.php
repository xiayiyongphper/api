<?php

namespace frontend\test\route;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class Route extends TestAbstract
{
    public $name = '获取路由表';

    public $route = 'route.fetch';

    public $request = 'service\message\core\FetchRouteRequest';
    public $response = 'service\message\core\FetchRouteResponse';

    public $data = [
        'auth_token' => ['label' => 'Token','value' => 'yggBfivOTkMOFNDm'],
    ];


    public $description = '路由表接口';

}
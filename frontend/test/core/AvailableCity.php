<?php

namespace frontend\test\core;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class AvailableCity extends TestAbstract
{
    public $name = '已开通城市列表';

    public $route = 'core.getAvailableCityList';

    public $request = 'service\message\customer\CustomerDetailRequest';
    public $response = 'service\message\core\AvailableCityListResponse';

    public $data = [];

    public $description = '已开通城市列表';

}
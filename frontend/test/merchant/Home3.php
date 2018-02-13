<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class Home3 extends TestAbstract
{
    public $name = '首页3';

    public $route = 'merchant.home3';

    public $request = 'service\message\core\HomeRequest';
    public $response = 'service\message\core\HomeResponse';

    public $description = '首页接口';

}
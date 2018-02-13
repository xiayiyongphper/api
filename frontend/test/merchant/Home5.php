<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class Home5 extends TestAbstract
{
    public $name = '首页5';

    public $route = 'merchant.home5';

    public $request = 'service\message\core\HomeRequest';
    public $response = 'service\message\core\HomeResponse2';

    public $description = '首页接口,2.6APP开始启用';

}
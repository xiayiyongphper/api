<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class Category extends TestAbstract
{
    public $name = '分类';

    public $route = 'merchant.getAreaCategory';

    public $request = 'service\message\merchant\getAreaCategoryRequest';
    public $response = 'service\message\common\CategoryNode';

    public $description = '分类接口';

}
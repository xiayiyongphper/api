<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class Search extends TestAbstract
{
    public $name = '搜索';

    public $route = 'merchant.searchProduct';

    public $request = 'service\message\merchant\searchProductRequest';
    public $response = 'service\message\merchant\searchProductResponse';

    public $data = [
        'wholesaler_id' => ['label' => '店铺ID','value' => '3'],
        'category_id' => ['label' => '分类ID','value' => '80'],
        'category_level' => ['label' => '分类级别','value' => '1'],
        'keyword' => ['label' => '关键字','value' => '加多宝'],
        'field' => ['label' => '排序字段','value' => ''],
        'sort' => ['label' => '排序方式','value' => ''],
        'brand' => ['label' => '品牌','value' => ''],
        'page' => ['label' => '页码','value' => '1'],
        'page_size' => ['label' => '每页数量','value' => '20'],
    ];

    public $description = '搜索接口';

}
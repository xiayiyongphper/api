<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class SearchSuggest extends TestAbstract
{
    public $name = '搜索建议';

    public $route = 'merchant.searchSuggest';

    public $request = 'service\message\merchant\searchSuggestRequest';
    public $response = 'service\message\merchant\searchSuggestResponse';

    public $data = [
        'keyword' => ['label' => '关键字','value' => '怡宝'],
    ];

    public $description = '搜索建议';

}
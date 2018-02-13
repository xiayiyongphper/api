<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class CartItems extends TestAbstract
{
    public $name = '购物车接口';

    public $route = 'merchant.cartItems';

    public $request = 'service\message\customer\CartItemsRequest';
    public $response = 'service\message\customer\CartItemsResponse';

    public $description = '购物车接口';

}
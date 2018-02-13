<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class CartItems2 extends TestAbstract
{
    public $name = '购物车接口2';

    public $route = 'merchant.cartItems2';

    public $request = 'service\message\customer\CartItemsRequest';
    public $response = 'service\message\customer\CartItemsResponse2';

    public $description = '购物车接口2';

}
<?php

namespace frontend\test\merchant;

use frontend\test\TestAbstract;

/**
 * Created by PhpStorm.
 * User: jason
 * Date: 16-10-19
 * Time: 下午6:38
 */
class ContractorStore extends TestAbstract
{
    public $name = '业务员看到的供应商';

    public $route = 'merchant.getMerchantByContractor';

    public $request = 'service\message\merchant\ContractorMerchantRequest';
    public $response = 'service\message\merchant\ContractorMerchantResponse';

    public $data = [
        'contractor_id' => ['label' => '业务员ID','value' => self::CONTRACTOR_ID],
        'auth_token' => ['label' => 'Token','value' => self::CONTRACTOR_AUTH_TOKEN],
    ];

    public $description = '业务员看到的供应商';
}
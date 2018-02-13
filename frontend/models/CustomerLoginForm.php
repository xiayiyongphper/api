<?php
namespace frontend\models;

use common\models\User;
use frontend\test\CustomerTest;
use yii\base\Model;
use Yii;

/**
 * LoginForm form
 */
class CustomerLoginForm extends Model
{
    public $username;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function login()
    {
        if (!$this->validate()) {
            return null;
        }
        $flag = CustomerTest::login($this->username,$this->password);
        return $flag;
    }
}

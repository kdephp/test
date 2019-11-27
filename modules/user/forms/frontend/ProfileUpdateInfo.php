<?php

namespace app\modules\user\forms\frontend;

use app\modules\user\models\User;
use app\modules\user\Module;
use Yii;
use yii\base\Model;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

class ProfileUpdateInfo extends Model
{
    public $info;
    public $gender;
    public $login;
    /**
     * @var User
     */
    private $_user;

    /**
     * @param User $user
     * @param array $config
     */
    public function __construct(User $user, $config = [])
    {
        $this->_user = $user;
        $this->gender = $user->gender;
        $this->info = $user->info;
        $user->login = $this->login;
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            ['login', 'required'],
            ['info', 'required'],
            ['gender', 'required'],

        ];
    }

    /**
     * @return bool
     */
    public function info()
    {
        if ($this->validate()) {
            $user = $this->_user;
            $user->login = $this->login;
            $user->gender = $this->gender;
            $user->info = $this->info;
            return $user->save();
        } else {
            return false;
        }
    }

}
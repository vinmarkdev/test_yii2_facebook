<?php

namespace app\models;

use app\models\User;
use Yii;
use yii\base\Model;


/**
 * SignupForm is the model behind the sign up form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class SignupForm extends Model
{
    public $username;
    public $password;
    public $tellnumber;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['username', 'password','tellnumber'], 'required'],
            ['tellnumber', 'integer']
        ];
    }

    public function saveUser()
    {
        //var_dump($this);die();
        $user = new User();

        $user->username = $this->username;
        $user->tell_number = $this->tellnumber;
        $user->password_hash = sha1($this->password);
        $user->created_at = time();
        $user->updated_at = time();
        $user->status = 1;

        if($user->save()){
            return true;
        }
        return false;
    }

}
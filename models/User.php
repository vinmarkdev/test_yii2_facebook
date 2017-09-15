<?php

namespace app\models;

use Yii;

class User extends \yii\db\ActiveRecord
{
    public $password;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],

            [['status'], 'integer', 'max' => 2],
            [['tell_number'], 'integer', 'max' => 13],
            [['created_at', 'updated_at'], 'integer', 'max' => 255],

            [['username', 'password_hash', 'email'], 'string', 'max' => 255],

            [['auth_key'], 'string', 'max' => 32],

            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'User ID',
            'username' => 'User name',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'email' => 'User email',
            'status' => 'User status',
            'created_at' => 'User regenerated At',
            'updated_at' => 'User data updated At',
            'tell_number' => 'User tell number'
        ];
    }

    /**
     * @inheritdoc
     * @return UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}

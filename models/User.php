<?php

namespace app\models;

use Yii;

/**
 * Class User
 *
 * @property integer $id
 * @property integer $status
 * @property integer $create_at
 * @property integer $updated_at
 * @property integer $tell_number
 * @property string $username
 * @property string $email
 * @property string $auth_key
 * @property string $password_hash
 */
class User extends \yii\db\ActiveRecord
{
    
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
            [['username', 'password_hash', 'created_at', 'updated_at', 'status', 'tell_number'], 'required'],

            [['status','created_at', 'updated_at', 'tell_number'], 'integer'],

            [['username', 'password_hash', 'email', 'auth_key'], 'string', 'max' => 255],
            
            [['email', 'tell_number'], 'unique']
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

<?php

namespace app\models;

use Yii;

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
            [['username', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],

            [['status'], 'integer', 'max' => 2],
            [['tell_number'], 'integer', 'max' => 13],
            [['created_at', 'updated_at'], 'integer', 'max' => 255],

            [['username', 'password_hash', 'email'], 'string', 'max' => 255],

            [['auth_key'], 'string', 'max' => 32],

            [['email'], 'unique']
        ];
    }
}

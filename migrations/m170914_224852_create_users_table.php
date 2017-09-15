<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m170914_224852_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull()->unique(),
            'auth_key' => $this->string(32),
            'status' =>  $this->integer(2)->notNull(),
            'created_at' => $this->integer(13)->notNull(),
            'updated_at' => $this->integer(13)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}

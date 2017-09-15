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
            'password_hash' => $this->text()->notNull(),
            'auth_key' => $this->text(),
            'email' => $this->string(255)->notNull()->unique(),
            'status' =>  $this->integer(2)->notNull(),
            'role' => $this->string(100)->notNull(),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->notNull()
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

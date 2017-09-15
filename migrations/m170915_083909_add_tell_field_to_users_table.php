<?php

use yii\db\Migration;

class m170915_083909_add_tell_field_to_users_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn("users","tell_number", $this->integer(13)->notNull());
    }

    public function safeDown()
    {
        echo "m170915_083909_add_tell_field_to_users_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170915_083909_add_tell_field_to_users_table cannot be reverted.\n";

        return false;
    }
    */
}

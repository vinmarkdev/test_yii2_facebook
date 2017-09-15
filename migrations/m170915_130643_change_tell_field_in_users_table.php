<?php

use yii\db\Migration;

class m170915_130643_change_tell_field_in_users_table extends Migration
{
    public function safeUp()
    {
        $this->alterColumn("users","tell_number", $this->integer(13)->notNull()->unique());
    }

    public function safeDown()
    {
        echo "m170915_130643_change_tell_field_in_users_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170915_130643_change_tell_field_in_users_table cannot be reverted.\n";

        return false;
    }
    */
}

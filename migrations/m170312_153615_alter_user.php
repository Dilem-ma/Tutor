<?php

use yii\db\Migration;

class m170312_153615_alter_user extends Migration
{
    public function up()
    {
        $this->alterColumn('user', 'username', $this->string(20)->unique()->notNull());
        $this->alterColumn('user', 'password', $this->string(64)->notNull());
    }

    public function down()
    {
        echo "m170312_153615_alter_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

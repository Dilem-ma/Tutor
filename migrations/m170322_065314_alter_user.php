<?php

use yii\db\Migration;

class m170322_065314_alter_user extends Migration
{
    public function up()
    {
        $this->alterColumn('user', 'accessToken', $this->string(64));
    }

    public function down()
    {
        echo "m170322_065314_alter_user cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m171027_080448_add_pwd_table extends Migration
{
    public function up()
    {
        $this->createTable('pwd', [
            'id' => $this->primaryKey(),
            'password' => $this->string(64)->notNull(),
        ]);

    }

    public function down()
    {
        echo "m171027_080448_add_pwd_table cannot be reverted.\n";

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

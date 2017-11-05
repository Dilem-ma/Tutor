<?php

use yii\db\Migration;

class m171028_071125_add_favourite_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'favourite', $this->string(100));
    }

    public function down()
    {
        echo "m171028_071125_add_favourite_to_user cannot be reverted.\n";

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

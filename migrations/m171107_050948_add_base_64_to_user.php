<?php

use yii\db\Migration;

class m171107_050948_add_base_64_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('user','base_64', $this->string(200));
    }

    public function down()
    {
        echo "m171107_050948_add_base_64_to_user cannot be reverted.\n";

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

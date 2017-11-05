<?php

use yii\db\Migration;

class m171105_105958_add_credit_to_user extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'credit', $this->integer()->defaultValue(100));
    }

    public function down()
    {
        echo "m171105_105958_add_credit_to_user cannot be reverted.\n";

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

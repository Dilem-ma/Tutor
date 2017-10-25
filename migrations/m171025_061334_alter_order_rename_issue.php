<?php

use yii\db\Migration;

class m171025_061334_alter_order_rename_issue extends Migration
{
    public function up()
    {
        $this->renameTable('order', 'issue');
    }

    public function down()
    {
        echo "m171025_061334_alter_order_rename_issue cannot be reverted.\n";

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

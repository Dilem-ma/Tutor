<?php

use yii\db\Migration;

class m170923_062350_alter_order extends Migration
{
    public function up()
    {
        $this->dropColumn('order','teach_time');
        $this->dropColumn('order','is_urgent');
        $this->addColumn('order','teach_time',$this->string());
        $this->addColumn('order','is_urgent', $this->boolean());
    }

    public function down()
    {
        echo "m170923_062350_alter_order cannot be reverted.\n";

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

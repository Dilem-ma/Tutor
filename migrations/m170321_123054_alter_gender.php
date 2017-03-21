<?php

use yii\db\Migration;

class m170321_123054_alter_gender extends Migration
{
    public function up()
    {
        $this->alterColumn('student', 'gender', "ENUM('male', 'female') NOT NULL");
        $this->alterColumn('teacher', 'gender', "ENUM('male', 'female') NOT NULL");
        $this->addColumn('order', 't_id', $this->string(200));
        $this->alterColumn('order', 'status', $this->integer()->defaultValue(-1));
    }

    public function down()
    {
        echo "m170321_123054_alter_gender cannot be reverted.\n";

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

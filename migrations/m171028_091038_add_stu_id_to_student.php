<?php

use yii\db\Migration;

class m171028_091038_add_stu_id_to_student extends Migration
{
    public function up()
    {
        $this->addColumn('student', 'stu_id', $this->string(50));
    }

    public function down()
    {
        echo "m171028_091038_add_stu_id_to_student cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m170321_094411_alter_student_teacher extends Migration
{
    public function up()
    {
        $this->dropColumn('student', 'phone');
        $this->dropColumn('teacher', 'phone');
    }

    public function down()
    {
        echo "m170321_094411_alter_student_teacher cannot be reverted.\n";

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

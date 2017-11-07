<?php

use yii\db\Migration;

class m171107_115019_alter_student_grade extends Migration
{
    public function up()
    {
        $this->alterColumn('student', 'grade', "ENUM('大一', '大二', '大三', '大四', '研一', '研二', '研三', '博一', '博二') not null default '大一'");

        $this->alterColumn('student', 'school', "ENUM('华东师范大学', '同济大学', '上海交通大学', '复旦大学' )");

        $this->addColumn('order', 'address', $this->string(200));
    }

    public function down()
    {
        echo "m171107_115019_alter_student_grade cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m170322_092633_refactor_tutor_db extends Migration
{
    public function up()
    {
        $this->dropColumn('student', 'name');
        $this->dropColumn('student', 'birthday');
        $this->dropColumn('student', 'gender');
        $this->dropColumn('student', 'area');
        $this->dropColumn('teacher', 'name');
        $this->dropColumn('teacher', 'birthday');
        $this->dropColumn('teacher', 'image');
        $this->dropColumn('teacher', 'gender');
        $this->dropColumn('teacher', 'area');
//        $this->addColumn('teacher', 'education', "ENUM('高中', '专科', '本科', '硕士', '博士')");
        $this->addColumn('user', 'name', $this->string(20)->unique());
        $this->addColumn('user', 'birthday', $this->date());
        $this->addColumn('user', 'gender', "ENUM('male', 'female')");
        $this->addColumn('user', 'area', "ENUM('黄浦区', '徐汇区', '长宁区', '静安区','普陀区', '虹口区', '杨浦区', '浦东新区', '闵行区', '宝山区', '嘉定区', '金山区', '松江区', '青浦区', '奉贤区', '崇明区')");
    }

    public function down()
    {
        echo "m170322_092633_refactor_tutor_db cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m170316_061925_create_student extends Migration
{
    public function up()
    {
        $this->createTable('student', [
            'id' => $this->primaryKey(),
            'u_id' => $this->integer()->unique()->notNull(),
            'name' => $this->string(10)->unique()->notNull(),
            'phone' => $this->string(20)->unique()->notNull(),
        ]);

        $this->addColumn('student', 'gender', "ENUM('male', 'female', 'secret') NOT NULL default 'male'");

        $this->addColumn('student', 'area', "ENUM('黄浦区', '徐汇区', '长宁区', '静安区', '普陀区', '虹口区', '杨浦区', '浦东新区', '闵行区', '宝山区', '嘉定区', '金山区', '松江区', '青浦区', '奉贤区', '崇明区') NOT NULL default '黄浦区'");

        $this->addColumn('student', 'grade', "ENUM('大一', '大二', '大三', '大四', '研一', '研二') not null default '大一'");

        $this->addForeignKey(
            'fk-stu-u_id',
            'student',
            'u_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        echo "m170316_061925_create_student cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m170319_075430_create_teacher extends Migration
{
    public function up()
    {
        $this->createTable('teacher', [
            'id' => $this->primaryKey(),
            'u_id' => $this->integer()->unique()->notNull(),
            'name' => $this->string(10)->unique()->notNull(),
            'phone' => $this->string(20)->unique()->notNull(),
            'major' => $this->string(20)->notNull(),
            'birthday' => $this->date()->notNull(),
            'describe' => $this->string(200),
            'image' => $this->string(200)->notNull(),
            'star' => $this->integer()->defaultValue(0),
        ]);

        $this->addColumn('teacher', 'gender', "ENUM('male', 'female', 'secret') NOT NULL default 'secret'");

       // $this->addColumn('teacher', 'area', "ENUM('黄浦区', '徐汇区', '长宁区', '静安区',
        //'普陀区', '虹口区', '杨浦区', '浦东新区', '闵行区', '宝山区', '嘉定区', '金山区', '松江区', '青浦区', '奉贤区', '崇明区') NOT NULL default '黄浦区'");

        //$this->addColumn('teacher', 'education', "ENUM('高中', '专科', '本科', '硕士', '博士') not null default '本科'");

        $this->addForeignKey(
            'fk-tea-u_id',
            'teacher',
            'u_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        echo "m170319_075430_create_teacher cannot be reverted.\n";

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

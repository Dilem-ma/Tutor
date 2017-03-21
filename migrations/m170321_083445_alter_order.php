<?php

use yii\db\Migration;

class m170321_083445_alter_order extends Migration
{
    public function up()
    {
        $this->dropColumn('order', 'keyword');
        $this->alterColumn('order', 'area', "ENUM('黄浦区', '徐汇区', '长宁区', '静安区','普陀区', '虹口区', '杨浦区', '浦东新区', '闵行区', '宝山区', '嘉定区', '金山区', '松江区', '青浦区', '奉贤区', '崇明区')");
        $this->alterColumn('order', 'technique', "ENUM('编程语言', '数据库', 'web技术', '计算机概念', '环境配置 ') not null");
        $this->alterColumn('order', 'gender', "ENUM('male', 'female') NOT NULL");
        $this->addColumn('order', 'price', "double NOT NULL DEFAULT '0'");
    }

    public function down()
    {
        echo "m170321_083445_alter_order cannot be reverted.\n";

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

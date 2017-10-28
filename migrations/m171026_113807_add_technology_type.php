<?php

use yii\db\Migration;

class m171026_113807_add_technology_type extends Migration
{
    public function up()
    {
        $this->alterColumn('order', 'technique', "ENUM('编程语言', '数据库', 'web技术', '计算机概念', '环境配置', 'app开发', '服务器脚本', '运维技术') not null");
    }

    public function down()
    {
        echo "m171026_113807_add_technology_type cannot be reverted.\n";

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

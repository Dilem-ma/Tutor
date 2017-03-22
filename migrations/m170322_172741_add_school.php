<?php

use yii\db\Migration;

class m170322_172741_add_school extends Migration
{
    public function up()
    {
        $this->addColumn('student', 'school', "ENUM('复旦大学','上海交通大学', '同济大学', '华东师范大学', '	华东理工大学', '上海财经大学', '东华大学', '上海大学', '	上海师范大学', '上海理工大学')");
    }

    public function down()
    {
        echo "m170322_172741_add_school cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m171106_094753_alter_teacher_star extends Migration
{
    public function up()
    {
        $this->alterColumn('teacher', 'star', $this->double()->defaultValue(0));
        $this->addColumn('comment', 'star', $this->integer());
    }

    public function down()
    {
        echo "m171106_094753_alter_teacher_star cannot be reverted.\n";

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

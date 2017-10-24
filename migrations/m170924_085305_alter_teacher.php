<?php

use yii\db\Migration;

class m170924_085305_alter_teacher extends Migration
{
    public function up()
    {
        $this->addColumn('teacher', 'certificate', $this->string(200));
    }

    public function down()
    {
        echo "m170924_085305_alter_teacher cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m171106_082924_create_table_comment extends Migration
{
    public function up()
    {
        $this->createTable('comment',[
            'id' => $this->primaryKey(),
            'o_id' => $this->integer()->notNull(),
            't_id' => $this->integer()->notNull(),
            'u_id' => $this->integer()->notNull(),
            'content' => $this->string(140),
            'date' => $this->date()->notNull(),
        ]);

        $this->addForeignKey(
            'fk_comment_o_id',
            'comment',
            'o_id',
            'order',
            'id'
        );

        $this->addForeignKey(
            'fk_comment_t_id',
            'comment',
            't_id',
            'teacher',
            'id'
        );

        $this->addForeignKey(
            'fk_comment_u_id',
            'comment',
            'u_id',
            'user',
            'id'
        );
    }

    public function down()
    {
        echo "m171106_082924_create_table_comment cannot be reverted.\n";

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

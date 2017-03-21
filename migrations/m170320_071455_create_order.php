<?php

use yii\db\Migration;

class m170320_071455_create_order extends Migration
{
    public function up()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            's_id' => $this->integer()->notNull(),
            'technique' => $this->string(20)->notNull(),
            'area' => $this->string(20)->notNull(),
            'title' => $this->string(20)->notNull(),
            'description' => $this->string(100)->notNull(),
            'keyword' => $this->string(20),
        ]);

        $this->addColumn('order', 'gender', "ENUM('male', 'female', 'secret') not null default 'secret'");

        $this->addColumn('order', 'status', "ENUM('等待接单', '授课中', '订单完成') not null default '等待接单'");

        $this->addForeignKey(
            'fk-order-s_id',
            'order',
            's_id',
            'student',
            'id'
        );
    }

    public function down()
    {
        echo "m170320_071455_create_order cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m170306_075156_init_User_table extends Migration
{
    public function up()
    {
//        Create table User and define the column
        $this->createTable(
            'user',
            [
                'id' => $this->primaryKey(),
                'username' => $this->string(11)->notNull()->unique(),
                'password' => $this->string(11),
                'url' => $this->string(100),
                'authKey' => $this->string(11),
                'accessToken' => $this->string(11),
            ]
        );

        //Insert a record into table User
        $this->insert(
            'User',
            [
                'id' => 1,
                'username' => '13052395586',
                'password' => '961922',
                'url' => '',
                'authKey' => 'test001key',
                'accessToken' => '001-token'
            ]
        );
    }

    public function down()
    {
        $this->dropTable('User');
//        echo "m170306_075156_init_User_table cannot be reverted.\n";
//
//        return false;
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

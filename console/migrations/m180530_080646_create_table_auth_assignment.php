<?php

use yii\db\Migration;

class m180530_080646_create_table_auth_assignment extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%auth_assignment}}', [
            'item_name' => $this->string()->notNull(),
            'user_id' => $this->string()->notNull(),
            'created_at' => $this->integer(),
        ], $tableOptions);

        $this->addPrimaryKey('PRIMARYKEY', '{{%auth_assignment}}', ['item_name', 'user_id']);
        $this->createIndex('auth_assignment_user_id_idx', '{{%auth_assignment}}', 'user_id');
        $this->addForeignKey('auth_assignment_ibfk_1', '{{%auth_assignment}}', 'item_name', '{{%auth_item}}', 'name', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%auth_assignment}}');
    }
}

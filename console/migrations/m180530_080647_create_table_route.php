<?php

use yii\db\Migration;

class m180530_080647_create_table_route extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%route}}', [
            'name' => $this->string()->notNull()->append('PRIMARY KEY'),
            'alias' => $this->string()->notNull(),
            'type' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue('1'),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%route}}');
    }
}

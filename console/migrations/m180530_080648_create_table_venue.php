<?php

use yii\db\Migration;

class m180530_080648_create_table_venue extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%venue}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'loc' => $this->string(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%venue}}');
    }
}

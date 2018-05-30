<?php

use yii\db\Migration;

class m180530_080647_create_table_pertandingan_game extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pertandingan_game}}', [
            'id' => $this->primaryKey(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%pertandingan_game}}');
    }
}

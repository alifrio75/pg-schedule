<?php

use yii\db\Migration;

class m180530_080647_create_table_pertandingan_wasit extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pertandingan_wasit}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'country' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('FK_pertandingan_wasit_countries', '{{%pertandingan_wasit}}', 'country', '{{%countries}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%pertandingan_wasit}}');
    }
}

<?php

use yii\db\Migration;

class m180530_080646_create_table_ImageManager extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ImageManager}}', [
            'id' => $this->primaryKey()->unsigned(),
            'fileName' => $this->string()->notNull(),
            'fileHash' => $this->string()->notNull(),
            'created' => $this->dateTime()->notNull(),
            'modified' => $this->dateTime(),
            'createdBy' => $this->integer()->unsigned(),
            'modifiedBy' => $this->integer()->unsigned(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%ImageManager}}');
    }
}

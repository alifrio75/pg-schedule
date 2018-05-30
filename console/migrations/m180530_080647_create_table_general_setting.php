<?php

use yii\db\Migration;

class m180530_080647_create_table_general_setting extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%general_setting}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'logo' => $this->string()->notNull(),
            'logoalt' => $this->string()->notNull(),
            'slide' => $this->string()->notNull(),
            'video' => $this->text()->notNull(),
            'address' => $this->string()->notNull(),
            'phone1' => $this->string()->notNull(),
            'phone2' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'facebook' => $this->string()->notNull(),
            'twitter' => $this->string()->notNull(),
            'youtube' => $this->string()->notNull(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%general_setting}}');
    }
}

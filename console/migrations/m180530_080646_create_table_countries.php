<?php

use yii\db\Migration;

class m180530_080646_create_table_countries extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%countries}}', [
            'id' => $this->primaryKey(),
            'country_code' => $this->string()->notNull()->defaultValue(''),
            'country_name' => $this->string()->notNull()->defaultValue(''),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%countries}}');
    }
}

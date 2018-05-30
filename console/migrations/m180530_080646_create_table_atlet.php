<?php

use yii\db\Migration;

class m180530_080646_create_table_atlet extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%atlet}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->defaultValue('0'),
            'country' => $this->integer()->notNull()->defaultValue('0'),
            'avatar' => $this->string(),
            'birthday' => $this->date()->notNull(),
            'gender' => $this->string()->notNull(),
            'umur' => $this->integer()->notNull()->defaultValue('0'),
        ], $tableOptions);

        $this->createIndex('name', '{{%atlet}}', 'name', true);
        $this->addForeignKey('FK_atlet_countries', '{{%atlet}}', 'country', '{{%countries}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%atlet}}');
    }
}

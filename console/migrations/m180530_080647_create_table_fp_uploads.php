<?php

use yii\db\Migration;

class m180530_080647_create_table_fp_uploads extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%fp_uploads}}', [
            'id' => $this->primaryKey(),
            'timestamp' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'type' => $this->string(),
            'type_id' => $this->integer(),
            'hash' => $this->string(),
            'ord' => $this->integer()->notNull()->defaultValue('0'),
            'filename' => $this->string()->notNull(),
            'original' => $this->string()->notNull(),
            'mime' => $this->string()->notNull()->defaultValue(''),
            'size' => $this->integer()->notNull(),
            'width' => $this->integer(),
            'height' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('type_type_id', '{{%fp_uploads}}', ['type', 'type_id']);
        $this->createIndex('type_hash', '{{%fp_uploads}}', ['type', 'hash']);
    }

    public function down()
    {
        $this->dropTable('{{%fp_uploads}}');
    }
}

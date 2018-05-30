<?php

use yii\db\Migration;

class m180530_080647_create_table_pages extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pages}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->defaultValue('0'),
            'last_update' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'title' => $this->string()->notNull(),
            'intro' => $this->text()->notNull(),
            'thumb' => $this->string()->defaultValue(''),
            'pages' => $this->text()->notNull(),
        ], $tableOptions);

        $this->createIndex('FK_app_article_user', '{{%pages}}', 'user_id');
    }

    public function down()
    {
        $this->dropTable('{{%pages}}');
    }
}

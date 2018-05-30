<?php

use yii\db\Migration;

class m180530_080646_create_table_article extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->defaultValue('0'),
            'last_update' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'title' => $this->string()->notNull(),
            'intro' => $this->text(),
            'article' => $this->text()->notNull(),
            'img1' => $this->string(),
            'status' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('FK_app_article_user', '{{%article}}', 'user_id', '{{%user}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_article_article_status', '{{%article}}', 'status', '{{%article_status}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%article}}');
    }
}

<?php

use yii\db\Migration;

class m180530_080647_create_table_pertandingan_hasil extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pertandingan_hasil}}', [
            'id' => $this->primaryKey(),
            'jadwal' => $this->integer(),
            'games' => $this->integer()->notNull(),
            'home_point' => $this->integer()->notNull(),
            'home_lead' => $this->integer()->notNull(),
            'home_servewin' => $this->integer()->notNull(),
            'home_servelost' => $this->integer()->notNull(),
            'home_cons' => $this->integer()->notNull(),
            'home_overcome' => $this->integer()->notNull(),
            'opp_point' => $this->integer()->notNull(),
            'opp_lead' => $this->integer()->notNull(),
            'opp_servewin' => $this->integer()->notNull(),
            'opp_servelost' => $this->integer()->notNull(),
            'opp_cons' => $this->integer()->notNull(),
            'opp_overcome' => $this->integer()->notNull(),
            'game_duration' => $this->integer()->notNull(),
            'last_update' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);

        $this->addForeignKey('FK_pertandingan_hasil_pertandingan_game', '{{%pertandingan_hasil}}', 'games', '{{%pertandingan_game}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_hasil_pertandingan_jadwal', '{{%pertandingan_hasil}}', 'jadwal', '{{%pertandingan_jadwal}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%pertandingan_hasil}}');
    }
}

<?php

use yii\db\Migration;

class m180530_080647_create_table_pertandingan_jadwal extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pertandingan_jadwal}}', [
            'id' => $this->primaryKey(),
            'nomer' => $this->integer()->notNull()->defaultValue('0'),
            'kelas' => $this->integer()->notNull()->defaultValue('0'),
            'gender' => $this->integer()->notNull(),
            'venue' => $this->integer()->notNull()->defaultValue('0'),
            'wasit' => $this->integer()->notNull()->defaultValue('0'),
            'tahap' => $this->integer()->notNull()->defaultValue('0'),
            'home' => $this->integer()->notNull(),
            'home2' => $this->integer(),
            'home_score' => $this->integer(),
            'opponent' => $this->integer()->notNull()->defaultValue('0'),
            'opponent2' => $this->integer(),
            'opponent_score' => $this->integer(),
            'date' => $this->date()->notNull(),
            'time' => $this->time()->notNull(),
            'hasil' => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey('FK_pertandingan_jadwal_pertandingan_kelas', '{{%pertandingan_jadwal}}', 'kelas', '{{%pertandingan_kelas}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_pertandingan_nomer', '{{%pertandingan_jadwal}}', 'nomer', '{{%pertandingan_nomer}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_pertandingan_tahap', '{{%pertandingan_jadwal}}', 'tahap', '{{%pertandingan_tahap}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_pertandingan_wasit', '{{%pertandingan_jadwal}}', 'wasit', '{{%pertandingan_wasit}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_venue', '{{%pertandingan_jadwal}}', 'venue', '{{%venue}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_jadwal_pertandingan_records', '{{%pertandingan_jadwal}}', 'hasil', '{{%pertandingan_hasil}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_atlet', '{{%pertandingan_jadwal}}', 'home', '{{%atlet}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_atlet_2', '{{%pertandingan_jadwal}}', 'opponent', '{{%atlet}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_atlet_3', '{{%pertandingan_jadwal}}', 'home2', '{{%atlet}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_atlet_4', '{{%pertandingan_jadwal}}', 'opponent2', '{{%atlet}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('FK_pertandingan_jadwal_pertandingan_gender', '{{%pertandingan_jadwal}}', 'gender', '{{%pertandingan_gender}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    public function down()
    {
        $this->dropTable('{{%pertandingan_jadwal}}');
    }
}

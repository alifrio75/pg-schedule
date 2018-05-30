<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertandingan_hasil".
 *
 * @property int $id
 * @property int $jadwal
 * @property int $games
 * @property int $home_point
 * @property int $home_lead
 * @property int $home_servewin
 * @property int $home_servelost
 * @property int $home_cons
 * @property int $home_overcome
 * @property int $opp_point
 * @property int $opp_lead
 * @property int $opp_servewin
 * @property int $opp_servelost
 * @property int $opp_cons
 * @property int $opp_overcome
 * @property int $game_duration
 * @property string $last_update
 *
 * @property PertandinganGame $games0
 * @property PertandinganJadwal $jadwal0
 * @property PertandinganJadwal[] $pertandinganJadwals
 */
class PertandinganHasil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertandingan_hasil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jadwal', 'games', 'home_point', 'home_lead', 'home_servewin', 'home_servelost', 'home_cons', 'home_overcome', 'opp_point', 'opp_lead', 'opp_servewin', 'opp_servelost', 'opp_cons', 'opp_overcome', 'game_duration'], 'integer'],
            [['games', 'home_point', 'home_lead', 'home_servewin', 'home_servelost', 'home_cons', 'home_overcome', 'opp_point', 'opp_lead', 'opp_servewin', 'opp_servelost', 'opp_cons', 'opp_overcome', 'game_duration'], 'required'],
            [['last_update'], 'safe'],
            [['games'], 'exist', 'skipOnError' => true, 'targetClass' => PertandinganGame::className(), 'targetAttribute' => ['games' => 'id']],
            [['jadwal'], 'exist', 'skipOnError' => true, 'targetClass' => PertandinganJadwal::className(), 'targetAttribute' => ['jadwal' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jadwal' => 'Jadwal',
            'games' => 'Games',
            'home_point' => 'Home Point',
            'home_lead' => 'Home Lead',
            'home_servewin' => 'Home Servewin',
            'home_servelost' => 'Home Servelost',
            'home_cons' => 'Home Cons',
            'home_overcome' => 'Home Overcome',
            'opp_point' => 'Opp Point',
            'opp_lead' => 'Opp Lead',
            'opp_servewin' => 'Opp Servewin',
            'opp_servelost' => 'Opp Servelost',
            'opp_cons' => 'Opp Cons',
            'opp_overcome' => 'Opp Overcome',
            'game_duration' => 'Game Duration',
            'last_update' => 'Last Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGames0()
    {
        return $this->hasOne(PertandinganGame::className(), ['id' => 'games']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwal0()
    {
        return $this->hasOne(PertandinganJadwal::className(), ['id' => 'jadwal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['hasil' => 'id']);
    }
}

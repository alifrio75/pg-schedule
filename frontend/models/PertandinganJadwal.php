<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertandingan_jadwal".
 *
 * @property int $id
 * @property int $nomer
 * @property int $kelas
 * @property int $gender
 * @property int $venue
 * @property int $wasit
 * @property int $tahap
 * @property int $home
 * @property int $home2
 * @property int $home_score
 * @property int $opponent
 * @property int $opponent2
 * @property int $opponent_score
 * @property string $date
 * @property string $time
 * @property int $hasil
 *
 * @property PertandinganHasil[] $pertandinganHasils
 * @property PertandinganHasil $hasil0
 * @property Atlet $home0
 * @property Atlet $opponent0
 * @property Atlet $home20
 * @property Atlet $opponent20
 * @property PertandinganGender $gender0
 * @property PertandinganKelas $kelas0
 * @property PertandinganNomer $nomer0
 * @property PertandinganTahap $tahap0
 * @property PertandinganWasit $wasit0
 * @property Venue $venue0
 */
class PertandinganJadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertandingan_jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomer', 'kelas', 'gender', 'venue', 'wasit', 'tahap', 'home', 'home2', 'home_score', 'opponent', 'opponent2', 'opponent_score', 'hasil'], 'integer'],
            [['gender', 'home', 'date', 'time'], 'required'],
            [['date', 'time'], 'safe'],
            [['hasil'], 'exist', 'skipOnError' => true, 'targetClass' => PertandinganHasil::className(), 'targetAttribute' => ['hasil' => 'id']],
            [['home'], 'exist', 'skipOnError' => true, 'targetClass' => Atlet::className(), 'targetAttribute' => ['home' => 'id']],
            [['opponent'], 'exist', 'skipOnError' => true, 'targetClass' => Atlet::className(), 'targetAttribute' => ['opponent' => 'id']],
            [['home2'], 'exist', 'skipOnError' => true, 'targetClass' => Atlet::className(), 'targetAttribute' => ['home2' => 'id']],
            [['opponent2'], 'exist', 'skipOnError' => true, 'targetClass' => Atlet::className(), 'targetAttribute' => ['opponent2' => 'id']],
            [['gender'], 'exist', 'skipOnError' => true, 'targetClass' => PertandinganGender::className(), 'targetAttribute' => ['gender' => 'id']],
            [['kelas'], 'exist', 'skipOnError' => true, 'targetClass' => PertandinganKelas::className(), 'targetAttribute' => ['kelas' => 'id']],
            [['nomer'], 'exist', 'skipOnError' => true, 'targetClass' => PertandinganNomer::className(), 'targetAttribute' => ['nomer' => 'id']],
            [['tahap'], 'exist', 'skipOnError' => true, 'targetClass' => PertandinganTahap::className(), 'targetAttribute' => ['tahap' => 'id']],
            [['wasit'], 'exist', 'skipOnError' => true, 'targetClass' => PertandinganWasit::className(), 'targetAttribute' => ['wasit' => 'id']],
            [['venue'], 'exist', 'skipOnError' => true, 'targetClass' => Venue::className(), 'targetAttribute' => ['venue' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomer' => 'Nomer',
            'kelas' => 'Kelas',
            'gender' => 'Gender',
            'venue' => 'Venue',
            'wasit' => 'Wasit',
            'tahap' => 'Tahap',
            'home' => 'Home',
            'home2' => 'Home2',
            'home_score' => 'Home Score',
            'opponent' => 'Opponent',
            'opponent2' => 'Opponent2',
            'opponent_score' => 'Opponent Score',
            'date' => 'Date',
            'time' => 'Time',
            'hasil' => 'Hasil',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganHasils()
    {
        return $this->hasMany(PertandinganHasil::className(), ['jadwal' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasil0()
    {
        return $this->hasOne(PertandinganHasil::className(), ['id' => 'hasil']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHome0()
    {
        return $this->hasOne(Atlet::className(), ['id' => 'home']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOpponent0()
    {
        return $this->hasOne(Atlet::className(), ['id' => 'opponent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHome20()
    {
        return $this->hasOne(Atlet::className(), ['id' => 'home2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOpponent20()
    {
        return $this->hasOne(Atlet::className(), ['id' => 'opponent2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGender0()
    {
        return $this->hasOne(PertandinganGender::className(), ['id' => 'gender']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas0()
    {
        return $this->hasOne(PertandinganKelas::className(), ['id' => 'kelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNomer0()
    {
        return $this->hasOne(PertandinganNomer::className(), ['id' => 'nomer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTahap0()
    {
        return $this->hasOne(PertandinganTahap::className(), ['id' => 'tahap']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWasit0()
    {
        return $this->hasOne(PertandinganWasit::className(), ['id' => 'wasit']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVenue0()
    {
        return $this->hasOne(Venue::className(), ['id' => 'venue']);
    }
}

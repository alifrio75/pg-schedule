<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertandingan_kelas".
 *
 * @property int $id
 * @property string $kelas
 *
 * @property PertandinganJadwal[] $pertandinganJadwals
 */
class PertandinganKelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertandingan_kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kelas'], 'required'],
            [['kelas'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kelas' => 'Kelas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['kelas' => 'id']);
    }
}

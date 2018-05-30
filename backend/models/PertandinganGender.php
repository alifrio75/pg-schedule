<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertandingan_gender".
 *
 * @property int $id
 * @property string $gender
 *
 * @property PertandinganJadwal[] $pertandinganJadwals
 */
class PertandinganGender extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertandingan_gender';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender'], 'required'],
            [['gender'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gender' => 'Gender',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['gender' => 'id']);
    }
}

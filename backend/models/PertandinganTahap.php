<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertandingan_tahap".
 *
 * @property int $id
 * @property string $name
 *
 * @property PertandinganJadwal[] $pertandinganJadwals
 */
class PertandinganTahap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertandingan_tahap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['tahap' => 'id']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertandingan_nomer".
 *
 * @property int $id
 * @property string $noper
 *
 * @property PertandinganJadwal[] $pertandinganJadwals
 */
class PertandinganNomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertandingan_nomer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['noper'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'noper' => 'Noper',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['nomer' => 'id']);
    }
}

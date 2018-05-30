<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertandingan_game".
 *
 * @property int $id
 *
 * @property PertandinganHasil[] $pertandinganHasils
 */
class PertandinganGame extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertandingan_game';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganHasils()
    {
        return $this->hasMany(PertandinganHasil::className(), ['games' => 'id']);
    }
}

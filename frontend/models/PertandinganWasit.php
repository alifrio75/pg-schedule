<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertandingan_wasit".
 *
 * @property int $id
 * @property string $name
 * @property int $country
 *
 * @property PertandinganJadwal[] $pertandinganJadwals
 * @property Countries $country0
 */
class PertandinganWasit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertandingan_wasit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'country'], 'required'],
            [['country'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['country'], 'exist', 'skipOnError' => true, 'targetClass' => Countries::className(), 'targetAttribute' => ['country' => 'id']],
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
            'country' => 'Country',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['wasit' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry0()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country']);
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "venue".
 *
 * @property int $id
 * @property string $name
 * @property string $loc
 *
 * @property PertandinganJadwal[] $pertandinganJadwals
 */
class Venue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'venue';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'loc'], 'string', 'max' => 255],
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
            'loc' => 'Loc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['venue' => 'id']);
    }
}

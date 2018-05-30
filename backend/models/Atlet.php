<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atlet".
 *
 * @property int $id
 * @property string $name
 * @property int $country
 * @property string $avatar
 * @property string $birthday
 * @property string $gender
 * @property int $umur
 *
 * @property Countries $country0
 * @property PertandinganJadwal[] $pertandinganJadwals
 * @property PertandinganJadwal[] $pertandinganJadwals0
 */
class Atlet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'atlet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'umur'], 'integer'],
            [['birthday', 'gender'], 'required'],
            [['birthday', 'avatar'], 'safe'],
            [['gender'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['avatar'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'avatar' => 'Avatar',
            'birthday' => 'Birthday',
            'gender' => 'Gender',
            'umur' => 'Umur',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry0()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['home' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertandinganJadwals0()
    {
        return $this->hasMany(PertandinganJadwal::className(), ['opponent' => 'id']);
    }
    public function getPreview1() 
	{
		if (!empty($this->avatar)) {
			$image = \yii\helpers\Html::img($this->avatar, []);
		}
		else {
			$image = \yii\helpers\Html::img(Yii::$app->urlManager->baseUrl.'/uploads/default.png', []);
		}
		// enclose in a container if you wish with appropriate styles
		return ($image == null) ? null : 
			\yii\helpers\Html::tag('div', $image); 
	}
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property int $user_id
 * @property string $last_update
 * @property string $title
 * @property string $intro
 * @property string $thumb
 * @property string $pages
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['last_update'], 'safe'],
            [['title', 'intro', 'pages'], 'required'],
            [['intro', 'pages'], 'string'],
            [['title', 'thumb'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'last_update' => 'Last Update',
            'title' => 'Title',
            'intro' => 'Intro',
            'thumb' => 'Thumb',
            'pages' => 'Pages',
        ];
    }
    
    public function getPreview1() 
	{
		if (!empty($this->thumb)) {
			$image = \yii\helpers\Html::img($this->thumb, []);
		}
		else {
			$image = \yii\helpers\Html::img(Yii::$app->urlManager->baseUrl.'/uploads/default.png', []);
		}
		// enclose in a container if you wish with appropriate styles
		return ($image == null) ? null : 
			\yii\helpers\Html::tag('div', $image); 
	}
}

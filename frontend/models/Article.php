<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property int $user_id
 * @property string $last_update
 * @property string $title
 * @property string $intro
 * @property string $article
 * @property string $img1
 * @property int $status
 *
 * @property User $user
 * @property ArticleStatus $status0
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'status'], 'integer'],
            [['last_update'], 'safe'],
            [['title', 'article', 'status'], 'required'],
            [['intro', 'article'], 'string'],
            [['title', 'img1'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => ArticleStatus::className(), 'targetAttribute' => ['status' => 'id']],
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
            'article' => 'Article',
            'img1' => 'Img1',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(ArticleStatus::className(), ['id' => 'status']);
    }
    
    public function getPreview1() 
	{
		if (!empty($this->img1)) {
			$image = \yii\helpers\Html::img($this->img1, []);
		}
		else {
			$image = \yii\helpers\Html::img(Yii::$app->urlManager->baseUrl.'/uploads/default.png', []);
		}
		// enclose in a container if you wish with appropriate styles
		return ($image == null) ? null : 
			\yii\helpers\Html::tag('div', $image); 
	}
	
}

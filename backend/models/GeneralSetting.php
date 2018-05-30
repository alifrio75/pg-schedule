<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general_setting".
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $logo
 * @property string $logoalt
 * @property string $slide
 * @property string $video
 * @property string $address
 * @property string $phone1
 * @property string $phone2
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 * @property string $youtube
 */
class GeneralSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'general_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'name', 'logo', 'logoalt', 'slide', 'video', 'address', 'phone1', 'phone2', 'email', 'facebook', 'twitter', 'youtube'], 'required'],
            [['video'], 'string'],
            [['title', 'name', 'logo', 'logoalt', 'slide', 'address', 'phone1', 'phone2', 'email', 'facebook', 'twitter', 'youtube'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'name' => 'Name',
            'logo' => 'Logo',
            'logoalt' => 'Logoalt',
            'slide' => 'Slide',
            'video' => 'Video',
            'address' => 'Address',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'email' => 'Email',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'youtube' => 'Youtube',
        ];
    }
}

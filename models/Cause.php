<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cause".
 *
 * @property int $id
 * @property string $title
 * @property string $short_description
 * @property string $full_description
 * @property string $goal
 * @property string $image
 */
class Cause extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cause';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file'], 'file'],
            [['title', 'short_description', 'full_description', 'goal', 'image'], 'required'],
            [['short_description', 'full_description'], 'string'],
            [['title', 'goal', 'image'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short_description' => 'Short Description',
            'full_description' => 'Full Description',
            'goal' => 'Goal',
            'image' => 'Image',
        ];
    }
}

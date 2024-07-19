<?php

namespace app\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image'], 'required'],
            [['title', 'image'], 'string', 'max' => 50],
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
            'image' => 'Image',
        ];
    }
}

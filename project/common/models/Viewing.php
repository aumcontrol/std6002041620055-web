<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "viewing".
 *
 * @property int $id
 * @property int $property_id
 * @property string $view_date
 * @property string $comment
 */
class Viewing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viewing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['property_id', 'view_date'], 'required'],
            [['property_id'], 'integer'],
            [['view_date'], 'safe'],
            [['comment'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property_id' => 'Property ID',
            'view_date' => 'View Date',
            'comment' => 'Comment',
        ];
    }
}

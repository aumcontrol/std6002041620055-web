<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property int $id
 * @property int $branch_id
 * @property int $staff_id
 * @property string $date_joined
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['branch_id', 'staff_id', 'date_joined'], 'required'],
            [['branch_id', 'staff_id'], 'integer'],
            [['date_joined'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'branch_id' => 'Branch ID',
            'staff_id' => 'Staff ID',
            'date_joined' => 'Date Joined',
        ];
    }
}

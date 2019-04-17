<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $position
 * @property string $sex
 * @property string $dob
 * @property int $salary
 * @property string $telephone
 * @property string $email
 * @property int $branch_id
 *
 * @property Branch $branch
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'address', 'position', 'sex', 'dob', 'salary', 'telephone', 'email', 'branch_id'], 'required'],
            [['address', 'email'], 'string'],
            [['dob'], 'safe'],
            [['salary', 'branch_id'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 300],
            [['position', 'telephone'], 'string', 'max' => 11],
            [['sex'], 'string', 'max' => 1],
            [['branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'address' => 'Address',
            'position' => 'Position',
            'sex' => 'Sex',
            'dob' => 'Dob',
            'salary' => 'Salary',
            'telephone' => 'Telephone',
            'email' => 'Email',
            'branch_id' => 'Branch ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(Branch::className(), ['id' => 'branch_id']);
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "private_owner".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $telephone
 * @property string $email
 * @property int $user_id
 */
class PrivateOwner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'private_owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'telephone', 'email', 'user_id'], 'required'],
            [['address', 'email'], 'string'],
            [['user_id'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 300],
            [['telephone'], 'string', 'max' => 11],
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
            'telephone' => 'Telephone',
            'email' => 'Email',
            'user_id' => 'User ID',
        ];
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $telephone
 * @property string $pref_type
 * @property int $max_rent
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'address', 'telephone', 'pref_type', 'max_rent'], 'required'],
            [['address'], 'string'],
            [['max_rent'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 300],
            [['telephone'], 'string', 'max' => 11],
            [['pref_type'], 'string', 'max' => 5],
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
            'pref_type' => 'Pref Type',
            'max_rent' => 'Max Rent',
        ];
    }
}

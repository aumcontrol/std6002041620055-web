<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "property_for_rent".
 *
 * @property int $id
 * @property string $street
 * @property string $city
 * @property string $province
 * @property string $postcode
 * @property string $type
 * @property string $rooms
 * @property int $rent
 * @property int $owner_id
 * @property int $staff_id
 * @property int $branch_id
 */
class PropertyForRent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property_for_rent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['street', 'city', 'province', 'postcode', 'type', 'rooms', 'rent', 'owner_id', 'staff_id', 'branch_id'], 'required'],
            [['street', 'city', 'province'], 'string'],
            [['rent', 'owner_id', 'staff_id', 'branch_id'], 'integer'],
            [['postcode'], 'string', 'max' => 7],
            [['type'], 'string', 'max' => 5],
            [['rooms'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'street' => 'Street',
            'city' => 'City',
            'province' => 'Province',
            'postcode' => 'Postcode',
            'type' => 'Type',
            'rooms' => 'Rooms',
            'rent' => 'Rent',
            'owner_id' => 'Owner ID',
            'staff_id' => 'Staff ID',
            'branch_id' => 'Branch ID',
        ];
    }
}

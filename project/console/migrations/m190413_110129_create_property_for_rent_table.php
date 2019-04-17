<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%property_for_rent}}`.
 */
class m190413_110129_create_property_for_rent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%property_for_rent}}', [
            'id' => $this->primaryKey(),
            'street' => $this->text()->notNull(),
            'city' => $this->text()->notNull(),
            'province' => $this->text()->notNull(),
            'postcode' => $this->string(7)->notNull(),
            'type' => $this->string(5)->notNull(),
            'rooms' => $this->string(2)->notNull(),
            'rent' => $this->integer(11)->notNull(),
            'owner_id' => $this->integer(4)->notNull(),
            'staff_id' => $this->integer(4)->notNull(),
            'branch_id' => $this->integer(4)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%property_for_rent}}');
    }
}

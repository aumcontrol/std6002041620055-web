<?php

use yii\db\Migration;

/**
 * Handles the creation of table '{{%registration}}'.
 */
class m190413_121304_create_registration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%registration}}', [
            'id' => $this->primaryKey(),
            'branch_id'=> $this->integer(4)->notNull(),
            'staff_id' => $this->integer(4)->notNull(),
            'date_joined'=> $this->dateTime()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%registration}}');
    }
}

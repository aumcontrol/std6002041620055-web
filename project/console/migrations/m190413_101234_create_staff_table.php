<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%staff}}`.
 */
class m190413_101234_create_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
            'first_name'=> $this->string(300)->notNull(),
            'last_name'=> $this->string(300)->notNull(),
            'address'=> $this->text()->notNull(),
            'position'=> $this->string(11)->notNull(),
            'sex'=> $this->string(1)->notNull(),
            'dob'=> $this->dateTime()->notNull(),
            'salary'=> $this->integer(11)->notNull(),
            'telephone'=> $this->string(11)->notNull(),
            'email'=> $this->text()->notNull(),
            'branch_id'=> $this->integer(4)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }
}

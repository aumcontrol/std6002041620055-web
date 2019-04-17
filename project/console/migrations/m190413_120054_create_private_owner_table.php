<?php

use yii\db\Migration;

/**
 * Handles the creation of table '{{%private_owner}}'.
 */
class m190413_120054_create_private_owner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%private_owner}}', [
            'id' => $this->primaryKey(),
            'first_name'=> $this->string(300)->notNull(),
            'last_name'=> $this->string(300)->notNull(),
            'address' => $this->text(),
            'telephone' => $this->string(11)->notNull(),
            'email' => $this->text()->notNull(),
            'user_id' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%private_owner}}');
    }
}

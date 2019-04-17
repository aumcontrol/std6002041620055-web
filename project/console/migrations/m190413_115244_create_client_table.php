<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m190413_115244_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'first_name'=> $this->string(300)->notNull(),
            'last_name'=> $this->string(300)->notNull(),
            'address'=> $this->text()->notNull(),
            'telephone'=> $this->string(11)->notNull(),
            'pref_type' => $this->string(5)->notNull(),
            'max_rent' => $this->integer(11)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table '{{%viewing}}'.
 */
class m190413_120652_create_viewing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%viewing}}', [
            'id' => $this->primaryKey(),
            'property_id' =>$this->integer(4)->notNull(),
            'view_date' => $this->dateTime()->notNull(),
            'comment' =>$this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%viewing}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%chats}}`.
 */
class m211228_155708_create_chats_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%chats}}', [
            'id' => $this->primaryKey(),
            'chat_id' => $this->integer()->notNull(),
            'message' => $this->text()->notNull(),
            'created_at' => $this->dateTime()->defaultValue( new \yii\db\Expression('NOW()')),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%chats}}');
    }
}

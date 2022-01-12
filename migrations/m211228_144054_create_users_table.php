<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m211228_144054_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'chat_id' => $this->integer()->notNull(),
            'username' => $this->string()->notNull(),
            'first_name' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
        ]);

        $this->addForeignKey(
            'chat_key',  // это "условное имя" ключа
            'users', // это название текущей таблицы
            'chat_id', // это имя поля в текущей таблице, которое будет ключом
            'chats', // это имя таблицы, с которой хотим связаться
            'chat_id', // это поле таблицы, с которым хотим связаться
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}

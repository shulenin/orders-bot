<?php

namespace app\services;

use app\models\Chats;
use app\models\Users;
use Yii;
use yii\db\Exception;

class ChatsService
{
    public function createDialogs($chatId, $chatUsername, $chatFirstName, $chatLastName, $messageText)
    {
        if(Users::find()->where(['chat_id' => $chatId])->exists()) {
            $chats = new Chats();
            $chats->chat_id = $chatId;
            $chats->message = $messageText;
            $chats->save();
        } else{
            $chats = new Users();
            $chats->chat_id = $chatId;
            $chats->username = $chatUsername;
            $chats->first_name = $chatFirstName;
            $chats->last_name = $chatLastName;
            $chats->save();
        }
    }
}
<?php

namespace app\models;

use yii\db\ActiveRecord;

class Chats extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName(): string
    {
        return 'chats';
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }
}

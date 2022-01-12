<?php

namespace app\models;

use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName(): string
    {
        return 'users';
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }
}

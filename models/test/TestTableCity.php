<?php
namespace app\models\test;

use yii\db\ActiveRecord;

class TestTableCity extends ActiveRecord
{
    public static function tableName() {
        return 'city';
    }
}
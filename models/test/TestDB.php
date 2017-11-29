<?php
namespace app\models\test;

use yii\db\ActiveRecord;

class TestDB extends ActiveRecord
{
    public static function tableName() {
        return 'country';
    }
}
<?php
namespace app\models\test;

use yii\db\ActiveRecord;

class TestTableCountry extends ActiveRecord
{
    public static function tableName() {
        return 'country';
    }

    public function getCity() {
    	return $this->hasMany(TestTableCity::className(), ['code_country' => 'code']);
    }
}
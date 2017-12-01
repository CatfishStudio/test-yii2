<?php

namespace app\models\test;

use yii\db\ActiveRecord;

class TestFormInsert extends ActiveRecord {

    public static function tableName() {
        return 'country';
    }

    public function rules() {
        return [
            [['code', 'name', 'population'], 'required']
        ];
    }
}

<?php

namespace app\models\test;

use yii\base\Model;

class TestForm extends Model {
    
    public $name;
    public $email;
    
    public function rules() {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}

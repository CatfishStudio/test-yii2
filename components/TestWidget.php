<?php
namespace app\components;

use yii\base\Widget;

class TestWidget extends Widget
{
    public $name;
    
    public function init() {
        parent::init();
        if($this->name === null) $this->name = 'Гость';
    }

    public function run() {
        //return "<h1>{$this->name}, привет Мир!</h1>";
        return $this->render('test', ['name' => $this->name]);
    }
}


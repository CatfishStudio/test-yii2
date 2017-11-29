<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\test\TestForm;
use app\models\test\TestDB;
use app\models\test\TestTableCountry;

class TestController extends Controller {
    
    public $layout = 'main';
    
    public function debug($values) {
        echo '<pre>' . print_r($values, true) . '</pre>';
    }

    public function actionIndex() {
        //$this->layout = 'test';
        return $this->render('index', ['message' => 'This is a test!']);
    }
    
    public function actionForm(){
        $model = new TestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('form-data', ['model' => $model]);
        } else {
            return $this->render('form-empty', ['model' => $model]);
        }
    }

    public function actionAjax(){
        if(Yii::$app->request->isAjax){
            $this->debug(Yii::$app->request->post());
            echo $_POST['test_data'];
        }else{
            return $this->render('ajax');    
        }        
    }
    
    public function actionSession() {
        Yii::$app->session->set('login', 'User');
        Yii::$app->session->set('password', '1234567890');
        
        if (Yii::$app->session->has('login') && Yii::$app->session->has('password')){
            $this->debug(Yii::$app->session->get('login'));
            $this->debug(Yii::$app->session->get('password'));
        }else{
            $this->debug('В сессии нет переменных login и password');
        }
        
        return $this->render('session');
    }

    public function actionDatabase() {
        $query = TestDB::find();
        
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);
        
        $dataTable = $query->orderBy('name')
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        
        return $this->render('database', [
            'dataTable' => $dataTable,
            'pagination' => $pagination
        ]);
    }
    
    public function actionTables() {
        $query = TestTableCountry::find()->with('city')->all();
        return $this->render('tables', compact('query'));
    }
}
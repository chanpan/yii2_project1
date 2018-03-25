<?php

namespace frontend\controllers;
use yii\web\Controller;
use Yii;
class LoginController extends Controller{
    public function actionIndex(){
      $model = new \frontend\models\Users();//เรียกใช้ model
      $error = "";//เอาไว้แสดง error
      if(Yii::$app->request->post()){ //รับค่าแบบ post จะไม่แสดงค่าบน url
          $post = Yii::$app->request->post();
          $username = $post['Users']['username'];
          $password = $post['Users']['password']; 
          $data = \frontend\models\Users::find()
                  ->where(['username'=>$username,'password'=>$password])
                  ->one();
          if($data){
              return $this->redirect(['/site/index']);//กระโดดไปหน้า อื่น
          }else{
              $error = "คุณ Login ไม่ผ่าน <br/> กรุณาตรวจสอบ Username หรือ Password";
          }          
      }
      return $this->render("index",[
          'model'=>$model,
          'error'=>$error
      ]);  
    }
}

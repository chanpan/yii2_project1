<?php

namespace frontend\models;
use yii\db\ActiveRecord;
class Users extends ActiveRecord{
    public static function tableName(){ //table ที่เราจะทำงาน
        return 'users';
    }
    public function rules(){ //validate ข้อมูล 
        return[
          [['username','password'],'required']  
        ];
    }
    public function attributeLabels() { //เปลี่ยนชื่อ attribute
        return [
            'username'=>'Username',
            'password'=>'Password'
        ];
    }
   
}

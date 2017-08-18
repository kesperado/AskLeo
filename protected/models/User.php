<?php
class User extends CActiveRecord{


	public static function model($className=__CLASS__){
		return parent::model($className);

	}

	public function tableName(){
		return "{{user}}";
	}

	public function attributeLabels(){
		return array(
			'username'=>'username',
			'password'=>'password'

			);
	}
}

?>
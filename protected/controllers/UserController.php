<?php
header("Content-type: text/html;charset=utf-8");

class UserController extends Controller{
	public function actionPersonal($username){
		if($username!=null){
			$sql="select * from questions where id in (select questionid from answers where solver='".$username."')";
			$answersinfo=Question::model()->findAllBySql($sql);
			$questionsinfo=Question::model()->findall('asker=:askername',array(':askername'=>$username));
		}else{
			$sql="select * from questions where id in (select questionid from answers where solver='".Yii::app()->user->name."')";
			$answersinfo=Question::model()->findAllBySql($sql);
			$questionsinfo=Question::model()->findall('asker=:askername',array(':askername'=>Yii::app()->user->name));
		}
		if($_POST&&$_POST['text']!=null){
			$this->redirect(array('users'));
		}
		$data = array(
			'questionsinfo'=>$questionsinfo,
			'answersinfo'=>$answersinfo,
			'targetusername'=>$username,
			);
		$this->render('personal',$data);
	}

	public function actionUsers(){
		if($_POST&&$_POST['text']!=null){
			$sql="select * from user where username like'%".$_POST['text']."%'";
			$usersinfo=User::model()->findAllBySql($sql);
			$text=$_POST['text'];
		}
		if($_GET&&isset($_GET['text'])&&$_GET['text']!=null){
			$sql="select * from user where username like'%".$_GET['text']."%'";
			$usersinfo=User::model()->findAllBySql($sql);
			$text=$_GET['text'];
		}
		if(!isset($usersinfo)){
			$usersinfo=User::model()->findall();
		}
		if(!isset($text)){
			$text="";
		}
		$usersresult=array();
		foreach ($usersinfo as  $user) {
			
			$questionsum=$usersinfo=Question::model()->count("asker=:name",array(":name"=>$user["username"]));
			
			$praiseasum=$usersinfo=Praisea::model()->count("praiser=:name",array(":name"=>$user["username"]));
			
			$praiseqsum=$usersinfo=Praiseq::model()->count("praiser=:name",array(":name"=>$user["username"]));
			$usersresult[]=array(
				"credit"=>$user["credit"],
				"username"=>$user["username"],
				"askquestionsum"=>$questionsum,
				"praiseasum"=>$praiseasum,
				"praiseqsum"=>$praiseqsum
				);
		}
		$data = array(
			'usersinfo'=>$usersresult,
			'text'=>$text
			);

		$this->render('users',$data);

	}
function actionAbout(){
	$this->render("about");
}


}
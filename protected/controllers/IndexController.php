<?php
header("Content-type: text/html;charset=utf-8");

class IndexController extends Controller{
	public function actionIndex(){
		$sql="select * from questions order by praise desc LIMIT 0,10;";
		$questionsinfo=Question::model()->findAllBySql($sql);
		$data = array(
			'questionsinfo'=>$questionsinfo,
			);
		$this->render('index',$data);
	}

	public function actionLogin(){
		// if($_POST['login']){

		// }
$data=array();
		if($_POST){
			$userinfo=User::model()->find('username=:name',array(':name'=>$_POST['loginusername']));
			if($userinfo!=null&&$_POST['loginpassword']==$userinfo->password){
				Yii::app()->user->name=$userinfo->username;
				$this->redirect(array('index'));
			}else{
				Yii::app()->user->name="Guest";
				echo "<script>alert('Wrong Username or Password！')</script>";
			}
		}
if(isset($_GET['error'])){
			$data["error"]=$_GET["error"];
			
		}

		$this->render('login',$data);
		
	}
public function actionCheck(){
		$username=$_POST["username"];
		$password=$_POST['password'];
		$userinfo=User::model()->find('username=:name',array(':name'=>$_POST['username']));
			if($userinfo!=null&&$_POST['password']==$userinfo->password){
                echo json_encode(true);
			}else{
				echo json_encode(false);
			}
		
	}
	public function actionSignCheck(){
		if($_POST){
			$userinfo=User::model()->find('username=:name',array(':name'=>$_POST['username']));
			if($userinfo!=null){
				echo json_encode(false);
			}else{
 				echo json_encode(true);
			}
		}
	}
	public function actionSignup(){

		$userModel=new User();

		if($_POST){
			$userinfo=User::model()->find('username=:name',array(':name'=>$_POST['signusername']));
			if($userinfo!=null){
				echo "<script>alert('Your Username Had Been Used')</script>";
			}else{
				$userModel->username=$_POST['signusername'];
				$userModel->password=$_POST['signpassword'];
				if($userModel->save()){
					Yii::app()->user->name=$userModel->username;
					$this->redirect(array('index'));
				}
			}

		}
		$this->render('signup');		
	}

	public function actionLogout(){
		Yii::app()->user->name="Guest";
		$this->redirect(array('index'));
	}

}
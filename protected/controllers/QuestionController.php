<?php
header("Content-type: text/html;charset=utf-8");

class QuestionController extends Controller{
	public function actionAsk(){
		if($_POST){
			$userinfo=User::model()->find('username=:name',array(':name'=>Yii::app()->user->name));
			
			$sql="select timestamp from questions where asker='".Yii::app()->user->name."'";
			$timesinfo=Question::model()->findallBySql($sql);//获取时间
			$count=0;
			date_default_timezone_set("Asia/Shanghai");
			foreach ($timesinfo as $time){
				if(date('Y/m/d',$time->timestamp)==date('Y/m/d')){
					$count=$count+1;
				}
			}
            $validForm=true;
            
            if(!isset($_POST['title']) || strlen($_POST['title'])<5){
            	$error ="title must be more than 5 chars";
            	$validForm=false; 
            }
			if(!$validForm ||($userinfo['credit']<10&&$count>=1)||$count>=100){
				if(($userinfo['credit']<10&&$count>=1)||$count>=100){
				echo "<script>alert('You Have Exceed the Number of Questions You Can Raise')</script>";
			}
			}else{
				$questionModel=new Question();
				$questionModel->asker=Yii::app()->user->name;
				$questionModel->title=$_POST['title'];
				$questionModel->description=isset($_POST['editorValue'])?$_POST['editorValue']:"无问题的详细描述，作者懒~~";
				$questionModel->timestamp=time();
				$questionModel->tags=$_POST['tags'];
				if($questionModel->save()){
						$this->redirect(array('questions'));
				}
			}
		}
		$data=array(
		"title"=>isset($_POST['title'])?$_POST['title'] : "",
		"description" =>isset($_POST['editorValue'])?$_POST['editorValue'] :"",
		"tags" =>isset($_POST['tags'])?$_POST['tags'] : "",
		"error" =>isset($error)?$error:"",		
			);
		$this->render('ask',$data);
	}

	public function actionQuestions(){
		if($_POST&&$_POST['text']!=null){
			$keywords=explode(' ',$_POST['text']);
			$len=count($keywords);
			$sql="";
			$index=0;
			foreach ($keywords as $keyword){
				if($index==$len-1){
					$sql=$sql."select * from questions where title like'%".$keyword."%' or tags like'%".$keyword."%' order by timestamp desc";

				}else{
					$sql=$sql."select * from questions where title like'%".$keyword."%' or tags like'%".$keyword."%' union ";
				}
				$index=$index+1;
			}
			// $sql="select * from questions where title like'%".$_POST['text']."%' or tags like'%".$_POST['text']."%' order by timestamp desc";
			$questionsinfo=Question::model()->findAllBySql($sql);
			$text=$_POST['text'];
		}
		if($_GET&&isset($_GET['text'])&&$_GET['text']!=null){
			$keywords=explode(' ',$_GET['text']);
			$len=count($keywords);
			$sql="";
			$index=0;
			foreach ($keywords as $keyword){
				if($index==$len-1){
					$sql=$sql."select * from questions where title like'%".$keyword."%' or tags like'%".$keyword."%' order by timestamp desc";

				}else{
					$sql=$sql."select * from questions where title like'%".$keyword."%' or tags like'%".$keyword."%' union ";
				}
				$index=$index+1;
			}
			// $sql="select * from questions where title like'%".$_POST['text']."%' or tags like'%".$_POST['text']."%' order by timestamp desc";
			$questionsinfo=Question::model()->findAllBySql($sql);
			$text=$_GET['text'];
		}
		if(!isset($questionsinfo)){
			$sql="select * from questions order by timestamp desc";
			$questionsinfo=Question::model()->findAllBySql($sql);
		}
		if(!isset($text)){
			$text="";
		}
		if(isset($_GET['page'])){
			$questionBypage=array();
			for($i=12*((int)$_GET['page']-1);$i<count($questionsinfo)&&$i<12*(int)$_GET['page'];$i++){
			$questionBypage[]=$questionsinfo[$i];
		}
		}else{
			$questionBypage=array();
			for($i=0;$i<count($questionsinfo)&&$i<12;$i++){
			$questionBypage[]=$questionsinfo[$i];
		}
		}
		$pages=(int)((count($questionsinfo)-1)/12)+1;
		
		$data = array(
			'questionsinfo'=>$questionBypage,
			'page'         =>isset($_GET['page'])?$_GET['page']:1,
			'pages'        =>$pages,
			'text'         =>$text
		
			);

		$this->render('questions',$data);
	}

	public function actionQuestion($questionid){
		if($_POST){
			$answerModel=new Answer();
			$answerModel->questionid=$questionid;
			$answerModel->answer=$_POST['editorValue'];
			$answerModel->solver=Yii::app()->user->name;
			$answerModel->timestamp=time();
			$userModel=User::model()->find('username=:name',array(':name'=>Yii::app()->user->name));
			$userModel->credit=$userModel->credit+1;
			if($answerModel->save()){
					// echo "<script>alert('Answer Submitted！')</script>";
			}
			if($userModel->save()){

			}
		}
		$sql="select * from answers where questionid =".$questionid." order by praise desc";
		$answersinfo=Answer::model()->findAllBySql($sql);
		// $answersinfo=Answer::model()->findall('questionid=:id',array(':id'=>$questionid));
		$questioninfo=Question::model()->find('id=:id',array(':id'=>$questionid));
		if($_GET && isset($_GET['back'])){
			if($_GET['back'] == "home"){
			$actionback=Yii::app()->createUrl("index/index");
		}else if($_GET['back']=="questions"){
			$actionback=Yii::app()->createUrl("question/questions", array("page"=>$_GET['page']));
		}else{
			$actionback=Yii::app()->createUrl("index/index");
		}
		}
		$praisers=Praiseq::model()->findAll("questionid=:questionid",array(":questionid"=>$questionid));
		if($praisers==null){
			$questionexist=true;
		}else{
		foreach ($praisers as $praiser) {    
		if($praiser["praiser"] == Yii::app()->user->name){
				$questionexist=false;
				break;
			}else{
				$questionexist=true;
			}
		 }
            }
		$resultanswers=array();
		foreach ($answersinfo as $answer) {
			$praisers=Praisea::model()->findAll("answerid=:answerid",array(":answerid"=>$answer["id"]));
			if($praisers==null){
			$exist=true;
		}else{
		foreach ($praisers as $praiser) {
			
		    
		if($praiser["praiser"] == Yii::app()->user->name){
				$exist=false;
				break;
			}else{
				$exist=true;
			}
		
        }
    }
			$resultanswers[]=array(
					"id"=>$answer->id,
					"questionid"=>$answer->questionid,
					"answer"=>$answer->answer,
					"solver"=>$answer->solver,
					"timestamp"=>$answer->timestamp,
					"selected"=>$answer->selected,
					"praise" =>$answer->praise,
					"exist" =>$exist

				);
		}

		$data = array(
			'questioninfo'=>$questioninfo,
			'questionpraise'=>$questionexist,
			'answersinfo'=>$resultanswers,
			'backaction' =>isset($actionback)?$actionback:"javascript:void(0)"
			);
		$this->render('question',$data);
	}


	public function actionPraiseq(){
		if (Yii::app()->request->isAjaxRequest){
			 $questionid = (int)Yii::app()->request->getParam('questionid');
			 $praiseaModel=Praiseq::model();
			 $praises=$praiseaModel->find('praiser=:username AND questionid=:questionid',array(
                ':username' => Yii::app()->user->name, ':questionid' => $questionid));
			 if (empty($praises->questionid)) {
			 	$newpraiseaModel=new Praiseq();
			 	$newpraiseaModel->praiser=Yii::app()->user->name;
			 	$newpraiseaModel->questionid=$questionid;
			 	if($newpraiseaModel->save()){

				}
			 	$questioninfo=Question::model()->find('id=:id',array(':id'=>$questionid));
			 	$questioninfo->praise=$questioninfo->praise+1;
			 	$questioninfo->save();
			 	$result=array('praisecount'=>($questioninfo->praise),"state"=>true);

			 }else{
			 	$praiseaModel->deleteall('praiser=:username AND questionid=:questionid',array(
                ':username' => Yii::app()->user->name, ':questionid' => $questionid));
			 	$questioninfo=Question::model()->findByPk($questionid);
			 	$questioninfo->praise=$questioninfo->praise-1;
			 	$questioninfo->save();
			 	$result=array('praisecount'=>($questioninfo->praise),'state'=>false);
			 }
			 echo CJSON::encode($result);
		}
	}
	public function actionPraisea(){
		if (Yii::app()->request->isAjaxRequest){
			 $answerid = (int)Yii::app()->request->getParam('answerid');
			 $praiseaModel=Praisea::model();
			 $praises=$praiseaModel->find('praiser=:username AND answerid=:answerid',array(
                ':username' => Yii::app()->user->name, ':answerid' => $answerid));
			 if (empty($praises->answerid)) {
			 	$newpraiseaModel=new Praisea();
			 	$newpraiseaModel->praiser=Yii::app()->user->name;
			 	$newpraiseaModel->answerid=$answerid;
			 	if($newpraiseaModel->save()){

				}
			 	$answerinfo=Answer::model()->find('id=:id',array(':id'=>$answerid));
			 	$answerinfo->praise=$answerinfo->praise+1;
			 	$answerinfo->save();
			 	$result=array('praisecount'=>($answerinfo->praise),"state"=>true);

			 }else{
			 	$praiseaModel->deleteall('praiser=:username AND answerid=:answerid',array(
                ':username' => Yii::app()->user->name, ':answerid' => $answerid));
			 	$answerinfo=Answer::model()->findByPk($answerid);
			 	$answerinfo->praise=$answerinfo->praise-1;
			 	$answerinfo->save();
			 	$result=array('praisecount'=>($answerinfo->praise),"state"=>false);
			 }
			 echo CJSON::encode($result);
		}

	}



}
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />    
    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title>Login</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/login.css" rel="stylesheet" type="text/css" />
    
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/other/excanvas.js'></script>
    
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/other/jquery.mousewheel.min.js'></script>
        
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/uniform/jquery.uniform.min.js"></script>
    
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushCss.js'></script>    
    
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/charts.js'></script>
    <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/actions.js'></script>
    
</head>
<body>    
   <div id="loader"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/img/loader.gif"/></div>
       <div id="home">
          <a href= <?php echo Yii::app()->createUrl("index/index")?> ><img src="<?php echo Yii::app()->request->baseUrl;?>/images/close.png"/>
        </a>
       </div>
        <?php if(isset($error)) {?> 
                    <div class="noticediv">
                    <label class="notice"><?php echo $error; ?></label>
                     </div> 
                    <?php } ?>
    <div class="login">

        <div class="page-header">

            <h1>Login </h1>
            <a class="sign" href= <?php echo Yii::app()->createUrl("index/signup")?> >
                   <span class="pd-b-18"> sign up</span><span class="ico-arrow-right icon-white">
                    </a>
        </div>        
        
        <div class="row-fluid">
            <form method="post">
            <div class="row-form">
                <div class="span12">
                    <input type="text" name="username" placeholder="username"/>
                </div>
            </div>
            <div class="row-form">
                <div class="span12">
                    <input type="password" name="password" placeholder="password"/>
                </div>            
            </div>
            <div class="row-form">
                <div class="span12  hidden" id="errordiv">
                     <label class="error" id="errorlabel">name or password exists errors</label>
                </div>   
                <div class="span12">
                     <a >
                    <button class="btn len" onclick="return check()">Log In <span class="ico-arrow-right icon-white"></span></button>
                    
                    </a>
                </div>         
                          
            </div>
            </form>

 
            
        </div>
    </div>
    
</body>
<script style="text/javascript"><!--
function errorShow(){
    $('#errordiv').removeClass("hidden");
}
function errorhide(){
    $('#errordiv').addClass('hidden');
}
//--></script>
<script><!--
function check(){
var username=$("input[name='username']").val();
var password=$("input[name='password']").val();
$('.noticediv').hide();
if(username.length<1 || password.length<1){
    $('#errorlabel').html("input can't be null!");
    errorShow();
}else{
    $.ajax({
        type:"POST",
        url:"index.php?r=index/check",
        dataType:"json",
        data:{"username":username,"password":password},
        success:function($data){
            if($data){
                $("form").submit();
            }else{
                $('#errorlabel').html("name or password exists errors");
              
            }
        }
    });
}
return false;
}

//--></script>

</html>

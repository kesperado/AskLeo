<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <![endif]-->
        <title>Sign Up</title>
        <link rel="icon" type="<?php echo Yii::app()->request->baseUrl;?>/assets/image/ico" href="favicon.ico"/>
        
        <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/stylesheets.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/login.css" rel="stylesheet" type="text/css" />
       <!--[if lt IE 10]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <!--[if lte IE 7]>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/other/lte-ie7.js'></script>
        <![endif]-->
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
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/validationEngine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/validationEngine/jquery.validationEngine.js'></script>
        
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
        <div class="signup">
            <div class="page-header">
                <h1>Sign Up </h1>
                <a class="sign" href= <?php echo Yii::app()->createUrl("index/login")?> >
                   <span class="pd-b-18"> login</span><span class="ico-arrow-right icon-white">
                    </a>
            </div>
            
            <div class="row-fluid">
                <form id="validate" method="POST" >
                    <div class="row-form">
                        
                        <div class="span12">
                            <input type="text" name="username" class="validate[required,maxSize[15]]" placeholder="username"/>
                            
                        </div>
                    </div>
                    <div class="row-form">
                        
                        <div class="span12">
                            <input type="password" name="password" class="validate[required,minSize[5],maxSize[15]]" id="password" placeholder="password"/>
                            
                        </div>
                    </div>
                    <div class="row-form">
                        
                        <div class="span12">
                            <input type="password" name="password" class="validate[required,equals[password]]" placeholder="confirm password"/>
                            
                        </div>
                    </div>
                    <div class="row-form">
                         <div class="span12  hidden" id="errordiv">
                     <label class="error" id="errorlabel">name or password exists errors</label>
                </div> 
                        <div class="span12">
                            <button class="btn len" onclick="return check()">Sign Up <span class="ico-arrow-right icon-white"></span></button>
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

if(username.length<1 || password.length<1){
    $('#errorlabel').html("input can't be null!");
    errorShow();
}else{
    $.ajax({
        type:"POST",
        url:"index.php?r=index/signCheck",
        dataType:"json",
        data:{"username":username,"password":password},
        success:function($data){
            if($data){
                $("form").submit();
            }else{
                $('#errorlabel').html("name has been Used");
                errorShow();
            }
        }
    });
}
return false;
}

//--></script>
    </html>


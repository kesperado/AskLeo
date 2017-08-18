<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <![endif]-->
        <title>Kesperado</title>
        <link rel="icon" type="image/ico" href="favicon.ico"/>
         <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/logincss.css" rel="stylesheet" type="text/css" /> 
        <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/stylesheets.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/index.css" rel="stylesheet" type="text/css" />
         
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jquery/jquery-1.9.1.min.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jquery/globalize.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/other/excanvas.js'></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/other/jquery.mousewheel.min.js'></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/bootstrap/bootstrap.min.js'></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jflot/jquery.flot.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jflot/jquery.flot.stack.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jflot/jquery.flot.pie.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/jflot/jquery.flot.resize.js'></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/sparklines/jquery.sparkline.min.js'></script>

        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/uniform/jquery.uniform.min.js"></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/XRegExp.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shCore.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushXml.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushJScript.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushCss.js'></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/charts.js'></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/actions.js'></script>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/ueditor.all.min.js"> </script>
        <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
        <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
        <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/lang/zh-cn/zh-cn.js"></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/praise.js'></script>
    </head>
    <body>
        <div id="loader"><img src="img/loader.gif"/></div>
        <div class="theme-popover theme-login" style="font-family: arial, sans-serif">
             <div class="theme-poptit">
                  <a href="javascript:;" title="Close" class="close signclose">×</a>
                  <h4>LOGIN, IS AN ATTITUDE</h4>
             </div>
             <div class="theme-popbod dform">
                   <form class="theme-signin loginform" name="loginform" action="index.php?r=index/login" method="post">
                        <ol>
                             <li ><h4 id="loginerrorlabel" class="error">You Have To Login First！</h4></li>
                             <li><strong>Username：</strong><input class="ipt" type="text" name="loginusername" value="" size="20" /></li>
                             <li><strong>Password：</strong><input class="ipt" type="password" name="loginpassword" value="" size="20" /></li>
                             <li><button class="btn"  onclick="return check()" > Login </button></li>
                        </ol>
                   </form>
                   <h5 style="padding-right:20px;text-align:right;">No Account? Please <a href="javascript:void(0)" class="themesignup">Sign Up</a></h5>
             </div>
       </div>
       <div class="theme-popover theme-sign" style="font-family: arial, sans-serif">
             <div class="theme-poptit ">
                  <a href="javascript:;" title="Close" class="themesignupclose close">×</a>
                  <h5>SIGNUP, IS AN ATTITUDE</h5>
             </div>
             <div class="theme-popbod dform">
                   <form class="theme-signin signupform" name="signupform" action="index.php?r=index/signup" method="post">
                        <ol>
                             <li ><h4 id="signerrorlabel" class="error">Welcome To Our Society!</h4></li>
                             <li><strong>Username：</strong><input class="ipt" type="text" name="signusername" value="" size="20" /></li>
                             <li><strong>Password：</strong><input class="ipt" type="password" name="signpassword" value="" size="20" /></li>
                             <li><strong>Confirm：</strong><input class="ipt" type="password" name="signconfirpassword" value="" size="20" /></li>
                             <li><button class="btn" onclick="return signcheck()" > Sign Up </button></li>
                        </ol>
                   </form>
                   <h5 style="padding-right:20px;text-align:right;">Already Have Account? PLease <a href="javascript:void(0)" class="themelogin">Login</a></h5>
             </div>
       </div>
        <div class="body">
            
               <div class = "topnavigation" style="float:right">
                <ul class="navigation">
               <li >
                        <?php
                        echo '<a href="'.Yii::app()->createUrl("index/index").'" class="blblue">Homepage </a>';
                        ?>
                    </li>
                    <li>
                         <?php
                        echo '<a href="'.Yii::app()->createUrl("question/questions",array("page"=>1)).'" class="blyellow">Discovers </a>';
                        ?>
                        <!-- <a href="questions.html" class="blyellow">Questions</a> -->
                    </li>
                    <li>
                        <?php
                        if(Yii::app()->user->name!="Guest"){
                        echo '<a href="'.Yii::app()->createUrl("question/ask").'" class="blgreen">Ask </a>';
                    }else{
                       echo '<a href="javascript:void(0)" class="blgreen themelogin">Ask </a>';
                    }
                         ?>
                        <!-- <a href="ask.html" class="blgreen">Ask</a> -->
                    </li>
                   

                        <?php
                            if(Yii::app()->user->name=="Guest"){
                                echo '<li><a href="javascript:void(0)" class="blpurple themelogin">Log in </a> </li>';
                            }else{
                                echo '<li class="mainlevel"><a href="javascript:void(0)" class="blpurple">'.Yii::app()->user->name.'</a> ';
                                echo '<ul>';
                                echo '<li><a href="'.Yii::app()->createUrl("user/personal",array('username'=>Yii::app()->user->name)).'" class="blpurple">Personal</a></li>';
                                echo '<li><a href="'.Yii::app()->createUrl("user/about").'"class="blpurple">About</a></li>';
                                echo '<li><a href="'.Yii::app()->createUrl("index/logout").'" class="blpurple">Logout</a></li>'; 
                                echo '</ul>';
                                echo '</li>';
                            }
                        ?>          
                </ul>
            </div>
            
            <div class="content">
                
                <div class="page-header">
                    <div class="icon">
                        <a href="<?php echo $backaction;?>"><span class="ico-arrow-left"></span></a>
                    </div>
                    <h1>Solve<small>SHARE YOUR INTELLIGENCE</small></h1>
                </div>
                <div class="row-fluid">
                    
                    <div class="praise-sidebar">
                        <div class="btn-group praise-button">
                            <button onclick=<?php if(Yii::app()->user->name=="Guest"){
                                    echo "loginstart()";
                                }else{
                                    echo "praiseq(".$questioninfo->id.")";
                                }?> id="questionpraisebtn" class="btn btn-primary <?php echo (!$questionpraise)?'praisenoactive':'' ?>" type="button"><span class="icon-thumbs-up icon-white"></span></button>
                            <h4 id="questionpraise"><?php echo $questioninfo->praise?></h4>
                        </div>
                    </div>
                    <div class ="question-part">
                        <div class="question-title">
                            <?php echo $questioninfo->title?>

                        </div>
                        <br>
                        <div class="question-description">

                            <?php echo $questioninfo->description?>
                        </div>
                        <div class="question-author">
                            asked by <?php echo $questioninfo->asker?>
                             <?php date_default_timezone_set("Asia/Shanghai");
                             echo date('Y/m/d',$questioninfo->timestamp) ?>
                        </div>
                    </div>
                </div>
                 <?php foreach ($answersinfo as $answerinfo):?> 
                <div class="row-fluid">
                    <div class="praise-sidebar">
                        <div class="btn-group praise-button">
                            <button onclick=
                                <?php if(Yii::app()->user->name=="Guest"){
                                    echo "loginstart()";
                                }else{
                                    echo "praisea(".$answerinfo["id"].")";
                                }
                            ?> id=<?php echo "answerpraisebtn".$answerinfo['id'];?> class="btn btn-primary <?php echo (!$answerinfo['exist'])?"praisenoactive":"" ?>"><span class="icon-thumbs-up icon-white"></span></button>
                            <?php echo '<h4 id="answerpraise_'.$answerinfo["id"].'">' ?><?php echo $answerinfo["praise"]?></h4>
                        </div>
                    </div>
                    <div class="answer-part">
                        <div class="question-description">
                            <?php echo $answerinfo["answer"] ?>
                        </div>
                        <div class="question-author">
                            answered by <?php echo $answerinfo["solver"] ?>
                             <?php date_default_timezone_set("Asia/Shanghai");
                             echo date('Y/m/d',$answerinfo["timestamp"]) ?>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>

                <div class="row-fluid">
                    <div class="answer-title">Your Answer</div>
                    <form method="POST">
                        <div class="answer-text" ><textarea id="editor" style="height:300px"></textarea></div>
                        
                        <div class="span4 answer-submit">
                   <!--          <?php
                            // echo '<a href="'.Yii::app()->createUrl("question/answer").'" >'
                            ?> -->
                            <button class="btn btn-middle btn-block btn-primary" type="submit">Submmit</button>
                            <!-- </a> -->
                        </div>
                    <script type="text/javascript">
                    //实例化编辑器
                    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                    var ue = UE.getEditor('editor');
                    </script>
                    </form>

                </div>
            </div>
            
        </div>
        
    </div>
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
 <div class="theme-popover-mask"></div>
</body>

<script>
function loginstart(){
     $('.theme-sign').fadeOut("fast",function(){
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-login').slideDown(200);
        });
    }

</script>
<script>
jQuery(document).ready(function() {
    $('.themelogin').click(function(){
        document.loginform.reset();
       $('#loginerrorlabel').html("You Have To Login First！");
        $('.theme-sign').fadeOut("fast",function(){
            $('.theme-popover-mask').fadeIn(100);
            $('.theme-login').slideDown(200);
        });
      
       
    })
    $('.theme-poptit .close').click(function(){
        $('.theme-popover-mask').fadeOut(100);
        $('.theme-login').slideUp(200);
    })
   $('.themesignup').click(function(){
        document.signupform.reset();
         $('#signerrorlabel').html("Welcome To Our Society!");
        $('.theme-login').fadeOut("fast",function(){
         $('.theme-popover-mask').fadeIn(100);
         $('.theme-sign').slideDown(200);
        });
       
    })
    $('.themesignupclose').click(function(){
        $('.theme-popover-mask').fadeOut(100);
        $('.theme-sign').slideUp(200);
    }) 
})
</script>
<script type="text/javascript">
function check(){
var username=$("input[name='loginusername']").val();
var password=$("input[name='loginpassword']").val();
$('.noticediv').hide();
if(username.length<1 || password.length<1){
    $('#loginerrorlabel').html("input can't be null!");
   
}else{
    $.ajax({
        type:"POST",
        url:"index.php?r=index/check",
        dataType:"json",
        data:{"username":username,"password":password},
        success:function($data){
            if($data){
                $(".loginform").submit();
            }else{
                $('#loginerrorlabel').html("name or password exists errors");
                
            }
        }
    });
}
return false;
}


</script>
<script><!--
function signcheck(){
var username=$("input[name='signusername']").val();
var password=$("input[name='signpassword']").val();
var confirepassword=$("input[name='signconfirpassword']").val();
if(username.length<1 || password.length<1 || confirepassword.length <1){
    $('#signerrorlabel').html("input can't be null!");
    
}else if(confirepassword.trim()!=password.trim()){
$('#signerrorlabel').html("passwords isn't same");
}else{
    $.ajax({
        type:"POST",
        url:"index.php?r=index/signCheck",
        dataType:"json",
        data:{"username":username,"password":password},
        success:function($data){
            if($data){
                $(".signupform").submit();
            }else{
                $('#signerrorlabel').html("name has been Used");
              
            }
        }
        
    });
}
return false;
}

//--></script>

<script>
$(document).ready(function(){
  $('li.mainlevel').mousemove(function(){
  $(this).find('ul').slideDown();//you can give it a speed
  });
  $('li.mainlevel').mouseleave(function(){
  $(this).find('ul').slideUp("fast");
  });
});

$(function(){   
    var cubuk_seviye = $(document).scrollTop();
    var header_yuksekligi = $('.topnavigation').outerHeight();

    $(window).scroll(function() {
        var kaydirma_cubugu = $(document).scrollTop();

        if (kaydirma_cubugu > header_yuksekligi){$('.topnavigation').addClass('hideA');} 
        else {$('.topnavigation').removeClass('hideA');}

        if (kaydirma_cubugu > cubuk_seviye){$('.topnavigation').removeClass('showA');} 
        else {$('.topnavigation').addClass('showA');}                

        cubuk_seviye = $(document).scrollTop(); 
     });
});
</script>
</html>
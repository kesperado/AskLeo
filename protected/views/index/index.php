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

    </head>
    <body>
        <img class="backimg" src="<?php echo Yii::app()->request->baseUrl;?>/images/white.jpg"/>
        <div id="loader"><img src="<?php echo Yii::app()->request->baseUrl;?>/assets/img/loader.gif"/></div>
        
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
                        <span class="ico-arrow-right"></span>
                    </div>
                    <h1>Home <small>WELCOME TO TCHENOLOGY PARADISE</small></h1>
                </div>
                <div class="row-fluid">
                    
                    <div class="head" style="margin:10px 60px">
                        
                        <h3>Hot Questions</h3>
                    </div>
                    
                    <div class="data-fluid" >
                        <table width="100%" class="table questions tablefix" >
                            <?php  $questionNum=0; ?>
                           <?php foreach ($questionsinfo as $questioninfo):?> 
                            <tr>
                                <td class="bl_blue"></td>
                                <td class="answername wid-60">
                                    <?php echo $questioninfo->asker ?>
                                    <span class="mark">
                                    <?php date_default_timezone_set("Asia/Shanghai");
                                     echo date('Y/m/d',$questioninfo->timestamp) ?>
                                    </span>
                                </td>
                                <td class="namefixlen ">
                                    <?php echo '<a href="'.Yii::app()->createUrl("question/question",array("questionid"=>$questioninfo->id,"back"=>"home")).'" class="cblue">' ?>
                                    <?php echo "<span class='namefixlen'>".$questioninfo->title."</span>"; ?>
                                    </a><span id="img<?php echo $questionNum;?>"  class="cblue ft-right downlabel" onclick="conshow('<?php echo $questionNum; ?>')"></span> <br>
                                    <label id="<?php echo $questionNum;?>" class="description hide"><?php echo $questioninfo->description; ?></label>

                                    <?php $tags=explode(',',$questioninfo->tags) ?>
                                    <?php foreach ($tags as $tag): ?>
                                    <span class="tag">
                                        <?php 
                                            echo $tag
                                        ?>
                                    </span>
                                    <?php endforeach ?>
                                    <?php $questionNum++; ?>
                                </td>
                               
                              <!--   echo  '<td class="answername">'.$questionsinfo->asker.'<span class="mark">'.$questionsinfo->timestamp.'</span></td>';
                                echo '<td><a href="question.html" class="cblue">'.$questionsinfo->title.'</a><br><span class="tag">'.$questionsinfo->tags.'</span></td>';  -->
                               
                            </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    
                    
                    
                    
                    
                </div>
                
            </div>

        </div>

        
    <div class="footer">
      Posted by: Kesperado<br>2015@NanJing University
    </div>
    <div class="theme-popover-mask"></div>
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
                $('#loginerrorlabel').html("Name or Password Exists Errors");
                
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
jQuery(document).ready(function($) {
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
function conshow($questionNum){
    //$("#"+$questionNum).removeClass("hide");
    //$("#"+$questionNum).addClass("show");
    $("#img"+$questionNum).attr("onclick","chide("+$questionNum+")");
    $("#img"+$questionNum).removeClass("downlabel");
    $("#img"+$questionNum).addClass("uplabel");
    $("#"+$questionNum).slideDown("fast");
}
function chide($contentid){
    $("#"+$contentid).slideUp("fast");
   // $("#"+$contentid).removeClass("show");
    $("#img"+$contentid).attr("onclick","conshow("+$contentid+")");
    $("#img"+$contentid).removeClass("uplabel");
    $("#img"+$contentid).addClass("downlabel");
    
}

</script>
    
 

  <script>
$(document).ready(function(){
  $('li.mainlevel').mousemove(function(){
  $(this).find('ul').slideDown("fast");//you can give it a speed
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

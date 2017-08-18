<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <![endif]-->
        <title>Kesperado</title>
        <link rel="icon" type="'<?php echo Yii::app()->request->baseUrl;?>/assets/image/ico" href="favicon.ico"/>
        
        <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/stylesheets.css" rel="stylesheet" type="text/css" />
         <link href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/index.css" rel="stylesheet" type="text/css" />
       <!--[if lte IE 7]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" />
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/other/lte-ie7.js'></script>
        <![endif]-->
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
        

        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/uniform/jquery.uniform.min.js'></script>
        
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
        <div id="loader"><img src="'<?php echo Yii::app()->request->baseUrl;?>/assets/img/loader.gif"/></div>
        
        
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
                        echo '<a href="'.Yii::app()->createUrl("question/ask").'" class="blgreen">Ask </a>';
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
<!--                     <li >
                        <a href="index.html" class="blblue">Homepage</a>
                    </li>
                    <li>
                        <a href="questions.html" class="blyellow">Questions</a>
                    </li>
                    <li>
                        <a href="ask.html" class="blgreen">Ask</a>
                    </li>
                    <li>
                        <a href="personal.html" class="bldblue">Personal</a>
                        
                    </li>
                    <li>
                        <a href="login.html" class="blpurple">Log in</a>
                    </li> -->
                </ul>
            </div>
            
            
            <div class="content">
                
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-arrow-right"></span>
                    </div>
                    <h1>Personal <small>YOUR PERSONAL HOMEPAGE</small></h1>
                </div>

            <div class="row-fluid" style="border-bottom:0px solid #fff !important;padding:60px;">
                <div class="span11">
                    <div class="block">
                        <div class="data invoice">
                            <div class="row-fluid" >
                                
                                <div class="span3">
                                    <img src="images/touxiang.png" align="middle" height="200" width="200">
                                </div>
                                <div class="span4">
                                    <h3>
                                    <?php
                                    if($targetusername==Yii::app()->user->name){
                                    echo Yii::app()->user->name;
                                    }else{
                                    echo $targetusername;
                                    }
                                    ?>
                                    </h3>
                                    <address>
                                        <span aria-hidden="true" class="ico-location"></span>
                                        Nanjing, JiangSu, China<br><br>
                                        <span aria-hidden="true" class="icon-book"></span>
                                        Nanjing University, Software Engineering<br><br>
                                        <span aria-hidden="true" class="icon-briefcase"></span>
                                        Research Staff, IBM Research - China<br><br>
                                        <span aria-hidden="true" class="ico-heart"></span>
                                        Machine Learning, Data Mining
 
                                        
                                    </address>
                            </div>
                            <div class="span4">
                                <br><br><br>
                                
                                <address>
                                    <span aria-hidden="true" class="ico-credit"></span>
                                    Credit: 31<br><br>
                                    <span aria-hidden="true" class="ico-phone-2"></span>
                                    +86 (025) 345-67-89<br><br>
                                    <span aria-hidden="true" class="icon-envelope"></span>
                                    kesperado@Leo.com<br><br>
                                    <span aria-hidden="true" class="icon-home"></span>
                                    22 Hankou Road, Nanjing, JiangSu, China
                                
                                
                            </address>
                        </div>
                       
                    </div>
                    <h3>Activity</h3>
                    <h4>Asked</h4>
                    <table class="table" width="100%">
 <?php foreach ($questionsinfo as $questioninfo):?>
                <tr>
                    
                    <td class="answername">
                        <?php echo $questioninfo->asker ?>
                        <span class="mark">
                            <?php date_default_timezone_set("Asia/Shanghai");
                            echo date('Y/m/d',$questioninfo->timestamp) ?>
                        </span>
                    </td>
                    <td>
                        <?php echo '<a href="'.Yii::app()->createUrl("question/question",array("questionid"=>$questioninfo->id)).'" class="cblue">' ?>
                            <?php echo $questioninfo->title ?>
                        </a><br>
                        <?php $tags=explode(',',$questioninfo->tags) ?>
                        <?php foreach ($tags as $tag): ?>
                        <span class="tag">
                            <?php
                            echo $tag
                            ?>
                        </span>
                        <?php endforeach ?>
                    </td>
                </tr>
                <?php endforeach ?>
                    </table>

                    <h4>Answered</h4>
                    <table class="table" width="100%">
                    <?php foreach ($answersinfo as $questioninfo):?>
            <tr>
                
                <td class="answername">
                    <?php echo $questioninfo->asker ?>
                    <span class="mark">
                        <?php date_default_timezone_set("Asia/Shanghai");
                        echo date('Y/m/d',$questioninfo->timestamp) ?>
                    </span>
                </td>
                <td>
                    <?php echo '<a href="'.Yii::app()->createUrl("question/question",array("questionid"=>$questioninfo->id)).'" class="cblue">' ?>
                        <?php echo $questioninfo->title ?>
                    </a><br>
                    <?php $tags=explode(',',$questioninfo->tags) ?>
                    <?php foreach ($tags as $tag): ?>
                    <span class="tag">
                        <?php
                        echo $tag
                        ?>
                    </span>
                    <?php endforeach ?>
                </td>
            </tr>
            <?php endforeach ?>
              </table>

                </div>
            </div>
        </div>
    </div>
                    
                    
                    
                    
                </div>
            </div>
            
        </div>
        
    </div>
    
    <div class="dialog" id="source" style="display: none;" title="Source"></div>
<div class="footer">
      Posted by: Kesperado<br>2015@NanJing University
    </div>
</body>
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
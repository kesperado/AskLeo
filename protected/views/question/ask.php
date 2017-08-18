<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <![endif]-->
        <title>Kesperado</title>
        <link rel="icon" type="<?php echo Yii::app()->request->baseUrl;?>/assets/image/ico" href="favicon.ico"/>
        
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

        <script type='text/javascript' src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/uniform/jquery.uniform.min.js"></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/XRegExp.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shCore.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushXml.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushJScript.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/shbrush/shBrushCss.js'></script>
        
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/charts.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/actions.js'></script>
        <script type='text/javascript' src='<?php echo Yii::app()->request->baseUrl;?>/assets/js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/ueditor.all.min.js"> </script>
        <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
        <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
        <script type="text/javascript" charset="utf-8" src="<?php echo Yii::app()->request->baseUrl;?>/assets/js/lang/zh-cn/zh-cn.js"></script>
    </head>
    <body>
        
        
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
                </ul>
            </div>
            
            
            <div class="content">
                
                <div class="page-header">
                    <div class="icon">
                        <span class="ico-arrow-right"></span>
                    </div>
                    <h1>Ask<small>RAISE QUESTION YOU MET</small></h1>
                </div>
                <div class="row-fluid">
                    <div class="data-fluid">
                        <form method="POST">
                            <div class="row-form">
                                <div class="span1">Title:</div>
                                <div class="span6"><input type="text" name="title"/></div>
                                <div class="span4" style="float:left;color:red"><?php echo $error;?></div>
                            </div>
                            <div class="row-form">
                                <div class="span1">Description:</div>
                                <div class="span10"><textarea id="editor" style="height:350px"></textarea></div>
                            </div>
                            <script type="text/javascript">
                            //实例化编辑器
                            //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                            var ue = UE.getEditor('editor');
                            </script>
                            <div class="row-form">
                                <div class="span1">Tags:</div>
                                <div class="span6">
                                    <input type="text" name="tags" class="tags" value=""/>
                                </div>
                            </div>
                            <div class="row-form">
                                <div class="span1"></div>
                                <div class="span3">
                                      <button class="btn btn-middle btn-block btn-primary" style ="float:left" type="submmit">Submit</button>
                                    
                                </div>
                                <div class="span3">
                                <button class="btn btn-middle btn-block btn-primary" style="float:right" type="reset">Reset</button>
                                        
                                </div>
                            </div>
                        </form>
                        
                        
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
<script type="text/javascript"><!--
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
  //-->  </script>
</html>
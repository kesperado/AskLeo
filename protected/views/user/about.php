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
        
        <div class="theme-popover theme-login">
             <div class="theme-poptit">
                  <a href="javascript:;" title="Close" class="close signclose">×</a>
                  <h5>LOGIN, IS AN ATTITUDE</h5>
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
                   <h5>No Account? Please <a href="javascript:void(0)" class="themesignup">Sign Up</a></h5>
             </div>
       </div>
       <div class="theme-popover theme-sign">
             <div class="theme-poptit ">
                  <a href="javascript:;" title="Close" class="themesignupclose close">×</a>
                  <h5>SIGNUP, IS AN ATTITUDE</h5>
             </div>
             <div class="theme-popbod dform">
                   <form class="theme-signin signupform" name="loginform" action="index.php?r=index/signup" method="post">
                        <ol>
                             <li ><h4 id="signerrorlabel" class="error">Welcome To Our Society!</h4></li>
                             <li><strong>Username：</strong><input class="ipt" type="text" name="signusername" value="" size="20" /></li>
                             <li><strong>Password：</strong><input class="ipt" type="password" name="signpassword" value="" size="20" /></li>
                             <li><strong>Confirm：</strong><input class="ipt" type="password" name="signconfirpassword" value="" size="20" /></li>
                             <li><button class="btn" onclick="return signcheck()" > Sign Up </button></li>
                        </ol>
                   </form>
                   <h5>Already Have Account? PLease<a href="javascript:void(0)" class="themelogin">Login</a></h5>
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
<!--                     <li>
                         <?php
                          //if(Yii::app()->user->name!="Guest"){
                        // echo '<a href="'.Yii::app()->createUrl("user/personal",array("username"=>Yii::app()->user->name)).'" class="bldblue">Personal </a>';
                        //}else{
                          //  echo '<a href="javascript:void(0)" class="bldblue themelogin">Personal </a>';
                        //}
                         ?>
                        
                    </li> -->

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
                    <h1>About <small>ANYTHING ABOUT US</small></h1>
                </div>
                <!--body start-->
  <div class="container" style="margin-top:70px;">

    <!-- search start -->
    <div class="jumbotron about-panel color-blue2">

      <ul class="nav nav-pills about-ul" role="tablist">
        <li role="presentation" class="active"><a style="color: #08C;background-color: #FFF;" data-toggle="tab" href="#about">关于我们</a></li>
        <li role="presentation"><a style="color: #08C;background-color: #FFF;" data-toggle="tab" href="#right">版权声明</a></li>
        <li role="presentation"><a style="color: #08C;background-color: #FFF;" data-toggle="tab" href="#privacy">隐私保护</a></li>
      
      </ul>
    </div>
    <!-- search end -->

    <!-- tags start -->
    <div class="tab-content" style="padding:0px 40px 0px 0px">
      <!-- about start -->
      <div class="tab-pane active" id="about" style="padding:0px 20px 0px 20px">
        <h3 class="about-h3">关于我们</h3>
        <p>Kesperado是一个为IT专家和程序爱好者打造的IT技术问答网站。无需注册，您即可免费浏览、搜索站内任何问题。我们不会弹出任何广告，销售信息，JavaScript 窗口等。</p>
        <p>为保证问题质量，我们参考 Reddit 等网站的用户激励机制，通过威望值与徽章建立起信任评价体系，并且做到对参与者的有效激励。</p>
        <p>我们希望通过Kesperado平台帮助ITers解决程序问题，分享编程经验，在程序猿之路上一路奔跑。</p>
        <h3 class="about-h3">网站功能</h3>
        <h4 class="about-h3">一、浏览</h4>
        <p>您可以查看站内所有问题及其具体内容、作者、回答。对于认可的问题您可以点赞支持它。</p>
        <p>您可以查看站内所有用户的信息（对方设置为公开的信息）。</p>
        <h4 class="about-h3">二、搜索</h4>
        <p>您可以通过关键词搜索站内所有问题、标签、用户。</p>
        <h4 class="about-h3">三、提问</h4>
        <p>登录后，您可以发布任何程序相关的问题，由其他用户为您解答。发布问题时，可以为问题添加标签，方便领域专家搜索解答；可以上传图片、附件以更好的阐述问题内容。</p>
        <h4 class="about-h3">四、评论/回答</h4>
        <p>登录后，您可以回答站内所有问题或评论他人的回答。无意义的评论或回答会被删除并扣分哟~</p>
        <h4 class="about-h3">五、排行榜</h4>
        <p>系统会根据问题的浏览数、回答数、投票数进行排名，分为周排行、月排行。</p>
        <h4 class="about-h3">六、积分</h4>
        <p>系统会为每位用户设立积分，并依照积分划分不同的权限。具体的积分规则与权限说明如下：</p>
        <h4 class="about-h3">1.积分规则</h4>
        <p>
          <ul>
            <li>发表一个回答，+2分；若回答被认定为灌水帖，则删除并扣除所加分</li>
            <li>回答被赞1次，+2分</li>
            <li>回答被采纳，+10分</li>
            <li>发布一个问题，+2分；若问题被认定为重复问题，则删除并扣除所加分</li>
            <li>问题被赞1次，+2分</li>
          </ul>
        </p>

      </div>
      <!-- about end -->
      <!-- right start -->
      <div class="tab-pane" id="right" style="padding:0px 20px 0px 20px">
        <h3 class="about-h3">版权声明</h3>
        <h4 class="about-h3">一、特别提示</h4>
        <p>1.1 Kesperado中国同意按照本协议的规定及其不时发布的操作规则提供基于互联网以及移动网相关服务（以下称"网络服务"），为获得网络服务，服务使用人（以下称"用户"）应当同意本协议的全部条款并按照页面上的提示完成全部的注册程序。用户在进行注册程序过程中点击"同意"按钮即表示用户完全接受本协议项下的全部条款。</p>
        <p>1.2 用户注册成功后，Kesperado中国将给予每个用户一个用户帐号及相应的密码，该用户帐号和密码由用户负责保管；用户应当对以其用户帐号进行的所有活动和事件负法律责任</p>
        <h4 class="about-h3">二、服务内容</h4>
        <p>2.1 Kesperado中国网络服务的具体内容由Kesperado中国根据实际情况提供，例如搜索、资讯、分享、原创、竞赛和活动等。</p>
        <p>2.2 Kesperado中国提供的部分网络服务为收费的网络服务，用户使用收费网络服务需要向Kesperado中国支付一定的费用。对于收费的网络服务，Kesperado中国会在用户使用之前给予用户明确的提示，只有用户根据提示确认其愿意支付相关费用，用户才能使用该等收费网络服务。如用户拒绝支付相关费用，则Kesperado中国有权不向用户提供该等收费网络服务。</p>
        <p>2.3 用户理解，Kesperado中国仅提供相关的网络服务，除此之外与相关网络服务有关的设备（如个人电脑、其他与接入互联网或移动网有关的装置）及所需的费用（如为接入互联网而支付的电话费及上网费）均应由用户自行负担。</p>
        <h4 class="about-h3">三、服务变更、中断或终止</h4>
        <p>3.1 鉴于网络服务的特殊性，用户同意Kesperado中国有权随时变更、中断或终止部分或全部的网络服务（包括收费网络服务）。如变更、中断或终止的网络服务属于免费网络服务，Kesperado中国无需通知用户，也无需对任何用户或任何第三方承担任何责任；如变更、中断或终止的网络服务属于收费网络服务，Kesperado中国应当在变更、中断或终止之前事先通知用户，并应向受影响的用户提供等值的替代性的收费网络服务，如用户不愿意接受替代性的收费网络服务，就该用户已经向Kesperado中国支付的服务费，Kesperado中国应当按照该用户实际使用相应收费网络服务的情况扣除相应服务费之后将剩余的服务费退还给该用户。</p>
        <p>3.2 用户理解，Kesperado中国需要定期或不定期地对提供网络服务的平台（如互联网网站）或相关的设备进行检修或者维护，如因此类情况而造成收费网络服务在合理时间内的中断，Kesperado中国无需为此承担任何责任，但Kesperado中国应尽可能事先进行通告。</p>
        <p>3.3 如发生下列任何一种情形，Kesperado中国有权随时中断或终止向用户提供本协议项下的网络服务（包括收费网络服务）而无需对用户或任何第三方承担任何责任：</p>
         <p>3.3.1 用户提供的个人资料不真实；</p>
         <p>3.3.2 用户违反本协议中规定的使用规则；</p>
         <p>3.3.3 用户在使用收费网络服务时未按规定向Kesperado中国支付相应的服务费。</p>
        <p>3.4 如用户注册的免费网络服务的帐号在任何连续180日内未实际使用，或者用户注册的收费网络服务的帐号在其订购的收费网络服务的服务期满之后连续180日内未实际使用，则Kesperado中国有权删除该帐号并停止为该用户提供相关的网络服务。</p>
        <h4 class="about-h3">四、使用规则</h4>
        <p>4.1 用户在申请使用Kesperado中国网络服务时，必须向Kesperado中国提供准确的个人资料，如个人资料有任何变动，必须及时更新。</p>
        <p>4.2 用户不应将其帐号、密码转让或出借予他人使用。如用户发现其帐号遭他人非法使用，应立即通知Kesperado中国。因黑客行为或用户的保管疏忽导致帐号、密码遭他人非法使用，Kesperado中国不承担任何责任。</p>
        <p>4.3 用户必须同意接受Kesperado中国通过电子邮件或其他方式向用户发送商品促销或其他相关商业信息。</p>
        <p>4.4 用户对于其创作并通过Kesperado中国网络服务上传到Kesperado中国网站上的内容依法享有版权及其他相关合法权利。</p>
        <p>4.5 用户在使用Kesperado中国网络服务过程中，必须遵循以下原则：</p>
         <p>4.5.1 遵守中国有关的法律和法规；</p>
         <p>4.5.2 遵守所有与网络服务有关的网络协议、规定和程序；</p>
         <p>4.5.3 不得为任何非法目的而使用网络服务系统；</p>
         <p>4.5.4 不得利用Kesperado中国网络服务系统进行任何可能对互联网正常运转造成不利影响的行为；</p>
         <p>4.5.5 不得利用Kesperado中国提供的网络服务上传、展示或传播任何虚假的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、庸俗淫秽的或其他任何非法的信息资料；</p>
         <p>4.5.6 不得侵犯其他任何第三方的专利权、著作权、商标权、名誉权或其他任何合法权益；</p>
         <p>4.5.7 不得利用Kesperado中国网络服务系统进行任何不利于Kesperado中国的行为；</p>
         <p>4.5.8 如发现任何非法使用用户帐号或帐号出现安全漏洞的情况，应立即通告Kesperado中国。</p>
        <p>4.6 如用户在使用网络服务时违反任何上述规定，Kesperado中国或其授权的人有权要求用户改正或直接采取一切必要的措施（包括但不限于更改或删除用户张贴的内容等、暂停或终止用户使用网络服务的权利）以减轻用户不当行为造成的影响。</p>
        <p>4.7 Kesperado中国针对某些特定的Kesperado中国网络服务的使用通过各种方式（包括但不限于网页公告、电子邮件、短信提醒等）作出的任何声明、通知、警示等内容视为本协议的一部分，用户如使用该等Kesperado中国网络服务，视为用户同意该等声明、通知、警示的内容。</p>
        <h4 class="about-h3">五、知识产权</h4>
        <p>5.1 Kesperado中国提供的网络服务中包含的任何文本、图片、图形、音频和/或视频资料均受版权、商标和/或其它财产所有权法律的保护，未经相关权利人同意，上述资料均不得在任何媒体直接或间接发布、播放、出于播放或发布目的而改写或再发行，或者被用于其他任何商业目的。所有这些资料或资料的任何部分仅可作为私人和非商业用途而保存在某台计算机内。Kesperado中国不就由上述资料产生或在传送或递交全部或部分上述资料过程中产生的延误、不准确、错误和遗漏或从中产生或由此产生的任何损害赔偿，以任何形式，向用户或任何第三方负责。</p>
        <p>5.2 Kesperado中国为提供网络服务而使用的任何软件（包括但不限于软件中所含的任何图像、照片、动画、录像、录音、音乐、文字和附加程序、随附的帮助材料）的一切权利均属于该软件的著作权人，未经该软件的著作权人许可，用户不得对该软件进行反向工程（reverse engineer）、反向编译（decompile）或反汇编（disassemble）。</p>
        <h4 class="about-h3">六、隐私保护</h4>
        <p>6.1 保护用户隐私是Kesperado中国的一项基本政策，Kesperado中国保证不对外公开或向第三方提供单个用户的注册资料及用户在使用网络服务时存储在Kesperado中国的非公开内容，但下列情况除外：</p>
        <p>6.1.1 事先获得用户的明确授权；</p>
        <p>6.1.2 根据有关的法律法规要求</p>
        <p>6.1.3 按照相关政府主管部门的要求；</p>
        <p>6.1.4 为维护社会公众的利益；</p>
        <p>6.1.5 为维护Kesperado中国的合法权益。</p>
        <p>6.2 Kesperado中国可能会与第三方合作向用户提供相关的网络服务，在此情况下，如该第三方同意承担与Kesperado中国同等的保护用户隐私的责任，则Kesperado中国有权将用户的注册资料等提供给该第三方</p>
        <p>6.3 在不透露单个用户隐私资料的前提下，Kesperado中国有权对整个用户数据库进行分析并对用户数据库进行商业上的利用。</p>
        <h4 class="about-h3">七、免责声明</h4>
        <p>7.1 用户明确同意其使用Kesperado中国网络服务所存在的风险将完全由其自己承担；因其使用Kesperado中国网络服务而产生的一切后果也由其自己承担，Kesperado中国对用户不承担任何责任。</p>
        <p>7.2 Kesperado中国不担保网络服务一定能满足用户的要求，也不担保网络服务不会中断，对网络服务的及时性、安全性、准确性也都不作担保。</p>
        <p>7.3 Kesperado中国不保证为向用户提供便利而设置的外部链接的准确性和完整性，同时，对于该等外部链接指向的不由Kesperado中国实际控制的任何网页上的内容，Kesperado中国不承担任何责任。</p>
        <p>7.4 对于因不可抗力或Kesperado中国不能控制的原因造成的网络服务中断或其它缺陷，Kesperado中国不承担任何责任，但将尽力减少因此而给用户造成的损失和影响。</p>
        <p>7.5 用户同意，对于Kesperado中国向用户提供的下列产品或者服务的质量缺陷本身及其引发的任何损失，Kesperado中国无需承担任何责任：</p>
        <p>7.5.1 Kesperado中国向用户免费提供的各项网络服务；</p>
        <p>7.5.2 Kesperado中国向用户赠送的任何产品或者服务；</p>
        <p>7.5.3 Kesperado中国向收费网络服务用户附赠的各种产品或者服务。</p>
        <h4 class="about-h3">八、违约赔偿</h4>
        <p>8.1 如因Kesperado中国违反有关法律、法规或本协议项下的任何条款而给用户造成损失，Kesperado中国同意承担由此造成的损害赔偿责任。</p>
        <p>8.2 用户同意保障和维护Kesperado中国及其他用户的利益，如因用户违反有关法律、法规或本协议项下的任何条款而给Kesperado中国或任何其他第三人造成损失，用户同意承担由此造成的损害赔偿责任。</p>
        <h4 class="about-h3">九、协议修改</h4>
        <p>9.1 Kesperado中国有权随时修改本协议的任何条款，一旦本协议的内容发生变动，Kesperado中国将会通过适当方式向用户提示修改内容。</p>
        <p>9.2 如果不同意Kesperado中国对本协议相关条款所做的修改，用户有权停止使用网络服务。如果用户继续使用网络服务，则视为用户接受Kesperado中国对本协议相关条款所做的修改。</p>
        <h4 class="about-h3">十、通知送达</h4>
        <p>10.1 本协议项下Kesperado中国对于用户所有的通知均可通过网页公告、电子邮件或常规的信件传送等方式进行；该等通知于发送之日视为已送达收件人。</p>
        <p>10.2 用户对于Kesperado中国的通知应当通过Kesperado中国对外正式公布的通信地址、传真号码、电子邮件地址等联系信息进行送达。</p>
        <h4 class="about-h3">十一、法律管辖</h4>
        <p>11.1 本协议的订立、执行和解释及争议的解决均应适用中国法律并受中国法院管辖。</p>
        <p>11.2 如双方就本协议内容或其执行发生任何争议，双方应尽量友好协商解决；协商不成时，任何一方均可向Kesperado中国所在地的人民法院提起诉讼。</p>
        <h4 class="about-h3">十二、其他规定</h4>
        <p>12.1 本协议构成双方对本协议之约定事项及其他有关事宜的完整协议，除本协议规定的之外，未赋予本协议各方其他权利。</p>
        <p>12.2 如本协议中的任何条款无论因何种原因完全或部分无效或不具有执行力，本协议的其余条款仍应有效并且有约束力</p>
        <p>12.3 本协议中的标题仅为方便而设，在解释本协议时应被忽略。</p>
      </div>
      <!-- right end -->
      <!-- privacy start -->
      <div class="tab-pane" id="privacy" style="padding:0px 20px 0px 20px">
        <h3 class="about-h3">隐私保护</h3>
        <p>用户在Kesperado中国进行登记注册、上传作品、参与讨论等活动时，经用户同意及确认，本网站将通过注册表格、订单等形式要求用户提供一些个人资料。Kesperado中国收集此类个人身份信息，主要是为保证注册用户能够更容易和更满意地使用本站提供的服务。这些个人资料包括： </p>
        <p>
          <ol>
            <li>（1）个人识别资料：如姓名、性别、生日、个人主页、即时通讯、所在地、电子邮件地址等。</li>
            <li>（2）个人背景： 职业、婚姻、兴趣爱好等。</li>
          </ol>
        </p>
        <p>用户知道，在私人博客网页、公共论坛或其他网上公开场合披露其个人身份信息时，此类信息可能会被他人收集并用来发送垃圾邮件或用于其他用途。</p>
        <p>Kesperado中国对用户所提供的个人资料进行严格的管理及保护，Kesperado中国将使用相应的技术，防止您的个人资料丢失、被盗用或遭篡改。</p>
        <p>Kesperado中国保证不对外公开或向第三方提供单个用户的注册资料及用户在使用网络服务时存储在Kesperado中国的非公开内容，但下列情况除外：</p>
        <p>
          <ol>
            <li>（1）事先获得用户的明确授权；</li>
            <li>（2）根据有关的法律法规要求；</li>
            <li>（3）按照相关政府主管部门的要求；</li>
            <li>（4）为维护社会公众的利益；</li>
            <li>（5）为维护Kesperado中国的合法权益。</li>
            <li>（6）Kesperado中国技术人员的为维护把Kesperado中国入场工作的需要。</li>
          </ol>
        </p>
        <p>Kesperado中国可能会与第三方合作向用户提供相关的网络服务，在此情况下，如该第三方同意承担与Kesperado中国同等的保护用户隐私的责任，则Kesperado中国有权将用户的注册资料等提供给该第三方。</p>
        <p>在不透露单个用户隐私资料的前提下，Kesperado中国有权对整个用户数据库进行分析并对用户数据库进行商业上的利用。</p>
      </div>
      <!-- privacy end -->

    </div>
    <!-- tags end -->

  </div>
  <!-- body end -->
                
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

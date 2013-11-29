<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <title>
           深圳市金瑞亿投资发展有限公司
        </title>
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/reset.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/base.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/tipTip.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/short-code.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/prettyPhoto.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/css3.css" />
        <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/slider.css" />
        <script type="text/javascript" src="__PUBLIC__/Home/default/Js/jquery-1.8.3.min.js"></script>
         
        
        <script type="text/javascript" src="__PUBLIC__/Home/default/Js/scripts.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Home/default/Js/jquery.nivo.slider.js"></script>
   
        <!--<script type="text/javascript" src="__PUBLIC__/Home/default/Js/cufon-yui.js"></script>

		<script type="text/javascript" src="__PUBLIC__/Home/default/Js/Harabara.js"></script>
        <script type="text/javascript" src="__PUBLIC__/Home/default/Js/cufon-replace.js"></script>-->
        <script type="text/javascript" src="__PUBLIC__/Home/default/Js/custom.js"></script>
        
        <script type="text/javascript" src="__PUBLIC__/Home/default/Js/shortcode.js"></script>
       
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="__PUBLIC__/Home/default/Css/ie7.css" />
        <![endif]-->
    </head>
    
    <body class="home">
   		<!--Nav topbar-->
        <div class="navbar navbar-fixed-top" id="">
        <div class="navbar-inner">
            <div class="container">
            	<a href="<?php echo ($menu["homeurl"]); ?>" title="" id="kingray"> <img src="__PUBLIC__/Home/default/Images/nav_logo.png" alt="kingray_logo" />
                    </a>
                <ul class="nav">
            <li><a href="http://mail.sz-kingray.com/" target="_blank">公司邮箱</a></li>
            <li><a href="http://szkingray.3322.org:19999/bbs" target="_blank">公司论坛</a></li>
            <!--<li><a href="http://szkingray.3322.org:19999" target="_blank">OA/CMS</a></li>-->
          </ul>
            </div>
            </div>
        </div>
        <!--/Nav topbar-->
        <!--Header-->
        <div class="full-width-wrapper" id="header">
            <div class="full-width-wrapper" id="abstract-bg">
                <!--Banner-->
                <div class="fixed-width-wrapper" id="banner">
                    <!-- <a href="<?php echo ($menu["homeurl"]); ?>" title="" class="logo"> <img src="__PUBLIC__/Home/default/Images/nav_header.jpg" alt="kingray_logo" />
                    </a> -->
                   <!-- <ul class="social-network">
                   
                        <li>
                            <a href="#" title="Facebook"> <img src="__PUBLIC__/Home/default/Images/icons/facebook.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter"> <img src="__PUBLIC__/Home/default/Images/icons/twitter.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Delicious"> <img src="__PUBLIC__/Home/default/Images/icons/delicious.png" alt="">
                            </a>
                        </li>
                    </ul>-->
                </div>
                <!--/Banner-->
                <!--Navigation + Search-->
                <div class="fixed-width-wrapper border-radius-5px" id="navigation-bar">
                    <div id="g-navigation">
                        <ul class="simple-drop-down-menu">
                            <li class="home-page border-radius-left-5px">
                                <a href="<?php echo ($menu["homeurl"]); ?>">
                                   首页
                                </a>
                            </li>
                            
                            <?php if(is_array($menu["nav"])): $i = 0; $__LIST__ = $menu["nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$navr): $mod = ($i % 2 );++$i;?><li>
                                <a href="<?php echo ($navr["url"]); ?>" title="">
                                    <?php echo ($navr["nav_name"]); ?>
                                </a>
                                <ul>
                                	<?php if(is_array($navr["sub"])): $i = 0; $__LIST__ = $navr["sub"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                        <a href="<?php echo ($vo["url"]); ?>" title="">
                                        	<?php echo ($vo["nav_name"]); ?>
                                           </a>
                                          </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div id="g-search">
                        <form action="" method="post">
                            <div>
                                <input type="text" class="input-field border-radius-left-3px reset-text"
                                value="Search here...">
                            </div>
                            <div>
                                <button type="submit" title="Search" class="sprite">
                                    <em>
                                        Search
                                    </em>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/Navigation + Search-->
            </div>
        </div>
<div class="full-width-wrapper">
    <div class="fixed-width-wrapper" id="body-content">
        <!--Content-->
        <div id="content" class="float-left content-left">
            <div class="header-text">
                <ul id="breadcrumbs">
                    <li>
                        <a href="__URL__/index" title="">
                            首页
                        </a>
                    </li>
                    <?php if(is_array($navarr)): $i = 0; $__LIST__ = $navarr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voname): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo ($voname["url"]); ?>" title="">
                            <?php echo ($voname["name"]); ?>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <h3 class="first-word double-color sp" style="color:#ccc;text-align:right" >
                    文章内容
                </h3>
            </div>
            <div class="post entry-content">
                <!--文章标题-->
                <h3  style="text-align:center;font-weight:bold"><?php echo ($content["title"]); ?></h3>
                <!--/文章标题-->
                
                <!--文章基本信息-->
                 <div class="posts-info"  style="margin-left:43%;">
                    <span title="" class="date">
                    	<?php echo (date("Y-m-d",$content["time"])); ?>
                        </span>
                </div>
                 <!--/文章基本信息-->
                 
				<?php if(is_array($content["para"])): $i = 0; $__LIST__ = $content["para"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$para): $mod = ($i % 2 );++$i;?><!--段落小标题1-->
                <h5 class="first-word"><?php echo ($para["title"]); ?></h5>
                <!--/段落小标题1-->
                
                <!--段落1图片-->
				<?php if(empty($para["img"])): else: ?>
				<div class="img-border preloading-light align-left">
                       <img src="__PUBLIC__/Uploads/img/<?php echo ($para["img"]); ?>" alt="">
                </div><?php endif; ?>
               <!--/段落1图片-->
               
               <!--段落1内容-->
                <p>
				<?php echo ($para["content"]); ?>
                </p>
                <!--段落1内容--><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php if(($content["id"]) == "63"): ?><iframe width="650" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.cn/maps?f=d&amp;source=s_d&amp;saddr=22.529797,114.031692&amp;daddr=&amp;geocode=&amp;sll=22.529881,114.03204&amp;sspn=0.003424,0.005681&amp;hl=zh-CN&amp;brcurrent=3,0x31508e64e5c642c1:0x951daa7c349f366f,0%3B5,0,0&amp;mra=mift&amp;mrsp=0&amp;sz=18&amp;ie=UTF8&amp;t=m&amp;ll=22.53218,114.030447&amp;spn=0.00991,0.027852&amp;z=15&amp;output=embed"></iframe><br /><small><a href="http://ditu.google.cn/maps?f=d&amp;source=embed&amp;saddr=22.529797,114.031692&amp;daddr=&amp;geocode=&amp;sll=22.529881,114.03204&amp;sspn=0.003424,0.005681&amp;hl=zh-CN&amp;brcurrent=3,0x31508e64e5c642c1:0x951daa7c349f366f,0%3B5,0,0&amp;mra=mift&amp;mrsp=0&amp;sz=18&amp;ie=UTF8&amp;t=m&amp;ll=22.53218,114.030447&amp;spn=0.00991,0.027852&amp;z=15" style="color:#666;text-align:left" target="_blank">查看</a></small><?php endif; ?>
            </div>
        </div>
        <!--/Content-->
        <!--Sidebar-->
        <div id="sidebar" class="float-right">
        	<div class="box">
                <h3 class="first-word double-color sp">
                    <?php echo ($Lone["name"]); ?>
                </h3>
                <ul class="list cat">
                    <?php if(is_array($subList)): $i = 0; $__LIST__ = $subList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vosub): $mod = ($i % 2 );++$i;?><li>
                            <a href="<?php echo ($vosub["url"]); ?>" id="<?php echo ($vosub["id"]); ?>">
                                <?php echo ($vosub["nav_name"]); ?>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
                <input type="hidden" value="<?php echo ($currentId); ?>" id="CurrentId"/>
                <script type="text/javascript">
					$(function (){
						var cureentID = $("#CurrentId").val();
							$(".cat li a").each(function(index, element) {
                                	if($(this).attr('id')==cureentID){
										$(this).parent().addClass('current');
										}
                            });
						});
                </script>
            </div>
            <!--box-->
            <div class="box">
                <h3 class="first-word double-color sp">
                    快速链接
                </h3>
                <ul class="list quote">
                    <?php if(is_array($hot)): $i = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$last): $mod = ($i % 2 );++$i;?><li>
                        <!--<span class="quote">
                        </span>-->
                        <p>
                            "<?php echo (msubstr(strip_tags($last["content"]),0,20)); ?>"
                        </p>
                        <a href="__URL__/article/detail/<?php echo ($last["id"]); ?>">
                         <!--   <strong>
                                admin
                            </strong>
                            --->
                            <b>
                                <?php echo ($last["title"]); ?>
                            </b>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!--/box-->
            <!--box-->
            <!--<div class="box">
                <h3 class="first-word double-color sp">
                    More About Us
                </h3>
                <ul class="list cat">
                    <li>
                        <a href="#" title="">
                            Lorem ipsum dolor sit amet consectetur
                        </a>
                    </li>
                    <li class="current">
                        <a href="#" title="">
                            Praesent ultricies urna a urna
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            Quisque metus enim, venenatis
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            Nullam ven tincidunt dolor consectetur
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            Lorem ipsum dolor sit amet consectetur
                        </a>
                    </li>
                </ul>
            </div>-->
            <!--/box-->
        </div>
        <div id="get-in-touch" class="fixed-width-wrapper"><div class="via-phone-number float-left"><a class="icon sprite float-left" title="Keep in touch with us">Keep in touch with us</a><h4 >联系我们：<strong>深圳市福田区车公庙天安数码城创新科技广场二期西座1603</strong></h4><span>CONTACT US：<b>Room 1603,west,Tian An Hi-Tech Plaza Phase 2,Tian An Cyberpark,Futian District,Shenzhen,china</b></span></div><!--<div class="via-email float-right"><form action="" method="post"><div><input class="input-field border-radius-3px reset-text float-left" value="Enter your E-mail address..."></div><div><button type="submit" class="black border-radius-3px float-right"><em class="sprite"></em>Subcribe !</button></div></form></div>--></div>
    </div>
</div>
 <!--//底部多余部分--待有内容了再开
 <div class="full-width-wrapper" id="footer-wrapper">
            <div class="fixed-width-wrapper" id="footer-content">
                <div class="three-column">
                    <div class="block">
                        <h3 class="first-word">
                            Twitter feed
                        </h3>
                        <div class="content">
                            <ul class="list tweet">
                                <li>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        <a href="#" title="">
                                            http://t.co/E6xdfOBL
                                        </a>
                                    </p>
                                    <em>
                                        about 18 hours ago
                                    </em>
                                </li>
                                <li>
                                    <p>
                                        Sed tempus bibendum risus, nec dignissim sem vestibulum ut
                                        <a href="#" title="">
                                            http://t.co/E6xdfOBL
                                        </a>
                                    </p>
                                    <em>
                                        about 18 hours ago
                                    </em>
                                </li>
                                <li>
                                    <p>
                                        Donec ligula mauris, vehicula quis feugiat at Themeforest
                                        <a href="#" title="">
                                            http://t.co/E6xdfOBL
                                        </a>
                                    </p>
                                    <em>
                                        about 18 hours ago
                                    </em>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block">
                        <h3 class="first-word">
                            Flickr Gallery
                        </h3>
                        <div class="content">
                            <ul class="flick-gallery overflow-hidden">
                                <li>
                                    <a href="images/pix/tricircle.jpg" rel="prettyPhoto[flick]" class="preloading-dark"
                                    title=""> <img src="__PUBLIC__/Home/default/Images/pix/flick-img1.png" alt="Tricircle Logo Template">
                                    </a>
                                </li>
                                <li>
                                    <a href="images/pix/box.jpg" rel="prettyPhoto[flick]" class="preloading-dark"
                                    title=""> <img src="__PUBLIC__/Home/default/Images/pix/flick-img2.png" alt="3D Box Mock-up">
                                    </a>
                                </li>
                                <li>
                                    <a href="images/pix/coffee.jpg" rel="prettyPhoto[flick]" class="preloading-dark"
                                    title=""> <img src="__PUBLIC__/Home/default/Images/pix/flick-img3.png" alt="Coffee Cream Logo Template">
                                    </a>
                                </li>
                                <li>
                                    <a href="images/pix/station.jpg" rel="prettyPhoto[flick]" class="preloading-dark"
                                    title=""> <img src="__PUBLIC__/Home/default/Images/pix/flick-img4.png" alt="Professional 3D Stationery Mock-up">
                                    </a>
                                </li>
                                <li>
                                    <a href="images/pix/Cocktail.jpg" rel="prettyPhoto[flick]" class="preloading-dark"
                                    title=""> <img src="__PUBLIC__/Home/default/Images/pix/flick-img5.png" alt="Cocktail Logo Template">
                                    </a>
                                </li>
                                <li>
                                    <a href="images/pix/trifold.jpg" rel="prettyPhoto[flick]" class="preloading-dark"
                                    title=""> <img src="__PUBLIC__/Home/default/Images/pix/flick-img6.png" alt="Trifold 3D Mock-up">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="block">
                        <h3 class="first-word">
                            Latest News from blog
                        </h3>
                        <div class="content">
                            <ul class="latest-news list">
                                <li>
                                    <div class="calendar black">
                                        <h1>
                                            30
                                        </h1>
                                        <span>
                                            Mar
                                        </span>
                                    </div>
                                    <a href="#" title="">
                                        <strong>
                                            The top 5 best free font Mar 2011
                                        </strong>
                                    </a>
                                    <p>
                                        Aliquam congue ferme ntum nisl auris accumsan nullavel diam. Sed in lacus
                                        ut enim adipis.
                                    </p>
                                </li>
                                <li>
                                    <div class="calendar black">
                                        <h1>
                                            30
                                        </h1>
                                        <span>
                                            Mar
                                        </span>
                                    </div>
                                    <a href="#" title="">
                                        <strong>
                                            The top 5 best free font Mar 2011
                                        </strong>
                                    </a>
                                    <p>
                                        Aliquam congue ferme ntum nisl auris accumsan nullavel diam. Sed in lacus
                                        ut enim adipis.
                                    </p>
                                </li>
                            </ul>
                            <a href="#" class="link view-all" title="">
                                View all news
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!--/Footer content-->
        <!--Footer Extra-->
        
<div class="full-width-wrapper" id="footer-extra-wrapper">
            <div class="fixed-width-wrapper">
                <div id="copyright">
                    <h1 style="color:#FFF;margin:0 0 0 10px">KingRay</h1>
                    </a>
                    <ul>
                        <li>
                            金瑞亿投资发展公司 版权所有 (c) 2011-2012 
                        </li>
                        <li>
                            <a href="#" title="">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                Terms and Conditions
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="back-to-top sprite" title="Back to top">
                        Back to top
                    </a>
                </div>
            </div>
        </div>
        <!--/Footer Extra-->
    </body>

</html>
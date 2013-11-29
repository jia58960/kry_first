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
                <h3 class="first-word double-color sp" style="color:#ccc;text-align:right">
                    文章列表
                </h3>
                <ul id="view-switcher">
                    <li>
                        <a href="#display-list-alternate" class="display-list-alternate" title="">
                            List ALternate
                        </a>
                    </li>
                    <li>
                        <a href="#display-list" class="display-list" title="">
                            List view
                        </a>
                    </li>
                    <li>
                        <a href="#display-short" class="display-short" title="">
                            Double column
                        </a>
                    </li>
                </ul>
            </div>
            <div class="entry-content">
                <ul class="display-list list-blog-entry" id="list-blog-entry">
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$artList): $mod = ($i % 2 );++$i;?><li class="bpointer" onclick="location.href='__URL__/article/detail/<?php echo ($artList["id"]); ?>';">
                        <div class="blog-entry-content">
                            <h2>
							<a style="text-decoration:none" href="__URL__/article/detail/<?php echo ($artList["id"]); ?>" title="阅读详细">
								<span href="#" class="first-word" style="font-size:80%">
                                   <?php echo ($artList["title"]); ?>
                                </span>
							</a>
                            </h2>
                            <div class="posts-info">
                                <span class="date" title="">
                                    <?php echo (date('Y-m-d',$artList["time"])); ?>
                                </span>
                            </div>
                            <p>
								<?php echo (msubstr(strip_tags($artList["content"]),0,95)); ?>
                            </p>
                            <!--<a class="read-more" href=" __URL__/article/detail/<?php echo ($artList["id"]); ?>" title="阅读详细">
                                阅读详细
                            </a>-->
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>            
               </ul>
                <!--Pagination-->
                <div class="clear">
                </div>
                <div class="page-pagination clear">
               	 <?php echo ($page); ?>
                    <!--<a href="#" title="">
                        Prev
                    </a>
                    <a href="#" title="">
                        1
                    </a>
                    <a href="#" title="" class="current">
                        2
                    </a>
                    <a href="#" title="">
                        3
                    </a>
                    <a href="#" title="">
                        4
                    </a>
                    <a href="#" title="">
                        5
                    </a>
                    <span>
                        ...
                    </span>
                    <a href="#" title="">
                        15
                    </a>
                    <a href="#" title="">
                        Next
                    </a>-->
                </div>
                <!--/Pagination-->
            </div>
        </div>
        <!--/Content-->
        <!--Sidebar-->
        <div id="sidebar" class="float-right">
            <!--box-->
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
            <!--/box-->
            <!--box-->
            <div class="box">
                <ul class="zigzag list">
                <?php if(is_array($hotNews)): $i = 0; $__LIST__ = $hotNews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotnews): $mod = ($i % 2 );++$i;?><li> 
                        <div class="img-border preloading-light align-left">
                            <img src="__PUBLIC__/Home/default/Images/pix/01_Home_14-05.png" alt="">
                        </div>
                        <strong>
                            <?php echo ($hotnews["title"]); ?>
                        </strong>
                        <span>
                            <?php echo (msubstr(strip_tags($hotnews["content"]),0,20)); ?>
                        </span>
                        <a href="__URL__/article/detail/<?php echo ($hotnews["id"]); ?>" title="">
                            more
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!--/box-->
            <!--box-->
            <div class="box">
                <h3 class="first-word double-color sp">
                    相关链接
                </h3>
                <ul class="list point">
                    <li>
                        <a target="_blank" href="http://szkingray.f3322.org:8686/krcms/bbs">公司论坛</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://mail.sz-kingray.com" title="">公司邮箱</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://szkingray.f3322.org:9999">OA</a>
                    </li>
                    <li>
                        <a target="_blank" href="http://szkingray.f3322.org:8686/krcms">CMS</a>
                    </li>
                </ul>
            </div>
            <!--/box-->
            <!--box-->
            <!--<div class="box">
                <h1 class="first-word double-color sp">
                    档案表
                </h1>
                <ul class="list cat">
                    <li>
                        <a href="#" title="">
                            December 2011
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            November 2011
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            October 2011
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            September 2011
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            August 2011
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            July 2011
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            May 2011
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            April 2011
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            March
                        </a>
                    </li>
                    <li>
                        <a href="#" title="">
                            February
                        </a>
                    </li>
                </ul>
            </div>-->
            <!--/box-->
        </div>
        <!--/Sidebar-->
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
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
		<?php if((BROWSER) == "true"): ?><div id="browser">
				<p style="font-size:16px">我们的站点使用了最新HTML5的相关技术，但您的浏览器不支持这些技术，我们推荐您使用<a href="http://www.google.cn/intl/zh-CN/chrome/browser/"> Google Chrome </a>浏览器来访问。</p>
			</div><?php endif; ?>
		<script>
			if(<?php echo (BROWSER); ?>==true){
				window.onload=function(){
					$('#browser').delay(7000).fadeOut("slow");
				};
			}
		</script>
        <div class="clear" id="slider-bg">
            <div class="full-width-wrapper" id="slider-frame">
                <div class="fixed-width-wrapper maxx-theme" id="slider-wrapper">
                    <div id="slider" class="nivoSlider">
                        <a href="#"><img src="__PUBLIC__/Home/default/Images/pix/slide1.jpg" alt="" title="#htmlcaption" />
                        </a>
                        <a href="#"> <img src="__PUBLIC__/Home/default/Images/pix/slide2.jpg" alt="" title="" />
                        </a>
                        <a href="#"> <img src="__PUBLIC__/Home/default/Images/pix/slide3.jpg" alt="" title="#htmlcaption3" />
                        </a>
                       <!-- 暂时只用三张图
                       <a href="#"> <img src="__PUBLIC__/Home/default/Images/pix/slide4.jpg" alt="" title="" />
                        </a>
                        <a href="#"> <img src="__PUBLIC__/Home/default/Images/pix/slide5.jpg" alt="" title="#htmlcaption3" />
                        </a>-->
                    </div>
                     <div id="htmlcaption" class="nivo-html-caption">
                        <h1>
                            金瑞亿祝大家蛇年大吉
                        </h1>
                        <strong>
                        
                        </strong>
                        
                        <em>
                            Happy  New  Year
                        </em>
                        
                        <a href="#">
                            
                        </a>
                        
                    </div>
                    <div id="htmlcaption2" class="nivo-html-caption">
                        <h1>
                            
                        </h1>
                        <strong>
                            This
                        </strong>
                        is an example of a
                        <em>
                            HTML
                        </em>
                        caption with
                        <a href="#">
                            a link222
                        </a>
                        .
                    </div>
                    <div id="htmlcaption3" class="nivo-html-caption">
                        <h1>
                            诚信、务实、严谨、高效
                        </h1>
                        <strong>
                            
                        </strong>
							
                        <em>
                            Integrity , practicability , rigorous , efficient
                        </em>
                        
                        <a href="#">
                            
                        </a>
                        
                    </div>
                  
                </div>
            </div>
        </div>
        <!--/Slider-->
        <!--Body content-->
        <div class="full-width-wrapper">
            <div class="fixed-width-wrapper body-divider " id="body-content">
                <!--Entry-->
                <div class="entry three-column fixed-width-wrapper">
                    <!--block-->
                    <div class="block type1 bpointer" onclick="location.href='__URL__/article/detail/<?php echo ($about["id"]); ?>';">
                        <h5 class="first-word double-color">
                           关于我们
                        </h5>
                        <div class="content">
                            <a href="__URL__/article/detail/<?php echo ($about["id"]); ?>" title="查看更多" class="preloading-light img-border align-none"> <img src="__PUBLIC__/Uploads/img/<?php echo ($about["img"]); ?>" alt="" />
                            </a>
                            <div class="clear">
                            </div>
                          
                            <p>
                                <?php echo (msubstr(strip_tags($about["content"]),0,120)); ?>
                            </p>
                        
                        </div>
                        <a style="float:right; color:#666" href="__URL__/article/detail/<?php echo ($about["id"]); ?>" title="Read more">
                            More
                        </a>
                    </div>
                    <!--/block-->
                    <!--block-->
                    <div class="block type2">
                        <h5 class="first-word double-color">
                           我们提供什么服务
                        </h5>
                        <div class="content">
                            <ul class="zigzag list">
                           
                                <li class="bpointer" onclick="location.href='__URL__/article/detail/<?php echo ($service1["id"]); ?>';"><?php if(empty($service1["img"])): else: ?><a href="__URL__/article/detail/<?php echo ($service1["id"]); ?>" title=""><img src="__PUBLIC__/Uploads/img/<?php echo ($service1["img"]); ?>" alt="" class="align-right" width="48px" height="48px"/></a><?php endif; ?>
                                    <strong>
                                         <?php echo ($service1["title"]); ?>
                                    </strong>
                                    <span>
                                        <?php echo (msubstr(nl2br($service1["content"]),0,120)); ?>
                                    </span>
                                    <a style="color:#666" href="__URL__/article/detail/<?php echo ($service1["id"]); ?>" title="">
                                        more
                                    </a>
                                </li>
                              
                              <li class="bpointer" onclick="location.href='__URL__/article/detail/<?php echo ($service2["id"]); ?>';"><?php if(empty($service2["img"])): else: ?><a href="__URL__/article/detail/<?php echo ($service2["id"]); ?>" title=""><img src="__PUBLIC__/Uploads/img/<?php echo ($service2["img"]); ?>" alt="" class="align-right" width="48px" height="48px"/></a><?php endif; ?>
                                    <strong>
                                         <?php echo ($service2["title"]); ?>
                                    </strong>
                                    <span>
                                        <?php echo (msubstr(nl2br($service2["content"]),0,120)); ?>
                                    </span>
                                    <a style="color:#666" href="__URL__/article/detail/<?php echo ($service2["id"]); ?>" title="">
                                        more
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!--/block-->
                    <!--block-->
                    <div class="block type3 bpointer" onclick="location.href='__URL__/article/detail/<?php echo ($choose["id"]); ?>';">
                        <h5 class="first-word double-color">
                            合作伙伴
                        </h5>
                        <div class="content">
                            <a href="__URL__/article/detail/<?php echo ($choose["id"]); ?>" title="" class="preloading-light img-border align-none"> <img src="__PUBLIC__/Uploads/img/<?php echo ($choose["img"]); ?>" alt="合作伙伴" width="280px" height="130px" />
                            </a>
                            <div class="clear">
                            </div>
                          
                            <p>
                                <?php echo (msubstr(strip_tags($choose["content"]),0,120)); ?>
                            </p>
                        </div>
                    <a style="float:right; color:#666" href="__URL__/article/detail/<?php echo ($choose["id"]); ?>" title="Read more">
                            More
                        </a>  
                    </div>
                    <!--/block-->
                </div>
                <!--/Entry-->
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
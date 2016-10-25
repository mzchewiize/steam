<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="ie ie9"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <!-- Mobile Specific Metas
    +++++++++++++++++++++++++++ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favico.ico">

    <link rel="apple-touch-icon" href="img/apple_icons_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple_icons_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple_icons_114x114.png">

	<title>Malongyer Production</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">    
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/theme_settings.css">
    <link rel="stylesheet" type="text/css" href="css/skin.css">
	<link rel="stylesheet" type="text/css" href="css/color_theme.css" id="theme_color">
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/theme.js"></script>  
        
    <!--[if IE 8 ]>
    <link rel="stylesheet" type="text/css" href="css/ie_css.css">
    <script>
        var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
        for (var i = 0; i < e.length; i++) {
            document.createElement(e[i]);
        }		
    </script>
    <![endif]-->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <style>
		div.fs_title_wrapper,.fs_thmb_wrapper { display:none;}
	</style>

</head>
  <script>
        $(window).load(function(){
            $('.fs_grid_module').masonry({
                itemSelector: '.grid_gallery-item',
                isAnimated: true,
                
            });
            setTimeout("$('.fs_grid_module').masonry()",500);
        });
        $(window).resize(function(){
            $('.fs_grid_module').masonry();
        });
    </script>
  
<body class="fullscreen_layout">
	<header style="opacity:0.5">
        <div class="header_wrapper container">
        	<a href="index.php" class="logo"><img src="img/logo.png" alt=""  class="logo_def" width="125" height="39">
                <img src="img/retina/logo.png" alt="" class="logo_retina" width="125" height="39"></a>
           <nav>
                 <ul class="menu">	
                    <li><a href="index.php">HOME</a></li>
                    <li ><a href="wedding.php">Wedding</a>
                        <ul class="sub-menu" style="background:white;opacity:0.5;color:black!important;">
							<li><a href="pre-wedding.php">Pre-wedding</a></li>
							<li><a href="engagement.php">Engagement</a></li>
							<li   class="current-menu-parent" ><a href="wedding-reception.php">Wedding reception</a></li>
							<li><a href="wedding-cinema.php">Wedding-Cinema</a></li>
                                
                            </li>
                        </ul>
                    </li>
					
                    <li><a href="presentation.php">Presentation</a></li>
                    <li><a href="party-event.php">Party-Event</a></li>
                     <li><a href="graphic.php">Graphic & Design</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul><!-- .menu -->
                <div class="clear"></div>
            </nav>
        </div>
    </header>
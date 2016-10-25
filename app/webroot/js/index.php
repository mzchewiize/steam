<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="ie ie9"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="Thailand best photographer,photographers wedding websites, prewedding, Photography,thailand wedding photography,">
   <meta name="keywords" content="Thailand best photographer,photographers wedding websites, prewedding, Photography,thailand wedding photography,">
    <!-- Mobile Specific Metas
    +++++++++++++++++++++++++++ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favico.ico">

    <link rel="apple-touch-icon" href="img/apple_icons_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple_icons_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple_icons_114x114.png">
	<meta property="og:image"content="http://www.malongyer.com/wp-content/uploads/2015/01/MG_5618-copy.jpg" />
    <title>Malongyer The Professional wedding team</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/theme_settings.css">
    <link rel="stylesheet" type="text/css" href="css/skin.css">
	<link rel="stylesheet" type="text/css" href="css/color_theme.css" id="theme_color">

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
    <link rel="stylesheet" type="text/css" href="css/fs_gllaery.css">
	<script type="text/javascript" src="js/fs_gllaery.js"></script>
	<style>
		div.fs_title_wrapper,.fs_thmb_wrapper { display:none;}
		ul.submenu > li > a {color:black;}
		#ee { color:black;}
	</style>

</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=863776906975118&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body class="fullscreen_layout">
	<header style="height:auto;">
        <div class="header_wrapper container">
        	<a href="index.php" class="logo" style="z-index:99999" style="width:40%;margin-top:5px;">
			<img src="img/logo.png" alt=""  class="logo_def" width="129" height="39" style="margin-left:40px;">
        	<img src="img/retina/logo.png" alt="" class="logo_retina"  width="150" height="64"></a>
           <nav>

                 <ul class="menu" style="float:right">
                    <li  class="current-menu-parent" ><a href="index.php">HOME</a></li>
                    <li ><a href="#">Wedding</a>
                        <ul class="sub-menu" style="background:white;opacity:0.5;color:black!important;">
							<li><a href="pre-wedding.php">Pre-wedding</a></li>
							<li><a href="engagement.php">Engagement</a></li>
							<li><a href="wedding-reception.php">Wedding reception</a></li>
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

    <div class="fullscreen_block"></div>
   <?php
		require_once('wp-admin/hackdb.php');
		$getCat = "SELECT *
FROM wp_posts p
INNER JOIN wp_postmeta m ON p.id = m.post_id
WHERE m.meta_key =  '_wp_attached_file'
AND p.post_excerpt =  'Highlight'
ORDER BY p.menu_order ASC ";
		$obb = mysql_query($getCat);
	?>

    <script>
		gallery_set = [	//Gallery Data
		<?php while($rows = mysql_fetch_array($obb)) {   $_display = $rows; ?>
				{image : 'wp-content/uploads/<?php echo $_display['meta_value'];?>',
					 thmb : 'wp-content/uploads/<?php echo $_display['meta_value'];?>',
					 alt : 'Lorem ipsum',
					 fit : 'cover',
				},
			<?php } ?>
		];
		$('body').fs_gallery({
			fx : 'fade', /*fade, zoom, slide_left, slide_right, slide_top, slide_bottom*/
			slide_time : 18000, /*This time must be < then time in css*/
			slides : gallery_set
		});
	</script>

	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/theme.js"></script>
    <div class="header2top"></div>

</body>
</html>

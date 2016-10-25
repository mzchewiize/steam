<script>
$(document).ready(function(){
	var width = $(window).width()/3;
		$('.grid_gallery-item').css('width', width +'px');
		$('.item_hover-img-item').css('width', width +'px');

	});
</script>


    <div class="fullscreen_block">
		<div class="fs_grid_module">
   <?php
		require_once('wp-admin/hackdb.php');
		$getCat =
					"SELECT *
			FROM wp_posts p
			INNER JOIN wp_postmeta m ON p.id = m.post_id
			WHERE m.meta_key =  '_wp_attached_file'
				AND p.post_excerpt =  'Wedding-cinema'";
		$obb = mysql_query($getCat);
	?>
<?php while($rows = mysql_fetch_array($obb)) {   $_display = $rows; ?>
	     	<div class="grid_gallery-item" style="padding:10px;" >
            	<div class="item_hover">
                    <div class="item_hover-img" >
					<a class="fancybox-media" href="<?php echo $_display['to_ping']?>">
				      <img src="wp-content/uploads/<?php echo $_display['meta_value'];?>" class="lazy" alt=""/>Watch Now</a>

			        </div>
                    <div class="item_hover-body">
                        <div class="item_hover-title"> <span><?php echo $_display['pinged']?></span> </h3></div>

                    </div>
                </div>
            </div><!-- .grid_gallery-item -->
	<?php } ?>
            <div class="clear"></div>
        </div><!-- .fs_grid_module -->
	</div> <!-- .fullscreen_block -->
    <div class="header2top"></div>
    <!--<div class="header2top"></div>-->
    <script>
		$(document).ready(function(){
		});
		$(window).load(function(){
			//$('.fs_grid_module').masonry();
			$('.fs_grid_module').masonry({
				itemSelector: '.grid_gallery-item',
				isAnimated: true
			});
			setTimeout("$('.fs_grid_module').masonry()",500);
		});
		$(window).resize(function(){
			$('.fs_grid_module').masonry();
		});
    </script>
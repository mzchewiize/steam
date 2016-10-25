 <div class="fullscreen_block">
		<div class="fs_grid_module">
   <?php
		require_once('wp-admin/hackdb.php');
		$getCat = "SELECT *  FROM wp_posts p INNER JOIN wp_postmeta m ON p.id = m.post_id 
			WHERE m.meta_key =  '_wp_attached_file' and p.post_parent ='".$_GET['album']."'";
		$obb = mysql_query($getCat);
	?>
	<?php while($rows = mysql_fetch_array($obb)) {   $_display = $rows; ?>
     	<div class="grid_gallery-item">
                <div class="item_hover">
                	<div class="item_hover-img">
                		<img src="wp-content/uploads/<?php echo $_display['meta_value'];?>" alt=""/>
                        <div class="item_hover-fadder"></div>
                        <a href="wp-content/uploads/<?php echo $_display['meta_value'];?>" rel="prettyPhoto[gallery1]" class="prettyPhoto"></a>
                    </div>
                </div><!-- .item_hover -->
            </div><!-- .grid_gallery-item -->
	<?php } ?>
            <div class="clear"></div>
        </div><!-- .fs_grid_module -->
	</div> <!-- .fullscreen_block -->   
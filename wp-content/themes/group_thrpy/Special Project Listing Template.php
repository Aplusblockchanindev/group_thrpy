<?php /* Template Name: Special Project Listing Template */ ?>
<?php get_header(); ?>
<div id="special_project_listing_page">
    <ul class="special_project_list">
<?php
    global $wpdb;
    $table_name = $wpdb->prefix . "posts";
    $rows = $wpdb->get_results("SELECT * from $table_name where post_status='publish' and post_type='special_project' order by post_date");


    $arr_directors = array();
    foreach($rows as $row){
        if($row->post_title!="")
        {
            echo "<li class='director_item'><a href='".$row->guid."'>".$row->post_title."</a></li>";
        }
    }
    
?>
    </ul>
</div>


<!-- Footer Section -->
<?php //get_footer(); ?>

</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->


	<footer id="colophon" class="site-footer special_project_listing" role="contentinfo">
		<div class="site-info">
			<div class="email_name">
			<a href='mailto:info@groupthrpy.com'>info@groupthrpy.com</a>
			</div>
			<div class="instagram">
			<a href='http://instagram.com/group.thrpy'>@group.thrpy</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
 
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


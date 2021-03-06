<?php get_header(); ?> <!-- Archive page template -->
<?php
$post_id = get_the_ID();
$post_thumbnail_id = get_post_thumbnail_id( $post_id );
$attachment_url = wp_get_attachment_url( $post_thumbnail_id );

if (empty($attachment_url)) {
    $attachment_url = get_template_directory_uri().'/images/icon-image-pm.png';
} else {
    //nothing
}
?>

<div id="page" class="row">
    <div class="visible-xs-block">
        <?php get_template_part( 'section', 'logo' ); ?>
    </div>
    
    <div class="col-xs-12 col-sm-9 col-sm-push-3"> <!-- col RIGHT -->
        <div id="page-header" class="row">
            <div class="col-xs-12 col-sm-8"> 
                <?php echo do_shortcode('[tt_search]'); ?>
                <h1>Archive for: </h1>
            </div>
            <div class="col-xs-12 col-sm-4"> 
                <div class="col-sm-12 tt-feature-image"><i class="fa fa-search pull-right" style="margin-top:0.5em;font-size:3.5em;color:#79A99C;"></i></div>
            </div>
        </div>
    
      
<div class="row"> <!--row-->
    <div class="section clearfix">
        
        <div class="col-md-10 col-md-offset-1">
            <?php if ( have_posts() ) : ?>
     
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); 
            
                        $category = get_the_category();
                        $cat_name = $category[0]->category_nicename; 
            
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */

            //check for custom content style    
            if ( in_category( 'testimonial' ) ) {
                    get_template_part( 'content', 'testimonial' );
                }
            else if ( in_category( 'features' ) ) {
                    get_template_part( 'content', 'features' );
                }
            else if ( in_category( 'people' ) ) {
                    get_template_part( 'content', 'people' );
                }

            else {
                    get_template_part( 'content', 'norm' );

                    }
                
                

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', '' ),
				'next_text'          => __( 'Next page', '' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', '' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
        </div>
    </div>
</div> <!--row-->

</div> <!-- col RIGHT -->
    
    
    
    <div id="page-sidebar" class="col-xs-12 col-sm-3 col-sm-pull-9"> <!-- sidebar col left-->
        
    <div class="hidden-xs">
        <?php get_template_part( 'section', 'logo' ); ?>
    </div>
        <?php get_template_part( 'sidebar', 'main' ); ?>
            
    </div> <!-- Sidebar col LEFT -->


   


  



</div> <!-- main -->

</div><!--page row-->


<?php get_footer() ?>

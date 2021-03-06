<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gcs
 */

?>


<style>
.hero-page {
            background-image: url('<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $featured_img_url;?>');           
			background-color: #d3d3d3;
			background-blend-mode: multiply;
}
.sitewide-notice {
	background-color: rgba(224,0,63,1);
	color: white;
	max-width: 400px;
	height: auto;
	display: flex;
	justify-content: center;
	align-items: center;
}
</style>
<?php 

if(get_field('enable_shorter_header')) {
	?>
		<style>
			.hero-page {
				height: 50vh;
			
			}
			
			@media (max-width: 760px) {
				.hero-page {
					min-height: 400px;
				}
			}
			
		</style>
<?php
}

?>

<?php 

if(!get_field('disable_header')) {
	
	?>

<div class="hero-page">

    <div class="hero-page-container container">
        <div class="text">
            <h1 class="sm-red-line">
                <?php 
                    if(get_field('header')) {
                            the_field('header'); 
                    }
				    else {
					    the_title();
                    } 
                ?>
            </h1>
			<p ><?php the_field('sub_header'); ?></p>
			<div class="entry-meta">
				<p><?php
				    gcs_posted_on();
                    ?>  <?php $u_time = get_the_time('U'); 
                    $u_modified_time = get_the_modified_time('U'); 
                    if ($u_modified_time >= $u_time + 86400) { 
                    echo "- Updated: "; 
                    the_modified_time('F j, Y'); 
                    
                     }  ?>
                </p>
			</div> 
        </div>
       
    </div>
    <div class="teal">

    </div>

</div>

<?php
	
} else {
	
	?>
<style>
	.type-post {
		padding-top: 150px;
	}
</style>
<?php
}
/* if statement for disable header */
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<!-- new notice --> 

<?php 

$postid1 = get_the_ID();

$current_category_id = wp_get_post_categories( get_the_ID(), array( 'fields' => 'ids' ) );

if( have_rows('new_covid_notice', 'options') ):

    while( have_rows('new_covid_notice', 'options') ) : the_row();
		$in_array = null;
		$covid_notice = get_sub_field('shortcode', 'options');
		$covid_notice_categories = get_sub_field('categories', 'options');
		$exclude_notice = get_sub_field('exclude_notice', 'options');

		
		
		foreach($covid_notice_categories as $covid_notice_category) {
			$current_category_id = (array) $current_category_id;
	
			if($in_array == null) {
				
				
				$in_array = array_search($covid_notice_category, $current_category_id);
			}
		}


		if($covid_notice AND !($postid1 === $exclude_notice) AND $in_array) {
			?>
				<div class="container ">
					<div class="sitewide-notice">
						<?php echo do_shortcode($covid_notice); ?>
					</div>
					
				</div>
			<?php
		}
       
    endwhile;


endif;
?>



	




	


<!-- END new notice --> 



<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs" class="container">','</p>' );
}
?>
	
	

<?php 

$remove_the_classical_editor = get_field('remove_the_classical_editor');



if (!$remove_the_classical_editor) {
	?>

<div class="entry-content container">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcs' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gcs' ),
				'after'  => '</div>',
			)
		);
		?>




	</div><!-- .entry-content -->




<?php
}


$enable_custom_editor = get_field('enable_custom_editor');


if ($enable_custom_editor) { 
    
    $stylesheet_root = get_stylesheet_directory();
include( $stylesheet_root . '/template-parts/flexible-content-inc.php' );

			} ?>
</article><!-- #post-<?php the_ID(); ?> -->
<style>
#referral_table h3, #referral_table h4, #referral_table p, #referral_table strong, #referral_table span, #referral_table td {
text-align: center !important;
} 
#referral_table, #referral_table td, #referral_table tr {
border: 0px solid white !important;
}
</style>


<script>

console.log('<?php var_dump($current_category_id); ?>');


</script>
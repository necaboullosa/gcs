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
</style>



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
                    ?>
                </p>
			</div> 
        </div>
       
    </div>
    <div class="teal">

    </div>

</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

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


if ($enable_custom_editor) { ?>


	<?php if( have_rows('flexible-content-pages') ): ?>
        <?php while( have_rows('flexible-content-pages') ): the_row(); ?>

            <div class="container entry-content">

            <!-- visual editor --> 
                <?php if( get_row_layout() == 'text-visual_editor' ):                                       
                    $header = get_field('header');
                    if ($header) {
                    ?>
                    <h2 class="section-header sm-red-line"> <?php the_sub_field('header'); }?> </h2>
                    <?php $visual_editor_content = get_sub_field('text-visual_editor'); 
                            echo $visual_editor_content;
                    ?>
            <!-- END visual editor --> 


              



            <!-- Text and Image --> 
            
            <?php elseif( get_row_layout() == 'text_image' ):  ?>                                     
                   
                    

            <div class="text_image ">

                <?php $image_on_the_right = get_sub_field('image_on_the_right');
                
                if(!$image_on_the_right) {
                    ?>
                <div class="image-container">
                    <img class="img-stack-top-left stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">

                </div>

                    <?php
                }
                ?>
               

                <div class="text-container" data-aos="fade-up">
                    <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header "><?php echo $sub_header; }?></h3>
                    <h2 class="section-header sm-red-line"><?php $header = get_sub_field('header'); echo $header; ?></h2>
                    <?php $text = get_sub_field('text'); echo $text; ?>

                    <?php $enable_button = get_sub_field('enable_button');
                
                if($enable_button) {
                    ?>
                    <a href="<?php $button_url = get_sub_field('button_url'); echo $button_url; ?>">
                        <div class="button"><?php $button_text = get_sub_field('button_text'); echo $button_text; ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                    </a>

                    <?php
                }
                ?>

                </div>


                <?php $image_on_the_right = get_sub_field('image_on_the_right');
                
                if($image_on_the_right) {
                    ?>
                <div class="image-container">
                    <img class="img-stack-top-left stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">

                </div>

                    <?php
                }
                ?>

            </div>

             <!-- Text and Image --> 


                 <!-- Text and 2 Images --> 
            
            <?php elseif( get_row_layout() == 'text_2images' ):  ?>                                     
                   
                    

                   <div class="text_image text_2images ">
       
                       <?php $image_on_the_right = get_sub_field('image_on_the_right');
                       
                       if(!$image_on_the_right) {
                           ?>
                       <div class="image-container">
                           <img class="img-stack-top-left   stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">
                           <img class="img-stack-bottom-right stack-top" data-aos="fade-up" src="<?php $image_2 = get_sub_field('image_2'); echo $image_2; ?>" alt="">
       
                       </div>
       
                           <?php
                       }
                       ?>
                      
       
                       <div class="text-container" data-aos="fade-up">
                           <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header "><?php echo $sub_header; }?></h3>
                           <h2 class="section-header sm-red-line"><?php $header = get_sub_field('header'); echo $header; ?></h2>
                           <?php $text = get_sub_field('text'); echo $text; ?>
       
                           <?php $enable_button = get_sub_field('enable_button');
                       
                       if($enable_button) {
                           ?>
                           <a href="<?php $button_url = get_sub_field('button_url'); echo $button_url; ?>">
                               <div class="button"><?php $button_text = get_sub_field('button_text'); echo $button_text; ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                           </a>
       
                           <?php
                       }
                       ?>
       
                       </div>
       
       
                       <?php $image_on_the_right = get_sub_field('image_on_the_right');
                       
                       if($image_on_the_right) {
                           ?>
                       <div class="image-container">
                            <img class="img-stack-top-left stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">
                           <img class="img-stack-bottom-right stack-top" data-aos="fade-up" src="<?php $image_2 = get_sub_field('image_2'); echo $image_2; ?>" alt="">
       
                       </div>
       
                           <?php
                       }
                       ?>
       
                   </div>
       
                    <!-- Text and 2 Images --> 




             <!-- blurbs type 1 -->
             <?php elseif( get_row_layout() == 'blurbs_type_1' ): ?>
                    <h6 class="blurbs-header txt-center sm-red-line" data-aos="fade-up"> <?php the_sub_field('header'); ?> </h6>
                        <?php if( have_rows('blurb_type_1_repeater') ): ?>
                            <div class="blurbs" data-aos="fade-up">
                                <?php while ( have_rows('blurb_type_1_repeater') ) : the_row(); ?>

                                    <div class="blurb">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h3 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h3> <?php } ?>
                                        <span> <?php the_sub_field('text'); ?></span>
                                    </div>
                                    <?php 
                                    
                                    global $i;
                                    $i++;
                                    if( ($i != 4) and ($i != 5) and ($i != 8)) {
                                      ?>
                                        <div class="separator-container">
                                            <div class="separator"></div>
                                        </div>

                                        <?php } ?>
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END blurbs type 1 -->


            <!-- blurbs type 2 -->
                    <?php elseif( get_row_layout() == 'blurbs_type_2' ): ?>
                        <h2 class="section-header sm-red-line"> <?php the_sub_field('header'); ?> </h2>
                        <?php if( have_rows('blurb_type_2_repeater') ): ?>
                            <div class="blurb_type_2_container blurbs">
                                <?php while ( have_rows('blurb_type_2_repeater') ) : the_row(); ?>
                                    <div class="blurb">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/' . $icon . '.png'; ?>">
                                        <h3 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h3>
                                        <p class="blurb-text txt-center ">
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END blurbs type 2 -->


            <!-- blurbs type 3 -->
              <?php elseif( get_row_layout() == 'blurbs_type_3' ): ?>
                        <h2 class="section-header sm-red-line"> <?php the_sub_field('header'); ?> </h2>
                        <?php if( have_rows('blurb_type_3_repeater') ): ?>
                            <div class="blurb_type_3_container blurbs">
                                <?php while ( have_rows('blurb_type_3_repeater') ) : the_row(); ?>
                                    <div class="blurb">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/' . $icon . '.png'; ?>">
                                        <h3 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h3>
                                        <p class="blurb-text txt-center ">
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END blurbs type 3 -->



                  <!-- Local Guides -->
                  <?php elseif( get_row_layout() == 'local_experts_guides' ): ?>
                    

                    <h3 class="section-sub-header txt-center">Local experts</h3>
                    <h2 class="section-header txt-center sm-red-line">Check out our Ultimate Guides for Citizenship by Investiment</h2>

                    <div class="guides">
                        <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/guide-bg.png')">
                            <div class="guide colour">

                                <h5>Golden Visa Portugal 2020 – The Ultimate Guide by Experts</h5>
                                <a href="#">
                                    <div class="button">Click to read <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                                </a>

                            </div>
                        </div>
                        <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/guide-bg.png')">
                            <div class="guide colour">

                                <h5>Golden Visa Portugal 2020 – The Ultimate Guide by Experts</h5>
                                <a href="#">
                                    <div class="button">Click to read <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                                </a>

                            </div>
                        </div>
                        <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/guide-bg.png')">
                            <div class="guide colour">

                                <h5>Golden Visa Portugal 2020 – The Ultimate Guide by Experts</h5>
                                <a href="#">
                                    <div class="button">Click to read <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"> </div>
                                </a>

                            </div>
                        </div>
                        <div style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/guide-bg.png')">
                            <div class="guide colour">

                                <h5>Golden Visa Portugal 2020 – The Ultimate Guide by Experts</h5>
                                <a href="#">
                                    <div class="button">Click to read <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                                </a>

                            </div>
                        </div>

                    </div>

                    </div>
            <!-- END Local Guides -->


          



                  <!-- As seen On -->
                  <?php elseif( get_row_layout() == 'as_seen_on' ): ?>
                    

                    <h2 class="section-header txt-center sm-red-line as-seen-header" data-aos="fade-up">As seen on</h2>
                        <div class="as-seen-outer" data-aos="fade-up">
                            <div class="as-seen container">
                                <div class="source">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/exame.png">

                                </div>
                                <div class="source">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/veja.png">

                                </div>
                                <div class="source">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/info-money.png">

                                </div>
                                <div class="source">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/forbes.png">

                                </div>
                            </div>
                        </div>
            <!-- END As seen On -->



               <!-- USPs -->
               <?php elseif( get_row_layout() == 'usps_type1' ): ?>
                <h2 class="section-header sm-red-line"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('usp') ): ?>
                            <div class="usps" data-aos="fade-up">
                                <?php while ( have_rows('usp') ) : the_row(); ?>

                                    <div class="usp">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                        <span class="txt-center"> <?php the_sub_field('text'); ?></span>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END USPs -->





              <!-- Flip Cards -->
              <?php elseif( get_row_layout() == 'flip_cards' ): ?>
                <h2 class="section-header sm-red-line txt-center"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('flip_card') ): ?>
                            <div class="flip_cards" data-aos="fade-up">
                                <?php while ( have_rows('flip_card') ) : the_row(); ?>

                                    


                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                            <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/' . $icon . '.png'; ?>">
                                            <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>

                                            </div>
                                            <div class="flip-card-back">
                                                <span class="txt-center"> <?php the_sub_field('text'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END Flip Cards -->

            
             




             <!-- image -->
            <?php elseif( get_row_layout() == 'image' ): ?>

                    <?php 
                    
                    global $image_center;
                    $image_center =  get_sub_field('image_center');
                     ?>

                    
                    <h2 class="section-header <?php if($image_center) { echo 'txt-center';} ?> sm-red-line"> <?php the_sub_field('header'); ?> </h2>
                    



                    <?php 

                    $img_url = get_sub_field('link');
                    $image_url = get_sub_field('image_url'); 
                    if($link) {
                        echo '<a href="' . $link . '">';
                    }
                    
                   
                        echo ' <div class="block-image';?>
                        <?php if($image_center) { echo 'block-image-center';} ?>
                        
                        "><img class="image'
                        
                       <?php echo '" src="' . $image_url . '">
                       
                       </div> ';

                       if($link) {
                        echo '</a>';
                    }
                   ?> 
                   

            <?php endif; ?>

                      
            <!-- END image -->


               

            </div>
            <?php endwhile; ?>
        <?php endif; ?>

				<?php } ?>
</article><!-- #post-<?php the_ID(); ?> -->

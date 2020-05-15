<?php /* Template Name: Flexible Content */
get_header();

?>

<style>
.hero-page {
            background-image: url('<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $featured_img_url;?>');           
			background-color: #aaa;
			background-blend-mode: multiply;
}
</style>

<div class="hero-page">

<div class="  <?php
$enable_header_form = get_field('enable_header_form');
if($enable_header_form) { 
        echo 'hero-container '; 
 } else { echo 'hero-page-container '; }?> container">
        <div class="text">
            <h1 class="sm-red-line"><?php the_field('header'); ?></h1>
            <p>
                <?php the_field('sub_header'); ?>
            </p>
        </div>

        <?php
$enable_header_form = get_field('enable_header_form');
if($enable_header_form) { ?>

<style>
    .hero-page {
        height: 100vh;
    }

</style>
        <div class="form ac-form">
            
                <?php $our_commitment_form = get_field('our_commitment-form');
                                        if(!$our_commitment_form) {
                                            $our_commitment_form = get_field('our_commitment-form', 'option');
                                        }

                                        echo do_shortcode($our_commitment_form);?>
            </div>

<?php }?>

    </div>
    <div class="teal">

    </div>

</div>


<?php if(get_field('disable_intro_section')) {
?>

<div class="optimists-outer" data-aos="fade-up">
    <div class="optimists container">
        <div class="photo ">
            <img src="<?php the_field('intro_image_1') ?>" alt="">

        </div>
        <div class="text">

             <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header "><?php echo $sub_header; }?></h3>
            <h2 class="section-header sm-red-line"> <?php the_field('into_header'); ?></h2>

            <p><?php the_field('intro_text'); ?></p>

            <?php $enable_button = get_field('intro_button_url');
                
                if($enable_button) {
                    ?>
                    <a href="<?php $button_url = get_field('intro_button_url'); echo $button_url; ?>">
                        <div class="button"><?php $button_text = get_field('intro-button_text'); echo $button_text; ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                    </a>

                    <?php
                }
                ?>


        </div>
    </div>
</div>

<?php
}
?>


    <?php if( have_rows('flexible-content-pages') ): ?>
        <?php while( have_rows('flexible-content-pages') ): the_row(); ?>

            <div class="container entry-content container">

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
                   
                    

            <div class="text_image  space ">

                <?php $image_on_the_right = get_sub_field('image_on_the_right');
                
                if(!$image_on_the_right) {
                    ?>
                <div class="image-container">
                    <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header hidden-sub-header"><?php echo $sub_header; }?></h3>

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
                    <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header hidden-sub-header"><?php echo $sub_header; }?></h3>

                    <img class="img-stack-top-left stack-bottom" data-aos="fade-left" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">

                </div>

                    <?php
                }
                ?>

            </div>

             <!-- Text and Image --> 




                <!-- text_image_cta --> 
            
            <?php elseif( get_row_layout() == 'text_image_cta' ):  ?>                                     
                   
                    

                   <div class="text_image  text_image_cta space ">
       
                      
       
                       <div class="text-container text_image_cta-text space" data-aos="fade-up">
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
       
       
                       <div class="image-container space">
                            <?php if(get_sub_field('cta_url')) { ?><a href="<?php the_sub_field('cta_url');?>"> <?php }?>
                           <img data-aos="fade-left" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">
                           <?php if(get_sub_field('cta_url')) { ?></a> <?php }?>

                       </div>
       
                         
       
                   </div>
       
                    <!-- text_image_cta --> 


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
             <?php $header = get_sub_field('	padding: 20px;
header'); if($header) { ?><h6 class="blurbs-header txt-center sm-red-line space" data-aos="fade-up"> <?php the_sub_field('header'); ?> </h6> <?php } ?>
                        <?php if( have_rows('blurb_type_1_repeater') ): ?>
                            <div class="blurbs space" data-aos="fade-up">
                                <?php while ( have_rows('blurb_type_1_repeater') ) : the_row(); ?>

                                    <div class="blurb">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
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
                        <h2 class="section-header sm-red-line space"> <?php the_sub_field('header'); ?> </h2>
                        <?php if( have_rows('blurb_type_2_repeater') ): ?>
                            <div class="blurb_type_2_container blurbs">
                                <?php while ( have_rows('blurb_type_2_repeater') ) : the_row(); ?>
                                    <div class="blurb">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
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
                        <h2 class="section-header sm-red-line space"> <?php the_sub_field('header'); ?> </h2>
                        <?php if( have_rows('blurb_type_3_repeater') ): ?>
                            <div class="blurb_type_3_container blurbs">
                                <?php while ( have_rows('blurb_type_3_repeater') ) : the_row(); ?>
                                    <div class="blurb">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                        <h3 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h3>
                                        <p class="blurb-text txt-center ">
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END blurbs type 3 -->



                 


          



                  <!-- As seen On -->
                  <?php elseif( get_row_layout() == 'as_seen_on' ): ?>
                    

                    <h2 class="section-header txt-center sm-red-line as-seen-header space" data-aos="fade-up">As seen on</h2>
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
                <h2 class="section-header sm-red-line space"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('usp') ): ?>
                            <div class="usps" data-aos="fade-up">
                                <?php while ( have_rows('usp') ) : the_row(); ?>

                                    <div class="usp">
                                        <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                        <span class="txt-center"> <?php the_sub_field('text'); ?></span>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END USPs -->



               <!-- The Team -->
               <?php elseif( get_row_layout() == 'the_team' ): ?>
                <h2 class="section-header sm-red-line"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('the_team') ): ?>
                            <div class="the-team" data-aos="fade-up">
                                <?php while ( have_rows('the_team') ) : the_row(); ?>

                                    <div class="team-member">
                                        <img src="<?php the_sub_field('photo'); ?>">
                                        <span class="title"><?php the_sub_field('title'); ?></span>
                                        <span class="name"><?php the_sub_field('name'); ?></span>
                                        <span > <?php the_sub_field('bio'); ?></span>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
            <!-- END The Team -->




             <!-- Blog posts loop -->
             <?php elseif( get_row_layout() == 'blogs_loop' ): ?>
             <?php if(get_sub_field('section_header')) { ?><h2 class="section-header sm-red-line"> <?php the_sub_field('section_header'); ?> </h2><?php } ?>
                <div class="the-loop">

                    <?php
                        $args = array(
                            'post_type' => 'post',
                        );

                        if(get_sub_field('posts_category')) { 
                            $posts_per_page = get_sub_field('posts_category');
                            $args['posts_per_page'] = $posts_per_page;
                        } else {
                           $args['posts_per_page'] =  6;
                        }

                        $post_query = new WP_Query($args);

                        if($post_query->have_posts() ) {
                            while($post_query->have_posts() ) {
                                $post_query->the_post();
                                ?>
                                <div class="post">
                                    <a href="<?php the_permalink(); ?>">
                                    <div class="thumbnail-container" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>'); height: 220px;">
                                    </div>
                                    <div class="text">

                                    
                                        <h5><?php the_title(); ?></h5>
                                        <?php
                                        
                                            the_excerpt();
                                         ?> 
                                        <div class="button">Read more <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>

                                        </div>
                                    </a>
                                </div>
                                <?php
                                }
                            }
                            wp_reset_query();
                    ?>
                    </div>
                    <?php echo apply_filters( 'the_content', '[ajax_load_more container_type="div" posts_per_page="6" css_classes="the-loop"  offset="6" pause="true" scroll="false" button_label="Older Entries"]'); ?>

            <!-- END Blog posts loop -->



   




            <!-- Countries Grid -->
            <?php elseif( get_row_layout() == 'countries_grid' ): ?>
             <?php if(get_sub_field('section_header')) { ?><h2 class="section-header sm-red-line"> <?php the_sub_field('section_header'); ?> </h2><?php } ?>
                <div class="the-loop countries">
                    <?php if( have_rows('country') ): ?>
                            <div class="countries" data-aos="fade-up">
                                <?php while ( have_rows('country') ) : the_row(); ?>

                                    


                                    <div class="country">
                                        <div class="country-inner">
                                            <img src="<?php the_sub_field('flag');  ?>">
                                            <div class="text">

                                          
                                            <h5><?php  the_sub_field('country_name');?> </h5> 
                                            <a href="<?php the_sub_field('country-url');  ?>">
                                                <div class="button">
                                                    <?php if(get_sub_field('country_button_text')) {
                                                        the_sub_field('country_button_text');
                                                    } else {
                                                        echo 'Read More'; 
                                                    }?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                                            </a>
                                            </div>


                                            

                                            
                                        </div>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    
                </div>
            <!-- END Countries Grid -->



             <!-- Local Experts Guide -->
             <?php elseif( get_row_layout() == 'local_experts_guides' ): ?>
             <div class="guides-outer " data-aos="fade-up">

                <?php if(get_sub_field('section_header')) { ?><h2 class="section-header txt-center sm-red-line"> <?php the_sub_field('section_header'); ?> </h2><?php } ?>


                <div class="guides">


                <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category_name' => 'guides',

                        );

                       

                        $post_query = new WP_Query($args);

                        if($post_query->have_posts() ) {
                            while($post_query->have_posts() ) {
                                $post_query->the_post();
                                ?>

                                <div style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>')">
                                    <div class="guide colour">

                                        <h5><?php the_title(); ?></h5>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="button">READ MORE <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                                        </a>

                                    </div>
                                </div>


                              
                                <?php
                                }
                            }
                            wp_reset_query();
                    ?>



                  
                   
                </div>

                </div>
            <!-- END Local Experts Guide -->





              <!-- Flip Cards -->
              <?php elseif( get_row_layout() == 'flip_cards' ): ?>
                <h2 class="section-header space sm-red-line txt-center"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('flip_card') ): ?>
                            <div class="flip_cards space" data-aos="fade-up">
                                <?php while ( have_rows('flip_card') ) : the_row(); ?>

                                    


                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                            <img src="<?php $icon = get_sub_field('icon'); echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                            <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                            <img class="more" src="<?php echo get_template_directory_uri(); ?>/img/more.png" alt="">
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

                    
                <?php $image_header = get_sub_field('header'); if($image_header) {?> <h2 class="section-header space <?php if($image_center) { echo 'txt-center';} ?> sm-red-line"> <?php the_sub_field('header'); ?> </h2><?php } ?>
                    



                    <?php 

                    $link = get_sub_field('link');
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
<?php
$enable_our_commitment = get_field('enable_our_commitment');
if($enable_our_commitment) { ?>

                        <div class="commitment-section commitment-page-container" data-aos="fade-up">

                            <div class="commitment commitment-page container">
                                <div class="patricia">
                                    <h2 id="commitment-header" class="section-header sm-red-line"><?php the_field('our_commitment-header', 'option'); ?></h2>
                                    <p><?php the_field('our_commitment-text', 'option'); ?></p>

                                    <div class="ceo">
                                        <div class="photo-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/patricia.png">
                                        </div>
                                        <div class="signature-container">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/signature-BG-blue.png">
                                        </div>
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="form ac-form">
                                        <?php 
                                        
                                        $our_commitment_form = get_field('our_commitment-form2');
                                        if(!$our_commitment_form) {
                                            $our_commitment_form = get_field('our_commitment-form', 'option');
                                        }

                                        echo do_shortcode($our_commitment_form); ?>
                                    </div>
                                </div>

                            </div>
                        </div>

<?php
}
?>

<?php 
get_footer(); 
?>
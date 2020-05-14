<?php /* Template Name: Home page */
get_header();

?>

    <div class="hero">

        <div class="hero-container container">
            <div class="text">
                <h1 class="sm-red-line"><?php the_field('home_header'); ?></h1>
                <p><?php the_field('home_sub_header'); ?></p>
            </div>
            <div class="form ac-form">
                <?php echo do_shortcode('[activecampaign form=59]'); ?>
            </div>
        </div>
        <div class="teal">

        </div>

    </div>
    <div class="optimists-outer" data-aos="fade-up">
        <div class="optimists container">
            <div class="photo ">
                <img src="<?php the_field('home_intro-image'); ?>" alt="">

            </div>
            <div class="text">
                <h2 class="section-header sm-red-line"><?php the_field('home_intro-header'); ?></h2>
                <?php the_field('home_intro-text'); ?>
                <a href="<?php the_field('home_intro-button_url'); ?>">
                    <div class="button">Get in touch <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                </a>

            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <h3 class="section-sub-header ">SERVICES</h3>

    </div>

    <div class="services container scroll-animations " data-aos="fade-up">
        <div class="text" data-aos="fade-right">
            <h2 class="section-header sm-red-line"><?php the_field('home_services-header'); ?></h2>
            <?php the_field('home_services-text'); ?>
        </div>
        <div class="residency animated txt-center" data-aos="fade-up">
            <div class="top-card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/services-residency.png" alt="">
                <h3 class="sm-red-line txt-center">Residency Programs</h3>
                <?php the_field('home_residency-text'); ?>
            </div>
            <div class="bottom-card">
                <div class="flags">
                        <?php 

                        if( have_rows('home_residency-countries') ):

                        // loop through the rows of data
                            while ( have_rows('home_residency-countries') ) : the_row();

                            // display a sub field value
                            ?>
                            <div class="flag tooltip">
                                <img src="<?php the_sub_field('flag'); ?>" alt="">
                                <span class="tooltiptext"><?php the_sub_field('tooltip'); ?></span>
                            </div>

                            <?php

                            endwhile;



                        endif;

                        ?>
                        

                    </div>

                <a href="<?php the_field('home_residency-url'); ?>">
                    <div class="button">Compare Programs <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                </a>

            </div>

        </div>
        <div class="citizenship animated txt-center" data-aos="fade-left">
            <div class="top-card">

                <img src="<?php echo get_template_directory_uri(); ?>/img/services-citizenship.png" alt="">
                <h3 class="sm-red-line txt-center">Citizenship Programs</h3>
                <?php the_field('home_citizenship-text'); ?>

            </div>
            <div class="bottom-card">
                <div class="flags">

                        <?php 
                        /* repeater */

                        if( have_rows('home_citizenship-countries') ):

                        // loop through the rows of data
                            while ( have_rows('home_citizenship-countries') ) : the_row();

                            // display a sub field value
                            ?>
                                <div class="flag tooltip">
                                    <img src="<?php the_sub_field('flag'); ?>" alt="">
                                    <span class="tooltiptext"><?php the_sub_field('tooltip'); ?></span>

                                </div>
 
                               

                            <?php

                            endwhile;



                        endif;

                        ?>

                    

                </div>

                    <a href="<?php the_field('home_citizenship-url'); ?>">
                        <div class="button">Compare Programs <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                    </a>
                </div>

            </div>
        </div>

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
                    <img class="img-stack-top-left stack-bottom" data-aos="fade-left" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="">

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
                                <img src="<?php the_post_thumbnail_url('medium'); ?>">
                                <div class="text">

                                
                                    <h5><?php the_title(); ?></h5>
                                    <?php the_excerpt(); ?>
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
                                            <div class="button">Click to read <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
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

       <!-- <div class="ancillary container">
            <div class="image-container">
                <img class="img-stack-top-left stack-bottom" data-aos="fade-right" src="<?php echo get_template_directory_uri(); ?>/img/ancillary2.png" alt="">
                <img class="img-stack-bottom-right stack-top" data-aos="fade-up" src="<?php echo get_template_directory_uri(); ?>/img/ancillary1.png" alt="">

            </div>
            <div class="text-container" data-aos="fade-up">
                <h3 class="section-sub-header ">ANCILLARY SERVICES</h3>
                <h2 class="section-header sm-red-line">Property investment is often a key step in residency solutions</h2>
                <p>We exercise due diligence when assisting you in your purchase, making sure you avoid any common pitfalls that investors encounter.</p>

                <p>Residency and citizenship investment often goes hand-in-hand with tax planning, and our team of experts is here to make sure you get the best of both. With personalized advice, real estate intelligence and statistical data about real estate market transactions, we will provide you with the information and insight to make the right decisions.</p>
                <div class="button-container">
                    <a href="#">
                        <div class="button">Property Investment <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                    </a>
                </div>

            </div>

        </div> -->

        <div class="container">

            <h6 class="blurbs-header txt-center sm-red-line" data-aos="fade-up">We also provide services such as</h6>

            <div class="blurbs" data-aos="fade-up">
                <div class="blurb">
                    <img src="<?php  echo get_template_directory_uri() . '/img/icons/GCS-ICONS-17.png'; ?>" alt="">
                    <span>Local banking introduction</span>
                </div>
                <div class="separator-container">
                    <div class="separator"></div>
                </div>
                <div class="blurb">
                    <img src="<?php  echo get_template_directory_uri() . '/img/icons/GCS-ICONS-10.png'; ?>" alt="">
                    <span>Relocation services</span>
                </div>
                <div class="separator-container">
                    <div class="separator"></div>
                </div>
                <div class="blurb">
                    <img src="<?php  echo get_template_directory_uri() . '/img/icons/GCS-ICONS-26.png'; ?>" alt="">
                    <span>Education consultancy</span>
                </div>
                <div class="separator-container">
                    <div class="separator"></div>
                </div>
                <div class="blurb">
                    <img src="<?php  echo get_template_directory_uri() . '/img/icons/GCS-ICONS-39.png'; ?>" alt="">
                    <span>Concierge service</span>
                </div>

            </div>
        </div>

        <p class="txt-center blurbs-sub-header " data-aos="fade-up">Additionally, we have a wide network of local partners through which we can recommend trusted local professionals.</p>

        <div class="map-section-container" data-aos="fade-up">

            <div class="map-section container">
                <div class="text">
                    <h3 class="section-sub-header ">WHERE WE OPERATE</h3>
                    <h2 class="section-header sm-red-line"><?php the_field('home_where_we_operate-header'); ?></h2>
                    <p class="sm-text"><?php the_field('home_where_we_operate-text'); ?></p>
                    <a href="/countries/">
                        <div class="button">LIST ALL COUNTRIES <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
                    </a>

                </div>

                <div class="map">
                    <img src="<?php the_field('home_where_we_operate_-_map'); ?>" alt="">
                </div>

            </div>
        </div>

        <div class="guides-outer container" data-aos="fade-up">

            <h3 class="section-sub-header txt-center">Local experts</h3>
            <h2 class="section-header txt-center sm-red-line">Check out our Ultimate Guides for Citizenship by Investiment</h2>

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
                                            <div class="button">Click to read <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png"></div>
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
        <div class="commitment-container commitment-home-container" data-aos="fade-up">

            <div class="commitment commitment-home container">
                <div class="patricia">
                    <h2 class="section-header sm-red-line"><?php the_field('our_commitment-header', 'option'); ?></h2>
                    <p><?php the_field('our_commitment-text', 'option'); ?></p>

                    <div class="ceo">
                        <div class="photo-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/patricia.png">
                        </div>
                        <div class="signature-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/signature-BG-gray.png">
                        </div>
                    </div>
                </div>

                <div class="wrapper">
                    <div class="carousel">
                        <div class="container">

                            <div class="carousel-list">

                                <div class="review carousel-item item1 active">
                                    <p class="quote-header">“GCS provided, quickly and efficiently, all the assistance I needed.”</p> 
                                    <span class="author">Rod & Jay - </span> <img class="small-flag" src="<?php echo get_template_directory_uri(); ?>/img/flags-small/usa.svg"> <span class="country">USA</span>
                                    <p class="">GCS was very helpful and competent at every step and with a can-do attitude. We are now in Lisbon part of the year and always in touch. Thank you.</p>
                                </div>

                                <div class="review carousel-item item2 ">
                                    <p class="quote-header">“Thank you for being so patient and open with us.”</p> 

                                    <span class="author">Joan & Chen - </span> <img class="small-flag" src="<?php echo get_template_directory_uri(); ?>/img/flags-small/hk.svg"> <span class="country">Hong Kong</span>
                                    <p class="">Thank you for being so patient and open with us. We appreciate you helping us navigate the different investments as we could not make up our minds. We couldn’t be happier and got our visa swiftly too. </p>
                                </div>

                                <div class="review carousel-item item3 ">
                                <p class="quote-header">“I am happy to recommend the team at Global Citizen Solutions.”</p> 

                                    <span class="author">Yuri & Lena - </span> <img class="small-flag" src="<?php echo get_template_directory_uri(); ?>/img/flags-small/russia.svg"> <span class="country">Russia</span>
                                    <p class="">I am happy to recommend the team at Global Citizen Solutions. They are knowledgeable and responsive and delivered what was promised.</p>
                                </div>

                                

                            </div>

                            <div class="carousel-indicator">
                                <div class="indicator">
                                    <div class="dot active" onclick="ChangeSlide(1)"></div>
                                    <div class="dot" onclick="ChangeSlide(2)"></div>
                                    <div class="dot" onclick="ChangeSlide(3)"></div>
                                  

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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

        <?php 
get_footer(); 
?>
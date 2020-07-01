<?php


$k = 0;
/* to count row */
?>


    <?php if( have_rows('flexible-content-pages') ): ?>
        <?php while( have_rows('flexible-content-pages') ): the_row(); ?>

            <div class="container entry-content container row-<?php echo $k ?>">

            <!-- visual editor --> 
                <?php if( get_row_layout() == 'text-visual_editor' ):                                       
                    $header = get_field('header');
                    if ($header) {
                    ?>
                    <h2 class="section-header sm-red-line"> <?php the_sub_field('header'); }?> </h2>
                    <?php $visual_editor_content = get_sub_field('text-visual_editor'); 
                            echo $visual_editor_content;
                    ?>

                    <?php $k++; ?>
            <!-- END visual editor --> 


              



            <!-- Text and Image --> 
            
            <?php elseif( get_row_layout() == 'text_image' ):  ?>                                     
                   
                    

            <div class="text_image  space ">

                <?php $image_on_the_right = get_sub_field('image_on_the_right');
                
                if(!$image_on_the_right) {
                    ?>
                <div class="image-container">
                    <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header hidden-sub-header"><?php echo $sub_header; }?></h3>

                    <img class="img-stack-top-left stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="<?php $header = get_sub_field('header'); echo $header; ?>">

                </div>

                    <?php
                }
                ?>
               

                <div class="text-container" data-aos="fade-up">
                    <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header "><?php echo $sub_header; }?></h3>
                    <?php $block_image_header = get_sub_field('header'); ; if($block_image_header) { ?><h2 class="section-header sm-red-line"><?php  echo $block_image_header; ?></h2><?php }?>
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

                    <img class="img-stack-top-left stack-bottom" data-aos="fade-left" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="<?php $header = get_sub_field('header'); echo $header; ?>">

                </div>

                    <?php
                }
                ?>

            </div>
            <?php $k++; ?>

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
                           <img data-aos="fade-left" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="<?php $header = get_sub_field('header'); echo $header; ?>">
                           <?php if(get_sub_field('cta_url')) { ?></a> <?php }?>

                       </div>
       
                         
       
                   </div>
                   <?php $k++; ?>
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
                   <?php $k++; ?>
       
                    <!-- Text and 2 Images --> 
				
				 <!-- Typeform -->
         <?php elseif( get_row_layout() == 'typeform' ): ?>


             

              <?php

            function ExistsKey($index, $array) 
            { 
                if (array_key_exists($index, $array)){ 
                    return true;
                } 
                else{ 
                    return false; 
                } 
            } 

              
            $typeform_url = get_sub_field('typeform_url'); 
            // get the default
            $custom_typeform_urls = get_sub_field('custom_typeform_urls');
            // get all the custom values

            if($custom_typeform_urls) {
                foreach($custom_typeform_urls as $custom_typeform_url) {
                    $key_match = ExistsKey($custom_typeform_url['key'], $_GET);
                    $value_match = array_search($custom_typeform_url['value'], $_GET);

                    if ($key_match AND $value_match) {
                        $typeform_url = $custom_typeform_url['custom_typeform-url'];
                    }

                }
            }



             


              $i = 0;
              foreach ($_GET as $key => $value) {
                  if($i == 0) {
                    $typeform_url .= '?' . sanitize_text_field($key) . '=' . sanitize_text_field($value);
                    $i++;
                  } else {
                    $typeform_url .= '&' . sanitize_text_field($key) . '=' . sanitize_text_field($value);   
                  }
                  
              }

              
              ?>

              
              <div class="typeform-widget" data-url="<?php echo $typeform_url ?>" style="width: 100%; height: <?php the_sub_field('typeform_height');?>px;"></div>
                    <script>
                        (function () {
                            var qs,
                                js,
                                q,
                                s,
                                d = document,
                                gi = d.getElementById,
                                ce = d.createElement,
                                gt = d.getElementsByTagName,
                                id = "typef_orm",
                                b = "https://embed.typeform.com/";
                            if (!gi.call(d, id)) {
                                js = ce.call(d, "script");
                                js.id = id;
                                js.src = b + "embed.js";
                                q = gt.call(d, "script")[0];
                                q.parentNode.insertBefore(js, q);
                            }
                        })();
                    </script>
                    <?php $k++; ?>





            <!-- END Typeform -->




             <!-- blurbs type 1 -->
             <?php elseif( get_row_layout() == 'blurbs_type_1' ): ?>
             <?php $header = get_sub_field('header'); if($header) { ?><h6 class="blurbs-header txt-center sm-red-line space" data-aos="fade-up"> <?php the_sub_field('header'); ?> </h6> <?php } ?>
                        <?php if( have_rows('blurb_type_1_repeater') ): ?>
                            <div class="blurbs blurbs-type-1 space" data-aos="fade-up">
                                <?php while ( have_rows('blurb_type_1_repeater') ) : the_row(); ?>
									<style>
										.blurbs-type-1 .blurb {
											max-width: 15%;
										}
									</style>
                                    <div class="blurb">
                                        <img alt="<?php the_sub_field('text'); ?>" src="<?php $icon = get_sub_field('icon'); $first_digit = $icon[0]; if($icon < 10 AND $first_digit) { $icon = '0' . $icon;} echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h3 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h3> <?php } ?>
                                        <span> <?php the_sub_field('text'); ?></span>
                                    </div>
                                    <?php 
                                    
                                    global $i;
                                    $i++;
                                    if( ($i != 5) and ($i != 8)) {
                                      ?>
                                         <div class="separator-container blurb-id-<?php echo $i; ?>" >
                                            <div class="separator"></div>
                                        </div> 

                                        <?php } ?>
                                   
                                    <?php endwhile; ?>
								<style>
									.blurb-id-<?php echo $i;?> {
										display: none;
									}
								</style>
								
                            </div>
                        <?php endif; ?>
                        <?php $k++; ?>
            <!-- END blurbs type 1 -->


            <!-- blurbs type 2 -->
                    <?php elseif( get_row_layout() == 'blurbs_type_2' ): ?>
                        <h2 class="section-header sm-red-line space"> <?php the_sub_field('header'); ?> </h2>
                        <?php if( have_rows('blurb_type_2_repeater') ): ?>
                            <div class="blurb_type_2_container blurbs">
                                <?php while ( have_rows('blurb_type_2_repeater') ) : the_row(); ?>
                                    <div class="blurb">
                                        <img alt="<?php the_sub_field('text'); ?>" src="<?php $icon = get_sub_field('icon'); $first_digit = $icon[0]; if($icon < 10 AND $first_digit) { $icon = '0' . $icon;} echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                        <h3 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h3>
                                        <p class="blurb-text txt-center ">
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php $k++; ?>
            <!-- END blurbs type 2 -->


            <!-- blurbs type 3 -->
              <?php elseif( get_row_layout() == 'blurbs_type_3' ): ?>
                        <h2 class="section-header sm-red-line space"> <?php the_sub_field('header'); ?> </h2>
                        <?php if( have_rows('blurb_type_3_repeater') ): ?>
                            <div class="blurb_type_3_container blurbs">
                                <?php while ( have_rows('blurb_type_3_repeater') ) : the_row(); ?>
                                    <div class="blurb">
                                        <img alt="<?php the_sub_field('text'); ?>" src="<?php $icon = get_sub_field('icon'); $first_digit = $icon[0]; if($icon < 10 AND $first_digit) { $icon = '0' . $icon;} echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                        <h3 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h3>
                                        <p class="blurb-text txt-center ">
                                            <?php the_sub_field('text'); ?>
                                        </p>
                                    </div>
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php $k++; ?>
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
                        <?php $k++; ?>
            <!-- END As seen On -->



               <!-- USPs -->
               <?php elseif( get_row_layout() == 'usps_type1' ): ?>
                <h2 class="section-header sm-red-line space"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('usp') ): ?>
                            <div class="usps" data-aos="fade-up">
                                <?php while ( have_rows('usp') ) : the_row(); ?>

                                    <div class="usp">
                                        <img alt="<?php   the_sub_field('header');?>" src="<?php $icon = get_sub_field('icon'); $first_digit = $icon[0]; if($icon < 10 AND $first_digit) { $icon = '0' . $icon;} echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                        <span class="txt-center"> <?php the_sub_field('text'); ?></span>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php $k++; ?>
            <!-- END USPs -->



               <!-- The Team -->
               <?php elseif( get_row_layout() == 'the_team' ): ?>
                <h2 class="section-header sm-red-line"> <?php the_sub_field('section_header'); ?> </h2>
                        <?php if( have_rows('the_team') ): ?>
                            <div class="the-team" data-aos="fade-up">
                                <?php while ( have_rows('the_team') ) : the_row(); ?>

                                    <div class="team-member">
                                        <img alt="<?php the_sub_field('title'); ?>" src="<?php the_sub_field('photo'); ?>">
                                        <span class="title"><?php the_sub_field('title'); ?></span>
                                        <span class="name"><?php the_sub_field('name'); ?></span>
                                        <span > <?php the_sub_field('bio'); ?></span>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php $k++; ?>
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
                            $posts_category = get_sub_field('posts_category');
                            $args['cat'] = $posts_category;
                        }

                        if(get_sub_field('number_of_posts')) { 
                            $number_of_posts = get_sub_field('number_of_posts');
                            $args['posts_per_page'] = $number_of_posts;
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
                                    <div class="thumbnail-container" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>'); height: 220px;">
                                    </div>
                                    <div class="text">

                                    
                                        <h5><?php the_title(); ?></h5>
                                        <?php the_excerpt(); ?> 
                                        <div class="button"> <?php 
                            $read_more_global_button_text = get_field('read_more_global_button_text', 'option'); 
                            if ($read_more_global_button_text) {
                                echo $read_more_global_button_text; 
                            } else { 
                                echo 'Read more '; 
                            } 
                        ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png" alt="arrow icon"></div>

                                        </div>
                                    </a>
                                </div>
                                <?php
                                }
                            }
                            wp_reset_query();
                    ?>
                    </div>

                    <?php 

                    $enable_ajax = get_sub_field('add_infinite_loading_at_the_end');

                    if($enable_ajax): ?>

                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <?php echo apply_filters( 'the_content', '[ajax_load_more container_type="div" posts_per_page="6" css_classes="the-loop"  offset="6" pause="true" scroll="false" button_label="Load More"]'); ?>

                    <?php elseif(ICL_LANGUAGE_CODE=='pt-pt'): ?>
                        <?php echo  apply_filters( 'the_content', '[ajax_load_more container_type="div" posts_per_page="6" css_classes="the-loop"  offset="6" pause="true" scroll="false" button_label="Posts Antigos" category="cidadania-europeia,investir-na-europa,mercado-imobiliario,residencia-europeia,vida-na-europa,visto-europeu"]'); ?>

                    <?php endif; ?>
                    <?php endif; ?>
                    <?php $k++; ?>

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
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png" alt="arrow icon"></div>
                                            </a>
                                            </div>


                                            

                                            
                                        </div>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    
                </div>
                <?php $k++; ?>
            <!-- END Countries Grid -->



             <!-- Local Experts Guide -->
             <?php elseif( get_row_layout() == 'local_experts_guides' ): ?>
             <div class="guides-outer " data-aos="fade-up">

                <?php if(get_sub_field('section_header')) { ?><h2 class="section-header txt-center sm-red-line"> <?php the_sub_field('section_header'); ?> </h2><?php } ?>


                <div class="guides">
                <?php $i = 0; ?>

                <?php
                        $args = array(
                            'post__not_in' => array (get_the_ID()),
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category_name' => 'guides',

                        );

                        if(get_sub_field('guides_category')) {
                                  $args['category_name'] = get_sub_field('guides_category');
                                  
                        }

                        if(get_sub_field('posts_per_page')) {
                            $posts_per_page = get_sub_field('posts_per_page');
                            $args['posts_per_page'] = $posts_per_page++;
                        }

                       
                      

                       

                        $post_query = new WP_Query($args);

                        if($post_query->have_posts() ) {
                            while($post_query->have_posts() ) {
                                $post_query->the_post();
                                if ( $posts_per_page > $i or !$posts_per_page) {
                                ?>

                                <div class="<?php echo 'guide-' . $i; ?>" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>')">
                                    <div class="guide colour">

                                        <h5><?php the_title(); ?></h5>
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="button"><?php $read_more_global_button_text = get_field('read_more_global_button_text', 'option'); 
                            if ($read_more_global_button_text) {
                                echo $read_more_global_button_text; 
                            } else { 
                                echo 'Read more '; 
                            } 

                            $i++;
                            ?><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-button.png" alt="arrow icon"></div>
                                        </a>

                                    </div>
                                </div>


                              
                                <?php
                                }
                                }
                            }
                            wp_reset_query();

                            if($custom_per_row) {

                            } else {
                                if ($i > 4 and 8 > $i)
                                ?>
                                <style>
                                    .guide-4, .guide-5, .guide-6, .guide-7, .guide-8, .guide-9, .guide-10 {
                                    margin: 1em auto 0px auto;
                                    }
                                </style>    
    
                                <?php
                            }
    
                    ?>



                  
                   
                </div>

                </div>
                <?php $k++; ?>
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
                                            <img src="<?php $icon = get_sub_field('icon'); $first_digit = $icon[0]; if($icon < 10 AND $first_digit) { $icon = '0' . $icon;} echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>" alt="<?php   the_sub_field('header');?>">
                                            <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                            <img class="more" src="<?php 
                                                                        $more_button_flip_cards = get_field('more_button_flip_cards', 'option'); 
                                                                        if ($more_button_flip_cards) {
                                                                            echo $more_button_flip_cards; 
                                                                        } else { 
                                                                            echo get_template_directory_uri() . '/img/more.png'; 
                                                                        } 
                                                                    ?>" alt="">
                                            </div>
                                            <div class="flip-card-back">
                                                <span class="txt-center"> <?php the_sub_field('text'); ?></span>

                                            </div>
                                        </div>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php $k++; ?>
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
                        
                        ">
                        <?php $image_url_mobile = get_sub_field('image_url_mobile'); 
                                if($image_url_mobile) { 
                                    echo '<img class="image-block-mobile" src="' . $image_url_mobile . '">';
                                    echo '<style> 
                                    @media (max-width: 769px) {
                                    .image-block-desktop {
                                        display: none;
                                    }
                                }
                                    </style>';
                                } 
                        ?>

                        <img alt="<?php the_sub_field('alt-image-text'); ?>" class="image image-block-desktop" <?php echo ' src="' . $image_url . '">
                       </div> ';

                       if($link) {
                        echo '</a>';
                    }
                   ?> 
                   

            <?php endif; ?>
            <?php $k++; ?>

                      
            <!-- END image -->
																					
																				
	


               

            </div>
            <?php endwhile; ?>
        <?php endif; ?>
<?php


$k = 0;
/* to count row */
?>


    <?php if( have_rows('flexible-content-pages') ): ?>
        <?php while( have_rows('flexible-content-pages') ): the_row(); ?>

            <div class="container entry-content container row-<?php echo $k ?>">

                <?php if( get_row_layout() == 'text-visual_editor' ):                                       
                    $header = get_field('header');
                    if ($header) { ?>
                                <!-- visual editor --> 

                    <h2 class="section-header sm-red-line"> <?php the_sub_field('header'); }?> </h2>
                    <?php $visual_editor_content = get_sub_field('text-visual_editor'); 
                            echo $visual_editor_content;
                    ?>

                    <?php $k++; ?>
            <!-- END visual editor --> 


              



            
            <?php elseif( get_row_layout() == 'text_image' ):  ?>    
                        <!-- Text and Image --> 
                                 
                   
                    

            <div class="text_image  space ">

                <?php $image_on_the_right = get_sub_field('image_on_the_right');                
                if(!$image_on_the_right) { ?>
                <div class="image-container">
                    <?php $sub_header = get_sub_field('sub_header'); if($sub_header) {?>  <h3 class="section-sub-header hidden-sub-header"><?php echo $sub_header; }?></h3>
                    <img class="img-stack-top-left stack-bottom" data-aos="fade-right" src="<?php $image_1 = get_sub_field('image_1'); echo $image_1; ?>" alt="<?php $header = get_sub_field('header'); echo $header; ?>">
                </div>
                    <?php } ?>
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




            
            <?php elseif( get_row_layout() == 'text_image_cta' ):  ?>
                            <!-- text_image_cta --> 
                                     
                   
                    

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


            
            <?php elseif( get_row_layout() == 'text_2images' ):  ?>       
                             <!-- Text and 2 Images --> 
                              
                   
                    

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
				
         <?php elseif( get_row_layout() == 'typeform' ): ?>
         				 <!-- Typeform -->



             

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




             <?php elseif( get_row_layout() == 'blurbs_type_1' ): ?>


           
                          <!-- blurbs type 1 -->

             <?php $header = get_sub_field('header'); if($header) { ?><h6 class="blurbs-header txt-center sm-red-line space" data-aos="fade-up"> <?php the_sub_field('header'); ?> </h6> <?php } ?>
                        <?php $blurbs_by_row = get_sub_field('blurbs_by_row');  ?>
                        
                        <?php if( have_rows('blurb_type_1_repeater') ): ?>
                            <div class="blurbs blurbs-type-1 blurbs-<?php echo $k; ?> space" data-aos="fade-up">

                                    <style>
										.blurbs-<?php echo $k; ?> .blurb {
                                            display: flex;
                                            justify-content: flex-start;
                                            width: <?php 
                                                                             
                                            switch ($blurbs_by_row) {
                                                case 6:
                                                    echo '15%;';
                                                    break;
                                                case 5:
                                                    echo '17%;';
                                                    break;
                                                case 4:
                                                    echo '23%;';
                                                    break;
                                                case 3:
                                                    echo '30%;';
                                                    break;
                                                
                                                default:
                                                    echo '23%;';
                                            }
                                            
                                            ?>
                                         
										}

                                        .blurbs-type-1 .row-2 {
											margin-top: 2em;
										}

                                        .blurbs-type-1 img {
                                            max-height: 120px !important;
                                            min-height: 120px;
                                        }

									</style>


                                <?php while ( have_rows('blurb_type_1_repeater') ) : the_row(); ?>
									
                                    <div class="blurb blurb-<?php echo $i; if($i > 5) { echo ' row-2';}?>">
                                        <img alt="<?php the_sub_field('text'); ?>" src="<?php $icon = get_sub_field('icon'); $first_digit = $icon[0]; if($icon < 10 AND $first_digit) { $icon = '0' . $icon;} echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h3 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h3> <?php } else {?> 
                                        <?php } ?>
                                        <span> <?php the_sub_field('text'); ?></span>
                                    </div>
                                 
                                <?php endwhile;?>
								
                            </div>
                        <?php endif; ?>
                        <?php $k++; ?>
            <!-- END blurbs type 1 -->


                    <?php elseif( get_row_layout() == 'blurbs_type_2' ): ?>


                        <?php $blurbs_by_row = get_sub_field('blurbs_by_row');  ?>

                                <!-- blurbs type 2 -->

                        <h2 class="section-header sm-red-line space"> <?php the_sub_field('header'); ?> </h2>

                        <style>

.blurb_type_2_container .blurb {
    width: <?php
                                            

                                            switch ($blurbs_by_row) {
                                                case 5:
                                                    echo '15%;';
                                                    break;
                                                case 4:
                                                    echo '23%;';
                                                    break;
                                                case 3:
                                                    echo '32%;';
                                                    break;
                                                
                                                default:
                                                    echo '23%;';
                                            }
                                            
                                            ?>
}
                                

                            </style>
                        <?php if( have_rows('blurb_type_2_repeater') ): ?>


                            <div class="blurb_type_2_container blurbs blurbs-<?php echo $k; ?>">
                                <?php while ( have_rows('blurb_type_2_repeater') ) : the_row(); ?>

                                <style>
										.blurbs-<?php echo $k; ?> .blurb {
                                            display: flex;
                                            justify-content: flex-start;
                                            width: <?php 
                                                                             
                                            switch ($blurbs_by_row) {
                                                case 6:
                                                    echo '15%;';
                                                    break;
                                                case 5:
                                                    echo '17%;';
                                                    break;
                                                case 4:
                                                    echo '23%;';
                                                    break;
                                                case 3:
                                                    echo '30%;';
                                                    break;
                                                
                                                default:
                                                    echo '23%;';
                                            }
                                            
                                            ?>
                                         
										}
                                    </style>
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


              <?php elseif( get_row_layout() == 'blurbs_type_3' ): ?>
                          <!-- blurbs type 3 -->
                          <?php $blurbs_by_row = get_sub_field('blurbs_by_row');  ?>

                        <h2 class="section-header sm-red-line space"> <?php the_sub_field('header'); ?> </h2>

                        <style>

.blurbs-<?php echo $k; ?> .blurb {
    width: <?php 
                                            

                                            switch ($blurbs_by_row) {
                                                case 5:
                                                    echo '15%;';
                                                    break;
                                                case 4:
                                                    echo '23%;';
                                                    break;
                                                case 3:
                                                    echo '30%;';
                                                    break;
                                                
                                                default:
                                                    echo '23%;';
                                            }
                                            
                                            ?>
}
                                

                            </style>
                        <?php if( have_rows('blurb_type_3_repeater') ): ?>
                            <?php $blurbs_by_row = get_sub_field('blurbs_by_row');  ?>


                            <div class="blurb_type_3_container blurbs blurbs-<?php echo $k; ?>">
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



                 


          



                  <?php elseif( get_row_layout() == 'as_seen_on' ): ?>
                                    <!-- As seen On -->

                    

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



               <?php elseif( get_row_layout() == 'usps_type1' ): ?>
                              <!-- USPs -->

                <h2 class="section-header sm-red-line space"> <?php the_sub_field('section_header'); ?> </h2>
                <?php $blurbs_by_row = get_sub_field('blurbs_by_row');  ?>

                <style>
										.blurbs-<?php echo $k; ?> .usp-item {
                                            display: flex;
                                            justify-content: flex-start;
                                            max-width: <?php 
                                                                             
                                            switch ($blurbs_by_row) {
                                                case 6:
                                                    echo '15%;';
                                                    break;
                                                case 5:
                                                    echo '17%;';
                                                    break;
                                                case 4:
                                                    echo '23%;';
                                                    break;
                                                case 3:
                                                    echo '30%;';
                                                    break;
                                                
                                                default:
                                                    echo '23%;';
                                            }
                                            
                                            ?>
                                         
										}

                                      

									</style>

                        <?php if( have_rows('usp') ): ?>
                            <div class="usps blurbs-<?php echo $k; ?>" data-aos="fade-up">
                                <?php while ( have_rows('usp') ) : the_row(); ?>

                                    <div class="usp usp-item">
                                        <img alt="<?php   the_sub_field('header');?>" src="<?php $icon = get_sub_field('icon'); $first_digit = $icon[0]; if($icon < 10 AND $first_digit) { $icon = '0' . $icon;} echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">
                                        <?php $header = get_sub_field('header'); if($header) { ?><h5 class="blurb-header sm-red-line txt-center "><?php   the_sub_field('header');?> </h5> <?php } ?>
                                        <span class="txt-center"> <?php the_sub_field('text'); ?></span>
                                    </div>
                                   
                                   
                                    <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <?php $k++; ?>
            <!-- END USPs -->



               <?php elseif( get_row_layout() == 'the_team' ): ?>
                              <!-- The Team -->

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



            <?php elseif( get_row_layout() == 'space' ): ?>
                              <!-- Space -->
            <style>
            #block-<?php echo $k; ?> {
                height: <?php the_sub_field('height');?>px;
            }

            <?php if (get_sub_field('mobile-height')) : ?>

            @media (max-width: 800px) {
                #block-<?php echo $k; ?> {
                    height: <?php the_sub_field('mobile-height');?>px;
                }
            }
            <?php endif; ?>

            </style>

            <div id="block-<?php echo $k; ?>" class="container">

            </div>
               
            <?php $k++; ?> 
            <!-- END Space -->




             <?php elseif( get_row_layout() == 'blogs_loop' ): ?>
                          <!-- Blog posts loop -->

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



   




            <?php elseif( get_row_layout() == 'countries_grid' ): ?>
                        <!-- Countries Grid -->

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



             <?php elseif( get_row_layout() == 'local_experts_guides' ): ?>
                          <!-- Local Experts Guide -->

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





              <?php elseif( get_row_layout() == 'flip_cards' ): ?>
                            <!-- Flip Cards -->

                <h2 class="section-header space sm-red-line txt-center"> <?php the_sub_field('section_header'); ?> </h2>
                    <?php $blurbs_by_row = get_sub_field('blurbs_by_row');  ?>

                        <?php if( have_rows('flip_card') ): ?>

                            <div class="flip_cards space blurbs-<?php echo $k; ?>" data-aos="fade-up">
                                <?php while ( have_rows('flip_card') ) : the_row(); ?>

                                <style>
										.blurbs-<?php echo $k; ?> .flip-item {
                                            display: flex;
                                            justify-content: flex-start;
                                            max-width: <?php 
                                                                             
                                            switch ($blurbs_by_row) {
                                                case 6:
                                                    echo '15%;';
                                                    break;
                                                case 5:
                                                    echo '17%;';
                                                    break;
                                                case 4:
                                                    echo '21%;';
                                                    break;
                                                case 3:
                                                    echo '30%;';
                                                    break;
                                                
                                                default:
                                                    echo '21%;';
                                            }
                                            
                                            ?>
                                         
										}

                                       

									</style>


                                    <div class="flip-card flip-item">
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




              <?php elseif( get_row_layout() == 'faqs' ): ?>
                            <!-- FAQs -->

              <?php $section_header = get_sub_field('section_header');  if($section_header) { ?><h2 class="section-header space sm-red-line"> <?php the_sub_field('section_header'); ?> </h2><?php }?>
                        <?php if( have_rows('faq_item') ): ?>

                                <?php $i = 0; ?>
                                <?php while ( have_rows('faq_item') ) : the_row(); ?>
                                    <section class="sc_fs_faq sc_card">
                                        <div>
                                            <h3><?php the_sub_field('question'); ?></h3>
                                            <div>
                                                <p><?php the_sub_field('answer'); ?></p>
                                            </div>
                                        </div>
                                    </section>
                                    <?php $i++; ?> 
                                <?php endwhile; ?>


                                    <?php $k = 0; ?>
                                    <script type="application/ld+json">

                                    {
                                    "@context": "https://schema.org",
                                    "@type": "FAQPage",
                                    "mainEntity": [

                                        <?php while ( have_rows('faq_item') ) : the_row(); ?>

                                                {
                                            "@type": "Question",
                                            "name": "<?php the_sub_field('question'); ?>",
                                            "acceptedAnswer": {
                                                "@type": "Answer",
                                                "text": "<?php $answer = get_sub_field('answer'); 

                                               
                                                /* $answer = preg_replace('style="font-weight: 400;"', '', $answer);
                                                $answer = preg_replace(';', '', $answer); 
                                                $answer = preg_replace('{', '', $answer);
                                                $answer = preg_replace('}', '', $answer);  */ 
                                                echo $answer;
                                                ?>"
                                                                }
                                        }<?php $k++; if ($i != $k) {echo ','; }?>
                                        <?php endwhile; ?>
                                        ]
                                    }

                                    </script>
                                                                                    

                        <?php endif; ?>
                        <?php $k++; ?>
            <!-- END FAQs -->

              <?php elseif( get_row_layout() == 'step_by_step' ): ?>
              <!-- Step by step -->

                <style>
                    .steps {
                        display: flex;
                        flex-wrap: wrap;
                        margin-bottom: 2em;
                    }
                    
                    .steps .step {
                        max-width: 17%;
                        margin-right: 1em;
                        margin: 0 auto;
                    }

                    @media (max-width: 780px) {
                        .steps .step {
                            max-width: 90%;
                            width: 90%;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                        }

                        .step img {
                            width: 200px;
                            height: auto;

                        }

                        .step-content {
                            width: 90%;
                        }
                    }

                    .step-4 {
                        margin-right: 0px;
                    }

                    .step-content {
                        display: flex;
                        align-items: center;
                        border-top: 1px solid #007ac1;
                        border-bottom: 1px solid #007ac1;
                    }

                    .step-content h5 {
                        text-transform: uppercase;
                        color: #007ac1;
                        font-weight: 400;
                        font-size: 1rem;
                    }

                    .number .number {
                        font-size: 4rem !important;
                        line-height: 4rem;
                        margin: 0px;
                        padding-right: 5px;
                        min-height: 5rem;
                    }
                </style>
                <div class="steps-container container">    
                    <h2 class="section-header txt-center sm-gold-line space"> 
                        <?php the_sub_field('section_header'); ?> 
                    </h2>
                    <?php 
                        $section_description = get_sub_field('section_description'); 
                        if($section_description) {
                            echo  $section_description;
                        }
                    ?>

                    <?php $k_step_by_step = 1; ?>
                    <?php if( have_rows('step') ): ?>
                        <div class="steps">
                            <?php while ( have_rows('step') ) : the_row(); ?>
                                <div class="step step-<?php echo $k_step_by_step; ?> row-<?php if(5 <=
                                 $k_step_by_step) { echo '2';} else { echo '1';}?>">
                             
                                    <img src="<?php $icon = get_sub_field('icon'); $first_digit = $icon[0]; if($icon < 10 AND $first_digit) { $icon = '0' . $icon;} echo get_template_directory_uri() . '/img/icons/GCS-ICONS-' . $icon . '.png'; ?>">

                                    <div class="step-content">
                                        <div class="number"><h3 class="number"><?php echo $k_step_by_step; ?></h3></div>

                                        <h5 class="blurb-header sm-gold-line txt-center "><?php   the_sub_field('header');?> </h5>
                                        
                                    </div>
                                </div>
                                <?php $k_step_by_step++; ?> 
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php $closing_remarks = get_sub_field('closing_remarks');
                            if($closing_remarks) {
                                echo '<div class="closing-remarkts space">' . $closing_remarks . '</div>';
                            }
                    ?>
                </div>
            <!-- END step by step -->



               <?php elseif( get_row_layout() == 'timeline-vertical' ): ?>
               <!-- Timeline vertical -->
                <style>
                    .timeline_stamp_item  {
                        display: flex;
                        justify-content: center;
                        width: 600px;
                        max-width: 90%;
                    }

                    .timeline_stamp_item  h5, .timeline_stamp_item  strong {
                        text-transform: uppercase;
                        color: #007ac1;
                        font-weight: 400;
                        font-size: 1rem;
                        width: 130px;
                        text-align: right;
                        margin-right: 1em;
                    }

                    .timeline_stamp_item  .text {
                        min-height: 200px;
                        width: 200px;
                        margin-left: 1em;
                    }

                    .timeline_stamp_item  .text p:first-of-type {
                        margin: 0px;

                    }

                    .timeline_stamp {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                    }

                    .timeline_stamp_item .time{
                        width: 200px;
                    }

                    .arrow {
                        display: flex;
                        align-items: flex-end;
                        padding: 2px;
                        
                    }

               


                                            
                    .timeline_stamp_item .text ul {
                        margin-left: 2em;
                        list-style: none; /* Remove default bullets */
                    }

                    .timeline_stamp_item .text ul li::before {
                        content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
                        color: #00b4c5; /* Change the color */
                        font-weight: bold; /* If you want it to be bold */
                        display: inline-block; /* Needed to add space between the bullet and the text */
                        width: 1em; /* Also needed for space (tweak if needed) */
                        margin-left: -1em; /* Also needed for space (tweak if needed) */
                        }

                        @media (max-width: 700px) {
                            .timeline_stamp_item  .text {
                                width: 130px;
                            }


                    .timeline_stamp_item  h5, .timeline_stamp_item  strong {
                     
                        width: 80px;
                       
                    }

                    

                        }
                </style>
               
                <div class="steps-container container">    
                    <h2 class="section-header txt-center sm-gold-line space"> 
                        <?php the_sub_field('section_header'); ?> 
                    </h2>
                   

                    <?php $k_timeline_stamp = 1; ?>
                    <?php if( have_rows('timeline_stamp') ): ?>
                        <div class="timeline_stamp">
                            <?php while ( have_rows('timeline_stamp') ) : the_row(); ?>
                                <div class="timeline_stamp_item timeline_stamp-<?php echo $k_timeline_stamp; ?>">
                            

                                            <div class="time">
                                                <h5 class="blurb-header sm-gold-line txt-center " style="color: <?php the_sub_field('colour');?>"><?php   the_sub_field('timestamp');?> </h5>

                                            </div>
                                            <div class="arrow" style="background-color: <?php the_sub_field('colour');?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.png" alt="arrow icon"> 
                                            </div>
                                           
                                      
                                        <div class="text"><?php the_sub_field('text');?></div>

                                        
                                </div>
                                

                               
                                <?php $k_timeline_stamp++; ?> 
                            <?php endwhile; ?>

                            <?php $k_timeline_stamp--; ?> 
                            <style>
                                <?php echo '.timeline_stamp-' . $k_timeline_stamp . ' .text {';?> 
                                    min-height: 100px !important;
                                }
                            </style>
                          

                        </div>
                    <?php endif; ?>
                 
                   
                </div>
                <!-- END Timeline vertical-->


            
             




            <?php elseif( get_row_layout() == 'image' ): ?>
             <!-- image -->

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
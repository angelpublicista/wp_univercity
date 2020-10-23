<?php
 //Template para mostrar post
global $geniorama;
?>

<article id="project-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php get_template_part('template-parts/subheader') ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9 post-col">
                <div class="post-content mt-5">
                    <div class="entry-content">
                        <?php echo the_post_thumbnail('full'); ?>
                        
                        <?php 
                            $gallery = get_field('galeria'); 
                            $ids_gallery = explode(",", $gallery);
                        ?>

                        <div class="gallery mt-3">
                            <div class="row">
                                <?php foreach($ids_gallery as $image): ?>
                                
                                <?php 
                                    $src_image = wp_get_attachment_image_src($image, 'full');
                                    $src_image = $src_image[0];
                                ?>
                                <div class="col-12 col-md-6 gallery_cont_img">
                                    <a href="<?php echo $src_image; ?>" data-lightbox="image-1" data-title="My caption"><?php echo wp_get_attachment_image( $image, 'full', false, array('class' => 'img-fluid')); ?></a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <?php

                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'master-template-woo' ),
                            'after'  => '</div>',
                        ) );
                        ?>

                        <?php

                            if ($geniorama['on-off-links-post']) {
                                if ($geniorama['opt-text-links-post'] == 1) {
                                    the_post_navigation(array(
                                        'prev_text'                  => __( '%title' ),
                                        'next_text'                  => __( '%title' ),
                                        'screen_reader_text' => __( 'Continuar leyendo', 'master-template-woo' )
                                    ));
                                } else {
                                    the_post_navigation(array(
                                        'prev_text'                  => __($geniorama['prev-title-post']),
                                        'next_text'                  => __($geniorama['next-title-post']),
                                        'screen_reader_text' => __( 'Continuar leyendo', 'master-template-woo' )
                                    ));
                                }
                            }
                        ?>
                    </div><!-- .entry-content -->

                   

                    <!-- Comments section -->
                    <?php 
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (get_field('field_5e0f69707844b')) {
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        }
                    ?>
                </div>

                
            </div>
            <?php if(get_field('field_5e0f670f0f320')): ?>
                <div class="col-12 col-md-3 sidebar-col">
                    <div class="sidebar-projects mt-5">
                        <?php
                                $id_post = get_the_ID();

                                $customers = get_the_terms( $post->ID, 'uc_customer');

                                foreach($customers as $customer){
                                    $customer_name = $customer->name;
                                }
                        ?>
                        
                                
                        <h1><?php the_title(); ?></h1>
                        <hr class="uc-divider">
                        <p><?php the_excerpt(); ?></p>

                        <div class="uc-project-data">
                            <ul class="nav flex-column">
                                <li class="nav-item"><span class="font-weight-bold text-uppercase">Cliente:</span> <?php echo $customer_name; ?></li>
                                <li class="nav-item"><span class="font-weight-bold text-uppercase">Fecha:</span> <?php the_date(); ?></li>
                                <?php if(get_field('url_proyecto')): ?>
                                    <li class="nav-item"><span class="font-weight-bold text-uppercase">URL Proyecto:</span> <a href="<?php the_field('url_proyecto'); ?>" target="_blank">Ir al enlace</a></li>
                                <?php endif; ?>
                                <li class="nav-item"><span class="font-weight-bold text-uppercase">Categoría:</span> <?php the_category(); ?></li>
                                <li class="nav-item">
                                <span class="font-weight-bold text-uppercase">Compartir:</span>
                                    <div class="uc-project-data__icons d-inline-flex">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="nav-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="nav-link" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" class="nav-link" target="_blank"><i class="fab fa-pinterest"></i></a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" class="nav-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="mailto:info@example.com?&subject=&body=<?php the_permalink(); ?>" class="nav-link" target="_blank"><i class="fas fa-envelope"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--Share Links-->
                     
                        <!-- <div class="share-links d-flex flex-row align-items-center">
                            <span class="text-share">Compartir en:</span>
                            <ul class="nav justify-content-center">
                                <li class="nav-item"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="button-icon" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="https://twitter.com/home?status=<?php the_permalink(); ?>"  class="button-icon" target="_blank"><i class="fab fa-twitter" target="_blank"></i></a></li>
                                <li class="nav-item"><a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=&description=" class="button-icon" target="_blank"><i class="fab fa-pinterest" target="_blank"></i></a></li>
                                <li class="nav-item"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source=" class="button-icon" target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
                                <li class="nav-item"><a href="mailto:info@example.com?&subject=&body=<?php the_permalink(); ?> " class="button-icon" target="_blank"><i class="fas fa-envelope" target="_blank"></i></a></li>
                            </ul>
                        </div> -->
                    <!--end share links-->
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</article>
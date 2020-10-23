<?php

if(!function_exists('uc_project_grid_func')){
    function uc_project_grid_func($atts){
        $atts = shortcode_atts(
            array(
                'cols' => 4,
                'limit-post' => 8
            ),
            $atts,
            'uc_project_grid'
        );

        if($atts['cols'] == 4){
            $col_class = "col-md-3";
        } elseif($atts['cols'] == 3) {
            $col_class = "col-md-4";
        } elseif ($atts['cols'] == 2) {
            $col_class = "col-md-6";
        }

        $args = array(
            "post_type" => "projects",
            "posts_per_page" => $atts['limit-post']
        );

        $projects_query = new WP_Query($args);

        if($projects_query->have_posts()){
            ob_start();
            ?>
            
            <div class="row">
                <?php while($projects_query->have_posts()): ?>
                <?php $projects_query->the_post(); ?>
                <?php 
                    $terms = get_the_terms($post->ID, "uc_customer");

                    foreach($terms as $customer){
                        $customer_name = $customer->name;
                    }
                    
                ?>
                <div class="col-12 mb-3 <?php echo $col_class; ?>">
                    <div class="uc-card-portfolio position-relative">
                    <!-- uc-portfolio-cover img-fluid -->
                        <?php the_post_thumbnail( "medium", array("class" => "uc-portfolio-cover img-fluid") ); ?>
                        <div class="uc-portfolio-caption position-absolute w-100 h-100 d-flex flex-column justify-content-center align-items-center p-3 text-center">
                        <span class="uc-portfolio-category uc-text-primary"><?php the_category(); ?></span>
                        <h2 class="uc-portfolio-title font-weight-bold"><?php the_title(); ?></h2>
                        <span class="uc-portfolio-client">Cliente: <span class="uc-text-primary"><?php echo $customer_name; ?></span></span>
                        <br>
                        <div class="uc-portfolio-icons">
                            <a href="<?php the_permalink(); ?>"><i class="fas fa-link m-3"></i></a>
                            <a href="<?php the_post_thumbnail_url('full'); ?>" data-lightbox="image-1" data-title="<?php the_title(); ?>"><i class="fas fa-search-plus m-3"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php
        } else {
            echo "No hemos encontrado posts";
        }

        wp_reset_query();
        return ob_get_clean();
    }

    add_shortcode( 'uc_project_grid', 'uc_project_grid_func' );
}
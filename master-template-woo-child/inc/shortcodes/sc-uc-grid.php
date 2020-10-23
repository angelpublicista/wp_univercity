<?php

if(!function_exists("uc_grid_func")){
    function uc_grid_func($atts){
        $atts = shortcode_atts(
            array(
                'images' => '',
                'style'  => ''
            ),
            $atts,
            'uc_grid'
        );

        $images = $atts['images'];
        $ids_images = explode(',', $images);
        ob_start();
        ?>
        <div class="contenedor uc-grid <?php echo $atts['style']; ?>">
            <?php $counter = 0; ?>
            <?php foreach($ids_images as $img): ?>
            <?php $counter = $counter + 1; ?>
            <div class="img-<?php echo $counter; ?> uc-card-portfolio position-relative">
                <?php echo wp_get_attachment_image( $img, "full", false, array('class' => 'uc-portfolio-cover img-fluid') ); ?>
                <div class="uc-portfolio-caption position-absolute w-100 h-100 d-flex flex-column justify-content-center align-items-center p-3 text-center">
                <span class="uc-portfolio-category uc-text-primary">Impresión</span>
                <h2 class="uc-portfolio-title font-weight-bold">Agenda Alcaldia Local</h2>
                <br>
                <div class="uc-portfolio-icons">
                    <a href="#"><i class="fas fa-search-plus m-3"></i></a>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <?php
        return ob_get_clean();
    }

    add_shortcode( "uc_grid", "uc_grid_func" );

}
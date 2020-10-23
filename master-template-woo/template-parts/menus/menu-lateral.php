<?php

global $geniorama;
?>

<div class="box-menu-lateral box-shadow" id="box-menu-lateral">
    <div class="header">
        <div class="box-logo">
            <a href="<?php site_url(); ?>"><?php echo show_logo($geniorama['opt-logo-select-menu-lateral']); ?></a>
        </div>
        <button class="button-menu-toggle button-menu-lateral close-menu" data-target="#box-menu-lateral">
            <span class="line"></span>
        </button>
    </div>

    <?php get_template_part('template-parts/menus/menu-nav-lateral'); ?>

    <div class="box-social-icons">
        <p class="text-follow">Síguenos en:</p>
        <ul class="nav">
            <?php if($geniorama['opt-multi-select-social-buttons']): ?>
                <?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
                    <?php if ($valor_campo == '3'): ?>
                        <?php show_social_buttons("menu-lateral-buttons"); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
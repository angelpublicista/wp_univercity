<?php

global $geniorama;
?>

<div class="box-info-menu">
    <ul class="nav">
        <!--Email header-->
		<?php if ($geniorama['opt-email-info']):?>
            <li class="nav-item">
                <a href="mailto:<?php echo $geniorama['opt-email-info'] ?>" class="nav-link">
                    <i class="<?php echo $geniorama['icon-mail'] ?>"></i> 
                    <span><?php echo $geniorama['opt-email-info'] ?></span>
                </a>
            </li>
		<?php endif; ?>
        
        <!--Phone header-->
		<?php if ($geniorama['opt-phone']):?>
            <li class="nav-item">
                <a href="tel:<?php echo sanitizePhone($geniorama['opt-phone']);?>" class="nav-link" target='_blank'>
                    <i class="<?php echo $geniorama['icon-phone'] ?>" aria-hidden="true"></i> 
                    <span><?php echo $geniorama['opt-phone'] ?></span>
                </a>
            </li>
		<?php endif; ?>

		<!--Address header-->
		<?php if ($geniorama['opt-address']):?>
            <li class="nav-item">
                <a href="<?php echo $geniorama['opt-url-address'] ?>" class="nav-link" target='_blank'>
                    <i class="<?php echo $geniorama['icon-address'] ?>" aria-hidden="true"></i> 
                    <span><?php echo $geniorama['opt-address'] ?></span>
                </a>
            </li>
        <?php endif; ?>
        

        <!-- Whatsapp -->
        <?php if($geniorama['opt-whp']): ?>
			<li class="nav-item">
				<a href="<?php echo api_whatsapp(); ?>" class="nav-link" target="_blank">
                    <i class="<?php echo $geniorama['icon-mobile-phone'] ?>"></i>
                    <span><?php echo $geniorama['opt-whp'] ?></span>
				</a>
			</li>
		<?php endif; ?>
    </ul>
</div>
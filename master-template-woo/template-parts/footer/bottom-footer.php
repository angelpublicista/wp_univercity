<?php
/**
 * Template part for displaying bottom footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<div class="bottom-footer p-2 pt-4">
			<div class="container">
				<div class="row">
					<?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
						<?php if ($valor_campo == '4'): ?>
							<div class="col-12 col-md-4 text-center">
								<ul class="nav social-nav">
									<?php show_social_buttons('social-nav'); ?>
								</ul>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
					<div class="col-12 col-md-4 text-center">
						<p>Copyright <?php if ($geniorama['client-name']): echo $geniorama['client-name']; endif;?> 2020 | Todos los derechos reservados</p>
					</div>
					<div class="col-12 col-md-4 text-center">
						<p>Diseñado y desarrollado por <a class="text-link" href="<?php if ($geniorama['copy-url']): echo $geniorama['copy-url']; endif;?>" target="_blank" class="text-link"><?php if ($geniorama['copy-name']): echo $geniorama['copy-name']; endif;?></a></p>
					</div>
				</div>
			</div>
		</div>
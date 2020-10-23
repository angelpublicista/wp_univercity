<?php
/**
 * Template part for Search Input Bar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */
global $geniorama;
?>

<form action="" role="search" method="get" class="search-form" action="<?php site_url(); ?>">
    <label for="input-search"><p class="mb-0"><?php if ($geniorama['opt-text-label-searchbar']) {
        echo $geniorama['opt-text-label-searchbar'];
    } ?></p></label>
    <input type="search" placeholder="<?php if ($geniorama['opt-text-placeholder-searchbar']) {
        echo $geniorama['opt-text-placeholder-searchbar'];
    } ?>" class="form-control" value name="s" id="input-search">
</form>
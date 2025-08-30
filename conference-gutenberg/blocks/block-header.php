<?php
/**
 * Conference - Block
 */

$block_path = 'block-header';
$gutenberg_title = 'Block - header';

$url = get_template_directory_uri();
$bgc = get_field('block_25_bgc') ? 'background-color:'.get_field('block_25_bgc') : '';

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-header">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img{width:100%;object-fit:contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color:#F5F5F5;border:1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position:relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="df-sp-ce w-100p">
        <a href="<?php echo get_home_url(); ?>" class="conference-header__logotype"><img class="img img-contain" src="<?php echo esc_url($url); ?>/assets/img/conference/header/header-logotype.svg" alt="www" /></a>
        <button class="conference-header__burger"><img class="img img-contain" src="<?php echo esc_url($url); ?>/assets/img/conference/header/burger.svg" alt="www" /></button>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

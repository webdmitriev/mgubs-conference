<?php
/**
 * Conference - Block
 */

$block_path = 'block-02';
$gutenberg_title = 'Block - 02';

$allowed_tags = array(
  'br'   => array(),
  'p'    => array(),
  'span' => array(),
);

$title    = get_field('title');
$descr    = get_field('descr');
$btn_text = get_field('btn_text');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-block-02">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <?php if($title): ?><h2 class="h2"><?php echo wp_kses($title, $allowed_tags); ?></h2><?php endif; ?>
      <?php if($descr): ?><div class="line-wrap w-100p"><p class="regular"><?php echo wp_kses($descr, $allowed_tags); ?></p></div><?php endif; ?>
      <?php if($btn_text): ?><button class="conference-btn conference-btn-gold"><?php echo wp_kses($btn_text, $allowed_tags); ?></button><?php endif; ?>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

<?php
/**
 * Conference - Block
 */

$block_path = 'block-10';
$gutenberg_title = 'Block - 10';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'   => array(),
  'p'    => array(),
  'span' => array(),
);

$title  = get_field('title');
$descr  = get_field('descr');
$form   = get_field('form');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-block-10" id="conference-block-10-scroll">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="df-sp-fs w-100p">
        <?php
          if($form) {
            echo do_shortcode($form);
          }
        ?>

        <div class="conference-content">
          <?php if($title): ?><h2 class="h2"><?php echo wp_kses($title, $allowed_tags); ?></h2><?php endif; ?>
          <?php if($descr): ?><p class="regular"><?php echo wp_kses($descr, $allowed_tags); ?></p><?php endif; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

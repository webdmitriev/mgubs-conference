<?php
/**
 * Conference - Block
 */

$block_path = 'block-09';
$gutenberg_title = 'Block - 09';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'   => array(),
  'p'    => array(),
  'span' => array(),
);

$gallery  = get_field('gallery');
$btn_text = get_field('btn_text');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-block-09">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="conference-gallery df-fs-fs w-100p">
        <?php if( $gallery ): foreach( $gallery as $img ): ?>
          <img src="<?= $img; ?>" alt="www" />
        <?php endforeach; endif; ?>
      </div>
      <?php if($btn_text): ?><button class="conference-btn conference-btn-silver icon-down-white"><?php echo wp_kses($btn_text, $allowed_tags); ?></button><?php endif; ?>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

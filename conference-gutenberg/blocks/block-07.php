<?php
/**
 * Conference - Block
 */

$block_path = 'block-07';
$gutenberg_title = 'Block - 07';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'   => array(),
  'p'    => array(),
  'span' => array(),
);

$image      = get_field('image');
$image_text = get_field('image_text');
$gallery    = get_field('gallery');
$descr      = get_field('descr');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-block-07 pos-r">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <?php if( $image ) : ?>
      <div class="conference-image">
				<img class="img" src="<?php echo esc_url($image); ?>" alt="www" />
				<div class="conference-image__descr"><?php echo wp_kses($image_text, $allowed_tags); ?></div>
			</div>
    <?php endif; ?>

    <div class="container">
      <div class="conference-content">
        <div class="conference-images df-fs-fs w-100p">
          <?php if( $gallery ): foreach( $gallery as $img ): ?>
            <img class="img" src="<?= $img; ?>" alt="www" />
          <?php endforeach; endif; ?>
        </div>
        <?php if($descr): ?><p class="regular"><?php echo wp_kses($descr, $allowed_tags); ?></p><?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

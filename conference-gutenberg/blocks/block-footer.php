<?php
/**
 * Conference - Block
 */

$block_path = 'block-footer';
$gutenberg_title = 'Block - footer';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'   => array(),
  'p'    => array(),
  'span' => array(),
);

$text_01 = get_field('text_01');
$text_02 = get_field('text_02');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-footer">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="conference-content">
        <?php if($text_01): ?><p class="sub-subtitle"><?php echo wp_kses($text_01, $allowed_tags); ?></p><?php endif; ?>
        <?php if($text_02): ?><p class="sub-subtitle"><?php echo wp_kses($text_02, $allowed_tags); ?></p><?php endif; ?>
      </div>
      <img class="img img-contain conference-logotype" src="<?php echo esc_url($url); ?>/assets/img/conference/footer/logotype.svg" alt="www" />
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

<?php
/**
 * Conference - Block
 */

$block_path = 'block-06';
$gutenberg_title = 'Block - 06';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'   => array(),
  'p'    => array(),
  'span' => array(),
);

$image_576  = get_field('image_576');
$image_768  = get_field('image_768');
$image_pc   = get_field('image_pc');
$title      = get_field('title');
$descr      = get_field('descr');
$btn_text   = get_field('btn_text');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-block-06 pos-r">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <?php if( $image_pc ): ?>
      <picture>
				<source srcset="<?php echo $image_576 ? esc_url($image_576) : $image_base64; ?>" type="image/jpeg" media="(max-width: 460px)" />
				<source srcset="<?php echo $image_768 ? esc_url($image_768) : $image_base64; ?>" type="image/jpeg" media="(max-width: 768px)" />
				<img class="img conference-img" src="<?php echo $image_pc ? esc_url($image_pc) : $image_base64; ?>" alt="www" />
			</picture>
    <?php endif; ?>

    <div class="container">
      <?php if($title): ?><h2 class="h2"><?php echo wp_kses($title, $allowed_tags); ?></h2><?php endif; ?>
      <?php if($descr): ?><p class="regular"><?php echo wp_kses($descr, $allowed_tags); ?></p><?php endif; ?>
      <?php if($btn_text): ?><a href="#conference-block-10-scroll" class="ancLinks conference-btn conference-btn-gold"><?php echo wp_kses($btn_text, $allowed_tags); ?></a><?php endif; ?>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

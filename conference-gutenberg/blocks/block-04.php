<?php
/**
 * Conference - Block
 */

$block_path = 'block-04';
$gutenberg_title = 'Block - 04';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'   => array(),
  'p'    => array(),
  'span' => array(),
);

$speakers = get_field('speakers');
$btn_text = get_field('btn_text');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-block-04">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <div class="container">
      <div class="conference-items df-fs-st w-100">
        <?php if( have_rows('speakers') ) : while ( have_rows('speakers') ) : the_row(); ?>
          <div class="conference-item">
            <?php if(get_sub_field('avatar')): ?>
              <img class="img conference-item__img" src="<?php echo esc_html(get_sub_field('avatar')); ?>" alt="www" />
            <?php else: ?>
              <img class="img conference-item__img" src="<?php echo $image_base64; ?>" alt="www" />
            <?php endif; ?>

            <h2 class="h2"><?php echo esc_html(get_sub_field('name')); ?></h2>
            <?php if(get_sub_field('descr')): ?><div class="subtitle"><?php echo esc_html(get_sub_field('descr')); ?></div><?php endif; ?>
          </div>
        <?php endwhile; endif; ?>
      </div>
      <?php if($btn_text): ?><button class="conference-btn conference-btn-silver icon-down-white"><?php echo wp_kses($btn_text, $allowed_tags); ?></button><?php endif; ?>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

<?php
/**
 * Conference - Block
 */

$block_path = 'block-05';
$gutenberg_title = 'Block - 05';

$url = get_template_directory_uri();
$image_base64 = 'data:image/gif;base64,R0lGODlhBwAFAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAUAAAIFjI+puwUAOw==';

$allowed_tags = array(
  'br'   => array(),
  'p'    => array(),
  'span' => array(),
);

$title  = get_field('title');
$params = get_field('params');
$image  = get_field('image');

?>

<!-- <?= $block_path; ?> (start) -->
<section class="conference-block-05">
  <?php if( is_admin() ) : ?>
    <style>[data="gutenberg-preview-img"] img {width: 100%;object-fit: contain;}</style>
    <div class="gutenber-block" style="padding: 10px 20px;background-color: #F5F5F5;border: 1px solid #D1D1D1;"><?= $gutenberg_title; ?></div>
    <div data="gutenberg-preview-img" style="position: relative;z-index:10;"><?php the_field('gutenberg_preview'); ?></div>
  <?php endif; ?>

  <?php if( !is_admin() ) : ?>
    <?php if( $image ) : ?>
      <img class="img conference-image" src="<?php echo esc_url($image); ?>" alt="www" />
    <?php endif; ?>

    <div class="container">
      <?php if($title): ?><h2 class="title conference-title"><?php echo wp_kses($title, $allowed_tags); ?></h2><?php endif; ?>
      <div class="df-sp-fs w-100p">
        <?php if( have_rows('params') ) : while ( have_rows('params') ) : the_row(); ?>
          <div class="conference-item">
            <div class="title conference-item__num"><?php echo esc_html(get_sub_field('num')); ?></div>
            <div class="h2 conference-item__title"><?php echo esc_html(get_sub_field('label')); ?></div>
            <div class="conference-item__descr"><?php echo esc_html(get_sub_field('value')); ?></div>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
<!-- <?= $block_path; ?> (end) -->

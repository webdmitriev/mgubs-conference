<?php

/**
 * Added css and js for template
 */
function conference_scripts() {
  if (!is_page_template('pages/template-conference.php')) {
    return;
  }

  // ===== CSS =====
  wp_enqueue_style('conference-style', get_template_directory_uri() . '/assets/css/conference-blocks.css', array(), '1.0.0');

  // ===== JS =====
  wp_enqueue_script('conference-script', get_template_directory_uri() . '/assets/js/conference.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'conference_scripts');

// Стили и скрипты только в редакторе Gutenberg
add_action('enqueue_block_editor_assets', function() {
  global $post;

  // Проверяем, что мы в редакторе и выбран шаблон: template-conference
  if ($post && get_page_template_slug($post->ID) === 'pages/template-conference.php') {
    // ===== CSS =====
    wp_enqueue_style(
      'conference-style-editor',
      get_template_directory_uri() . '/assets/css/conference-editor.css',
      array(),
      '1.0.0'
    );
  }
});


/**
 * Conference block categories
 */
add_filter('block_categories_all', function($categories, $post) {
  if ($post && get_page_template_slug($post->ID) === 'pages/template-conference.php') {
    $categories[] = array(
      'slug'  => 'block_conference',
      'title' => __('Блоки для страницы конференций', 'mgubs'),
      'icon'  => 'wordpress',
    );
  }
  return $categories;
}, 10, 2);

add_action('acf/init', function() {
  if (!function_exists('acf_register_block_type')) {
      return;
  }

  acf_register_block_type(array(
    'name'            => 'conf-block-01',
    'title'           => __('Block - 01'),
    'description'     => __('Конференция блок 01'),
    'render_template' => 'conference-gutenberg/blocks/block-01.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/gutenberg-blocks/images/block-01.jpg">'
        )
      )
    )
  ));
});

add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
  if (!empty($editor_context->post) && get_page_template_slug($editor_context->post->ID) === 'pages/template-conference.php') {
    return array(
      'acf/conf-block-01',
      'core/paragraph',
      'core/heading',
      'core/image'
    );
  }

  // для других страниц разрешаем все
  return $allowed_blocks;
}, 10, 2);

?>
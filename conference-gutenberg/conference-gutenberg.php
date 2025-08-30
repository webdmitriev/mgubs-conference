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

  // 01
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
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-01.jpg">'
        )
      )
    )
  ));

  // 02
  acf_register_block_type(array(
    'name'            => 'conf-block-02',
    'title'           => __('Block - 02'),
    'description'     => __('Конференция блок 02'),
    'render_template' => 'conference-gutenberg/blocks/block-02.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-02.jpg">'
        )
      )
    )
  ));

  // 03
  acf_register_block_type(array(
    'name'            => 'conf-block-03',
    'title'           => __('Block - 03'),
    'description'     => __('Конференция блок 03'),
    'render_template' => 'conference-gutenberg/blocks/block-03.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-03.jpg">'
        )
      )
    )
  ));

  // 04
  acf_register_block_type(array(
    'name'            => 'conf-block-04',
    'title'           => __('Block - 04'),
    'description'     => __('Конференция блок 04'),
    'render_template' => 'conference-gutenberg/blocks/block-04.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-04.jpg">'
        )
      )
    )
  ));

  // 05
  acf_register_block_type(array(
    'name'            => 'conf-block-05',
    'title'           => __('Block - 05'),
    'description'     => __('Конференция блок 05'),
    'render_template' => 'conference-gutenberg/blocks/block-05.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-05.jpg">'
        )
      )
    )
  ));

  // 06
  acf_register_block_type(array(
    'name'            => 'conf-block-06',
    'title'           => __('Block - 06'),
    'description'     => __('Конференция блок 06'),
    'render_template' => 'conference-gutenberg/blocks/block-06.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-06.jpg">'
        )
      )
    )
  ));

  // 07
  acf_register_block_type(array(
    'name'            => 'conf-block-07',
    'title'           => __('Block - 07'),
    'description'     => __('Конференция блок 07'),
    'render_template' => 'conference-gutenberg/blocks/block-07.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-07.jpg">'
        )
      )
    )
  ));

  // 08
  acf_register_block_type(array(
    'name'            => 'conf-block-08',
    'title'           => __('Block - 08'),
    'description'     => __('Конференция блок 08'),
    'render_template' => 'conference-gutenberg/blocks/block-08.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-08.jpg">'
        )
      )
    )
  ));

  // 09
  acf_register_block_type(array(
    'name'            => 'conf-block-09',
    'title'           => __('Block - 09'),
    'description'     => __('Конференция блок 09'),
    'render_template' => 'conference-gutenberg/blocks/block-09.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-09.jpg">'
        )
      )
    )
  ));

  // 10
  acf_register_block_type(array(
    'name'            => 'conf-block-10',
    'title'           => __('Block - 10'),
    'description'     => __('Конференция блок 10'),
    'render_template' => 'conference-gutenberg/blocks/block-10.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-10.jpg">'
        )
      )
    )
  ));

  // Footer
  acf_register_block_type(array(
    'name'            => 'conf-block-footer',
    'title'           => __('Block - footer'),
    'description'     => __('Конференция блок footer'),
    'render_template' => 'conference-gutenberg/blocks/block-footer.php',
    'category'        => 'block_conference',
    'icon'            => 'wordpress',
    'keywords'        => array('conf', 'conference'),
    'mode'            => 'preview',
    'example' => array(
      'attributes' => array(
        'mode' => 'preview',
        'data' => array(
          'gutenberg_preview' => '<img src="' . get_template_directory_uri() . '/conference-gutenberg/images/block-11.jpg">'
        )
      )
    )
  ));

});

add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
  if (!empty($editor_context->post) && get_page_template_slug($editor_context->post->ID) === 'pages/template-conference.php') {
    return array(
      'acf/conf-block-01',
      'acf/conf-block-02',
      'acf/conf-block-03',
      'acf/conf-block-04',
      'acf/conf-block-05',
      'acf/conf-block-06',
      'acf/conf-block-07',
      'acf/conf-block-08',
      'acf/conf-block-09',
      'acf/conf-block-10',
      'acf/conf-block-footer',
      'core/paragraph',
      'core/heading',
      'core/image'
    );
  }

  // для других страниц разрешаем все
  return $allowed_blocks;
}, 10, 2);

?>
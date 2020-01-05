<?php function register_acf_block_types() {

// register a testimonial block.


acf_register_block_type(array(
    'name'              => 'hero_section',
    'title'             => __('Hero Section'),
    'render_template'   => 'blocks/hero-section.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'hero', 'images', 'carousel' ),
));

acf_register_block_type(array(
    'name'              => 'page_hero',
    'title'             => __('Page Hero'),
    'render_template'   => 'blocks/page-hero.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'hero', 'images', 'carousel' ),
));

acf_register_block_type(array(
    'name'              => 'title_and_content',
    'title'             => __('Title and Content'),
    'render_template'   => 'blocks/title-and-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'images', 'text' ),
));

acf_register_block_type(array(
    'name'              => 'three_column_content',
    'title'             => __('Three Column Content'),
    'render_template'   => 'blocks/three-column-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'images', 'text' ),
));

acf_register_block_type(array(
    'name'              => 'recent_projects',
    'title'             => __('Recent Projects'),
    'render_template'   => 'blocks/recent-projects.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'posts', 'text', 'projects' ),
));

acf_register_block_type(array(
    'name'              => 'client_logos',
    'title'             => __('Client Logos'),
    'render_template'   => 'blocks/client-logos.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'posts', 'images', 'projects' ),
));

acf_register_block_type(array(
    'name'              => 'stats',
    'title'             => __('Stats'),
    'render_template'   => 'blocks/stats.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'posts', 'numbers', 'stats' ),
));
acf_register_block_type(array(
    'name'              => 'extended_footer',
    'title'             => __('Extended Footer'),
    'render_template'   => 'blocks/extended-footer.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'footer'),
));

acf_register_block_type(array(
    'name'              => 'two_column_content',
    'title'             => __('Two Column Content'),
    'render_template'   => 'blocks/two-column-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content'),
));

acf_register_block_type(array(
    'name'              => 'services',
    'title'             => __('Services'),
    'render_template'   => 'blocks/services.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content'),
));

acf_register_block_type(array(
    'name'              => 'image-side-content',
    'title'             => __('Image with Side Content'),
    'render_template'   => 'blocks/image-side-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content'),
));

acf_register_block_type(array(
    'name'              => 'one_column_content',
    'title'             => __('One Column Content'),
    'render_template'   => 'blocks/one-column-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content'),
));

acf_register_block_type(array(
    'name'              => 'launch_graph',
    'title'             => __('Launch Graph'),
    'render_template'   => 'blocks/launch-graph.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content'),
));

acf_register_block_type(array(
    'name'              => 'three_column_text_content',
    'title'             => __('Three Column Text Content'),
    'render_template'   => 'blocks/three-column-text-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'three'),
));

acf_register_block_type(array(
    'name'              => 'single_recent_post',
    'title'             => __('Single Recent Post'),
    'render_template'   => 'blocks/single-recent-post.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text'),
));

acf_register_block_type(array(
    'name'              => 'flexible_content',
    'title'             => __('Flexible Content'),
    'render_template'   => 'blocks/flexible-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text'),
));

acf_register_block_type(array(
    'name'              => 'quote',
    'title'             => __('Quote'),
    'render_template'   => 'blocks/quote.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'project'),
));

acf_register_block_type(array(
    'name'              => 'contact',
    'title'             => __('Contact'),
    'render_template'   => 'blocks/contact.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'project'),
));

acf_register_block_type(array(
    'name'              => 'top-post-content',
    'title'             => __('Top Post Content'),
    'render_template'   => 'blocks/top-post-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'project', 'post'),
));

acf_register_block_type(array(
    'name'              => 'image-and-content',
    'title'             => __('Image and Content'),
    'render_template'   => 'blocks/image-and-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'project', 'post', 'image'),
));

acf_register_block_type(array(
    'name'              => 'credits',
    'title'             => __('Credits'),
    'render_template'   => 'blocks/credits.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'project', 'post', 'credits'),
));

acf_register_block_type(array(
    'name'              => 'related-content',
    'title'             => __('Related Content'),
    'render_template'   => 'blocks/related-content.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'project', 'post', 'credits'),
));

acf_register_block_type(array(
    'name'              => 'awards',
    'title'             => __('Awards'),
    'render_template'   => 'blocks/awards.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'award'),
));

acf_register_block_type(array(
    'name'              => 'all-projects',
    'title'             => __('All Projects'),
    'render_template'   => 'blocks/all-projects.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'project'),
));

acf_register_block_type(array(
    'name'              => 'team',
    'title'             => __('Team'),
    'render_template'   => 'blocks/team.php',
    'category'          => 'formatting',
    'icon'              => 'admin-comments',
    'keywords'          => array( 'content', 'text', 'team', 'people'),
));


}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
add_action('acf/init', 'register_acf_block_types');
} ?>
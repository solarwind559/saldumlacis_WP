<?php

function saldumlacis_theme_support(){
  add_theme_support('title-tag');

  add_theme_support(
    'custom-logo',
    array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    )
  );
}

add_action('after_setup_theme', 'saldumlacis_theme_support');


// add_action('after_setup_theme', 'saldumlacis_theme_support');

// add_action( 'after_setup_theme', 'saldumlacis_setup' );

add_image_size('saldumlacis-logo', 159, 96);

// add_theme_support('custom-logo', array(
//   'size' => 'saldumlacis-logo',
// ));


// add_image_size('saldumlacis-heart-logo', 159, 96);

// add_theme_support('custom-logo', array(
//   'size' => 'saldumlacis-heart-logo',
// ));

function saldumlacis_custom_logo(){
  if (function_exists('the_custom_logo')){
    the_custom_logo();
  }
}

//REGISTER SIDEBARS
// function my_sidebars(){
//   register_sidebar(array(
//     'name'          => 'Page Sidebar',
//     'id'            => 'page-sidebar',
//     'before_title'  => '<h3 class="text">',
//     'after_title'   => '<h3>',
//     'before_widget' => '<div class="dropdwn-content">',
//     'after_widget'  => '</div>',
//   ));


//   register_sidebar(array(
//     'name'          => 'Footer Widget',
//     'id'            => 'footer-widget',
//     'before_widget' => '<div class="footer-info">',
//     'after_widget'  => '</div>',
//     'before_title'  => '<h3 class="logos">',
//     'after_title'   => '<h3>',
//   ));
// }

// add_action( 'widgets_init', 'my_sidebars' );

function saldumlacis_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'saldumlacis' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'saldumlacis' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Socials', 'saldumlacis' ),
			'id'            => 'socials',
			'description'   => esc_html__( 'Add widgets here.', 'saldumlacis' ),
			'before_widget' => '<div class="follow">',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright', 'saldumlacis' ),
			'id'            => 'copyright',
			'description'   => esc_html__( 'Add widgets here.', 'saldumlacis' ),
			'before_widget' => '<div class="copyright">',
			'after_widget'  => '</div>',
		)
	);
  
	register_sidebar(
		array(
			'name'          => esc_html__( 'Contacts', 'saldumlacis' ),
			'id'            => 'contacts',
			'description'   => esc_html__( 'Add widgets here.', 'saldumlacis' ),
			'before_widget' => '<div class="contacts">',
			'after_widget'  => '</div>',
		)
	);
}
add_action( 'widgets_init', 'saldumlacis_widgets_init' );


define( 'TD', 'pandago-child' );

function saldumlacis_project_scripts_include() {
  wp_enqueue_style( 'child-style', '/assets/css/style.css' );
	wp_enqueue_style( 'index-css', get_stylesheet_directory_uri() . '/resources/css/mainpage.css' );
}

add_action( 'wp_enqueue_scripts', 'saldumlacis_project_scripts_include' );


function register_theme_nav() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Header Navigation', TD ),
      'mobile-nav' => __( 'Mobile Navigation', TD ),
    )
  );
}

add_action( 'init', 'register_theme_nav' );

?>


<?php

if (function_exists('acf_register_block_type')){
  add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types(){

  acf_register_block_type(
    array(
      'name' => 'front_image',
      'title' => __('Galvenais attēls'),
      'description' => 'add a description',
      'render_template' => 'template-parts/blocks/front-image.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('intro, saldumlācis')
    )
  );

  acf_register_block_type(
    array(
      'name' => 'children_activities',
      'title' => __('Aktivitātes bērniem'),
      'description' => 'add a description',
      'render_template' => 'template-parts/blocks/activities.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('activity, bērniem')
    )
  );

  acf_register_block_type(
    array(
      'name' => 'stories_poems',
      'title' => __('Pasakas un dzejoļi'),
      'description' => 'add a description',
      'render_template' => 'template-parts/blocks/stories.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('stories, pasakas, dzejoļi')
    )
  );

  acf_register_block_type(
    array(
      'name' => 'where_to_buy',
      'title' => __('Kur iegādāties'),
      'description' => 'add a description',
      'render_template' => 'template-parts/blocks/wheretobuy.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('buy, pirkt')
    )
  );

  acf_register_block_type(
    array(
      'name' => 'author',
      'title' => __('Grāmatas autore'),
      'description' => 'add a description',
      'render_template' => 'template-parts/blocks/author.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('author, autore, autors')
    )
  );
}


function add_this_script_footer(){ ?>

<script>
const x = document.getElementById("switch-to");
const lines = document.getElementById("switch-from");
const topnav = document.getElementById("navigation");


function myFunction() {
  var toggleBtn = document.getElementById("open");
  if (toggleBtn.style.display === "block") {
    toggleBtn.style.display = "none";
    lines.style.display = "block";
    x.style.display = "none";
    topnav.style.backgroundColor = "transparent";


  } else {
    toggleBtn.style.display = "block";
    lines.style.display = "none";
    x.style.display = "block";
    topnav.style.backgroundColor = "white";
  }
}
</script>

<?php } 

add_action('wp_footer', 'add_this_script_footer'); ?>
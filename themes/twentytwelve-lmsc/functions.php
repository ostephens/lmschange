<?php 
function pages_cat_tag() {  
	register_taxonomy_for_object_type('post_tag', 'page');
	register_taxonomy_for_object_type('category', 'page');
}
add_action( 'admin_init', 'pages_cat_tag' );
?>
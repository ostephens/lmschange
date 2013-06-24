<?php 
function pages_cat_tag() {  
	register_taxonomy_for_object_type('post_tag', 'page');
	register_taxonomy_for_object_type('category', 'page');
}
add_action( 'admin_init', 'pages_cat_tag' );

////////////////////////////////////////////////////
// Add colorcoding.css to the wp_head() function //
//////////////////////////////////////////////////

function extra_styles()  
{ 
  wp_register_style( 'colorcoding', get_template_directory_uri() . '/css/colorcoding.css');
  wp_enqueue_style( 'colorcoding' );
}
add_action('wp_enqueue_scripts', 'extra_styles', 20);

////////////////////////////////////////////////////
// Add custom meta dropdown for the colour coding //
////////////////////////////////////////////////////

add_action( 'add_meta_boxes', 'colour_metabox_add' );  
function colour_metabox_add()  
{  
    add_meta_box( 'colour_metabox', 'Colour Coding', 'colour_metabox_cb', 'page', 'normal', 'high' );  
}  	
	    
function colour_metabox_cb( $post )
{
// $post is already set, and contains an object: the WordPress post
global $post;

$values = get_post_custom( $post->ID );
$selected = isset( $values['color_select'] ) ? esc_attr( $values['color_select'][0] ) : ”;
      
    // We'll use this nonce field later on when saving.  
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' ); 
    

	?> 
   
	<p>
		<label for="color_select">Colour</label>
		<select name="color_select" id="color_select">
			<option value="" <?php selected( $selected, '' ); ?>>None</option>
			<option value="red" <?php selected( $selected, 'red' ); ?>>Red</option>
			<option value="yellow" <?php selected( $selected, 'yellow' ); ?>>Yellow</option>
			<option value="green" <?php selected( $selected, 'green' ); ?>>Green</option>
			<option value="blue" <?php selected( $selected, 'blue' ); ?>>Blue</option>
			<option value="pink" <?php selected( $selected, 'pink' ); ?>>Pink</option>
			<option value="brown" <?php selected( $selected, 'brown' ); ?>>Brown</option>
			<option value="orange" <?php selected( $selected, 'orange' ); ?>>Orange - Chance</option>
			<option value="cyan" <?php selected( $selected, 'cyan' ); ?>>Blue - Community Chest</option>
		</select>
	</p>
     
       <?php      
}    
add_action( 'save_post', 'colour_metabox_save' );  
function colour_metabox_save( $post_id )  
{  
    // Bail if we're doing an auto save  
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return; 
     
    // if our nonce isn't there, or we can't verify it, bail 
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return; 
     
    // if our current user can't edit this post, bail  
    if( !current_user_can( 'edit_post' ) ) return;  
      
    if( isset( $_POST['color_select'] ) )  
        update_post_meta( $post_id, 'color_select', esc_attr( $_POST['color_select'] ) );  
}
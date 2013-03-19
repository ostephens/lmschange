<?php
/*
Template Name: Criteria
*/
?>
<?php get_header(); ?>

	<div class="content">
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<small class="post-meta"><?php edit_post_link( __( 'Edit this', 'cleanhome' ), '<b>Modify:</b> ', '' ); ?></small>
			<?php the_content( 'Read the rest of this entry &raquo;' ); ?>
			
			<?php /* LMS Stuff starts here */ ?>
								<div class="criteria">
									<?php
			/* Get and display all criteria headings and descriptions */	
										$criteria = array('context','drivers','open-licensing','terms','models','identifiers','relationships','reuse','clear-apis','data-formats','sustainable','supported','use-apis','measure','lessons-learned','future');
										$terms = get_terms('sections', array('hide_empty' => '0'));
										if (count($terms)) {
											echo "<dl>";
										}
										foreach ($terms as $term) {
											if (in_array($term->slug,$criteria)) { 
												echo "<dt class=\"term-heading\" id=\"".$term->slug."\">";
												echo "<a href=\"/lmschange/archives/sections/".$term->slug."\">".$term->name."</a>";
												echo "</dt>";
												echo "<dd class=\"term-description\">";
												echo $term->description;
												echo "</dd>";
											}
										}
										if (count($terms)) {
											echo "</dl>";
										}
			/* Finish get and display all criteria headings and descriptions */							
									?>
									</div>
			<?php /* DCS Stuff ends here */ ?>
			
			<?php wp_link_pages( array( 'before' => '<p>Page: ', 'after' => '</p>', 'next_or_number' => 'number' ) ); ?>
			<hr/>
		</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link( __( '&laquo; Older Entries', 'cleanhome' ) ); ?></div>
			<div class="alignright"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'cleanhome' ) ); ?></div>
		</div>

		<?php comments_template(); ?>

	<?php else : ?>

		<h2 class="center"><?php _e( 'Not found', 'cleanhome' ); ?></h2>
		<p class="center"><?php _e( "Sorry, but you are looking for something that isn't here.", 'cleanhome' ); ?></p>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

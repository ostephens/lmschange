<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/homepage.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/javascript/modernizr.custom.72687.js"></script>
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<ul id="gameboard">
					<li class="square topSquare colOne red">
						<a href="/" title="Landscape Library Technology"> 
							<span>Landscape Library Technology<br>&rarr;</span>
						</a>
					</li>
					<li class="square topSquare colTwo yellow">
						<a href="/" title="Ecosystem Checklist"> 
							<span>Ecosystem Checklist <br>&rarr;</span>
						</a>
					</li>
					<li class="square topSquare colThree red">
						<a href="/" title="Landscape Library System"> 
							<span>Landscape Library System<br>&rarr;</span>
						</a>
					</li>
					<li class="square leftSquare rowOne yellow">
						<a href="/" title="LMS Checklist">
							<span>LMS Checklist<br>&rarr;</span>
						</a>
					</li>
					<li class="square leftSquare rowTwo green">
						<a href="/" title="JISC Projects">
							<span>JISC Projects<br>&rarr;</span>
						</a>
					</li>
					<li class="square leftSquare rowThree pink">
						<a href="/" title="Landscape Higher Education">
							<span>Landscape Higher Education<br>&rarr;</span>
						</a>
					</li>
					<li class="square rightSquare rowOne green">
						<a href="/" title="Methods Tool Box">
							<span>Methods Tool Box<br>&rarr;</span>
						</a>
					</li>
					<li class="square rightSquare rowTwo green">
						<a href="/" title="Case Studies">
							<span>Case Studies<br>&rarr;</span>
						</a>
					</li>
					<li class="square rightSquare rowThree pink">
						<a href="/" title="Landscape Users">
							<span>Landscape Users<br>&rarr;</span>
						</a>
					</li>
					<li class="square bottomSquare colOne blue">
						<a href="/" title="Take the Change Challenge">
							<span>Take the Change Challenge<br>&rarr;</span>
						</a>
					</li>
					<li class="square bottomSquare colTwo pink">
						<a href="/" title="Landscape Big Picture">
							<span>Landscape Big Picture<br>&rarr;</span>
						</a>
					</li>
					<li class="square bottomSquare colThree brown">
						<a href="/" title="Site Map">
							<span>Site Map<br>&rarr;</span>
						</a>
					</li>
					<li class="hotSpot" id="commSquare">
						<a href="/" title="Community Services">
							<span>Community Services<br>&rarr;</span>
						</a>
					</li>
					<li class="hotSpot" id="logoSquare">
						<a href="/" title="About LMS Change">
							<span>About LMS Change<br>&rarr;</span>
						</a>
					</li>
					<li class="hotSpot" id="factSquare">
						<a href="/" title="External Factors">
							<span>External Factors<br>&rarr;</span>
						</a>
					</li>
				</ul>
				
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>
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
<div id="primary" class="site-content">
		<div id="content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
				<ul id="gameboard">
						<li class="square topSquare colOne red"> <a href="http://lmsguidance.jiscinvolve.org/wp/the-library-service-platform-context/landscape-library-technology/" title="Landscape Library Technology"> <span>Landscape Library Technology &rarr;</span> </a> </li>
						<li class="square topSquare colTwo yellow"> <a href="http://lmsguidance.jiscinvolve.org/wp/checklists/global-ecosystem-checklist/" title="Ecosystem Checklist"> <span>Ecosystem Checklist <br>
								&rarr;</span> </a> </li>
						<li class="square topSquare colThree red"> <a href="http://lmsguidance.jiscinvolve.org/wp/the-library-service-platform-context/landscape-library-systems/" title="Landscape Library System"> <span>Landscape Library System &rarr;</span> </a> </li>
						<li class="square leftSquare rowOne yellow"> <a href="http://lmsguidance.jiscinvolve.org/wp/checklists/library-service-checklist/" title="LMS Checklist"> <span>LMS Checklist<br>
								&rarr;</span> </a> </li>
						<li class="square leftSquare rowTwo green"> <a href="/" title="JISC Projects"> <span>JISC Projects<br>
								&rarr;</span> </a> </li>
						<li class="square leftSquare rowThree pink"> <a href="http://lmsguidance.jiscinvolve.org/wp/the-library-service-platform-context/landscape-higher-education/" title="Landscape Higher Education"> <span>Landscape Higher Education &rarr;</span> </a> </li>
						<li class="square rightSquare rowOne green"> <a href="http://lmsguidance.jiscinvolve.org/wp/methods-toolbox/" title="Methods Tool Box"> <span>Methods Tool Box<br>
								&rarr;</span> </a> </li>
						<li class="square rightSquare rowTwo green"> <a href="http://lmsguidance.jiscinvolve.org/wp/case-studies/" title="Case Studies"> <span>Case Studies<br>
								&rarr;</span> </a> </li>
						<li class="square rightSquare rowThree pink"> <a href="http://lmsguidance.jiscinvolve.org/wp/the-library-service-platform-context/landscape-user-experience-behaviour/" title="Landscape Users"> <span>Landscape Users<br>
								&rarr;</span> </a> </li>
						<li class="square bottomSquare colOne blue"> <a href="http://lmsguidance.jiscinvolve.org/wp/change-challenge/" title="Take the Change Challenge"> <span>Take the Change Challenge &rarr;</span> </a> </li>
						<li class="square bottomSquare colTwo pink"> <a href="http://lmsguidance.jiscinvolve.org/wp/the-library-service-platform-context/landscape-the-big-picture/" title="Landscape Big Picture"> <span>Landscape Big Picture<br>
								&rarr;</span> </a> </li>
						<li class="square bottomSquare colThree brown"> <a href="http://lmsguidance.jiscinvolve.org/wp/sitemap/" title="Site Map"> <span>Site Map<br>
								&rarr;</span> </a> </li>
						<li class="hotSpot commSquare" id="commSquare"> <a href="http://lmsguidance.jiscinvolve.org/wp/shared-services/" title="Shared Services "> <span>Shared Services<br>
								&rarr;</span> </a> </li>
						<li class="hotSpot logoSquare" id="logoSquare"> <a href="http://lmsguidance.jiscinvolve.org/wp/about-lms-change/" title="About LMS Change"> <span>About LMS Change<br>
								&rarr;</span> </a> </li>
						<li class="hotSpot factSquare" id="factSquare"> <a href="http://lmsguidance.jiscinvolve.org/wp/strategic-direction/" title="Strategic Direction"> <span>Strategic Direction<br>
								&rarr;</span> </a> </li>
				</ul>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
		</div>
		<!-- #content --> 
</div>
<!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>

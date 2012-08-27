<?php
/**
 * Template Name: Search Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<article>
					<header>
						<h1>Search</h1>
					</header>
				<?php get_search_form(); ?>
				<br /><br />


				</article>
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
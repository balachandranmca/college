<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<header>
	<div class="bannerbox" style="">
		<div class="banner">
		</div>
	</div>
</header>
<?php
	while ( have_posts() ) : the_post();
		// Include the page content template.
		get_template_part( 'content' );
	endwhile;
get_footer();

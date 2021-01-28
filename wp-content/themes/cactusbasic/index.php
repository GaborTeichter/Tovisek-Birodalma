<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CactusBasic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 
?>

<div class="main">
	
	<?php 
        if (have_posts()):
            while (have_posts()) : the_post(); ?>

            <?php wp_list_pages(); ?>
            <h2><?php the_title(); ?></h2>
			<?php the_content();
			
            endwhile;
		endif; ?>

</div>

<?php
generate_construct_sidebars();

get_footer();
?>
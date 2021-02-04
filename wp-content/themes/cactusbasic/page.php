<?php
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
    get_footer();
?>
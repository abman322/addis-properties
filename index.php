<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>



<section class="post-area row px-4">
<?php

$posts = get_posts(array(
    'numberposts' => 4,
    'post_type' => 'property'
));

if($posts):

    foreach($posts as $post): ?>
		<article class=" col-md-4 col-sm-6 " <?php post_class() ?> id="post-<?php $post->ID ?>">
			<img class="img-responsive" src=" <?php echo get_field('image') ?>" />	
			<h3 class="text-center"><a href="<?php the_permalink() ?>"> <?php the_title() ?></a></h3>

			<?php the_excerpt() ?>
			<h4 class="text-center"> PRICE: <?php echo get_field('price') ?></h4>
		</article>
       
    
<?php 
	endforeach;
else:
	get_template_part( 'template-parts/content', 'none' );
endif;
?>
</section>


		

	

<?php

get_footer();

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="container-fluid">
	<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
		<div id="main" class=" row" role="main">
	
		<?php 
		
			if( have_posts()): the_post() ?>
				<div class="col-lg-7">
					<img src="<?php the_field('image') ?>"  alt="" width="100%">
				</div>
				<div class="container col-lg-5">
					<p> <?php the_content() ?></p>
					<div class=" info-card text-white">
					<!-- Fact -->
						<div class="  bg-secondary mr-2 p-2">
							<p><span ><i class="fa fa-check-circle mr-1" aria-hidden="true"></i></span>FACT SHEET </p>
							<p> <?php the_field('facts') ?></p>
						</div>
					<!-- Payment plan -->
					
						<div class=" payment-plan-card p-2"">
						
							<p><span ><i class="fa fa-credit-card mr-1" aria-hidden="true"></i></span> PAYMENT PLAN </p>
							<p> <?php the_field('payment_plan') ?></p>
						</div>
					</div>
				</div>


		<?php
			endif
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();

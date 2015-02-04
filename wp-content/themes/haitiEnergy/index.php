<?php get_header(); ?>

<?php 
		
		$args = array(
			'name' => 'home',
			'post_type' => 'page',
			'post_status' => 'published',
			'numberposts' => 1
			);

		$home_page = get_posts($args)[0];

		if ($home_page) {
			// echo $home_page -> post_title;
			$image = wp_get_attachment_image($home_page -> banner_image, 'full');
		}
	 ?>

<section class="banner">
	<div class="banner_img">
		<?php echo $image ?>
	</div>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<p><?php bloginfo('description'); ?></p>
	</header>
</section>
<div>
	<h2>
		<?php echo $home_page -> introduction_title ?>
	</h2>
</div>
<div>
	<h3>
		<?php echo $home_page -> introduction_HSE_title ?>
	</h3>
	<?php echo $home_page -> introduction_HSE_body ?>
</div>
<div>
	<h3>
		<?php echo $home_page -> country_background_title ?>
	</h3>
	<?php echo $home_page -> country_background_body ?>
</div>
<div>
	<h3>
		<?php echo $home_page -> energy_access_title ?>
	</h3>
	<?php echo $home_page -> energy_access_body ?>
</div>
<div>
	<h3>
		<?php echo $home_page -> south_department_title ?>
	</h3>
	<?php echo $home_page -> south_department_body ?>
</div>

	
	

	 
	
	<?php 
	if ( have_posts()) :
		while ( have_posts()) :
			the_post();?>

			<h1><?php the_title(); ?></h1>

		<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
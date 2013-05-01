<?php get_header(); ?>
	<?php if ( is_home() || is_front_page() ) { ?>
		<div id="landing"><h1>Welcome to the Cake Cuppery Bakery</h1></div>		 <p>
		 <div class="trans">
			<?php while ( have_posts() ) : the_post() ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		  </div>
		 </p>
		 <p id="blog-description"><?php //bloginfo( 'description' ) ?></p>
		 <a href="<?php echo(site_url() + "index.php/contact"); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/order-now.png" width="237px" height="37px" alt="Order Now" title="Order Now" /></a>
	<div id="ribbon">
		<p>Have a look at our yummy stuff!</p>
	</div> 
	<?php } else { ?>
		<div id="widget-area">
			<h2>Testimonial</h2>
			<p>
			Excellent supremely crafted cupcakes went down a treat at the wedding
			<em>--Siobhan</em>
			</p>
		</div>
		<div><h1><?php the_ID(); ?><?php the_title();?></h1></div>
         <p id="blog-description">
			<?php while ( have_posts() ) : the_post() ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		 </p>
	<?php } ?>
<?php get_footer(); ?>
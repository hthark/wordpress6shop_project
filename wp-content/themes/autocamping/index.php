<?php get_header(); ?>

<div class="container">
	<div class="container-box">
		<div class="main-content">
		<?php
			if(have_posts()){
				while(have_posts()) :the_post();
					?><h5>
					<?php
					_e("Category:", 'autocamping');
					the_category('$gt;', 'multiple');
					?></h5>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
					<?php the_post_thumbnail('small-thumbnail'); ?>
					<a></h3>
					<?php //the_content(); ?>
					<?php //the_excerpt(); ?>
					<?php echo get_the_excerpt(); ?>
					<?php //the_excerpt('View page...'); ?>
					<a href="<?php the_permalink(); ?>">View page</a>
					<hr><?php
				endwhile;
			}
		?>
		</div>
		<div class="sidebar">
		<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
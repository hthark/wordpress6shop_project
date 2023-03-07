<?php get_header();?>
<img style="width:100%" height="500" src="<?php bloginfo('template_url');?>
/img/WhangSanCamp03.jpg">

<div class="container">
	<div class="container-box">
		<div class="main-content">
			Container
		</div>
		<div class="sidebar">
			Main Container
		</div>
	</div>
</div>
<div class="container">
	<div class="container-box">
		<div class="main-content">
			<div>CALANDAR</div>
			<?php dynamic_sidebar('bottom-sidebar-a'); ?>
		</div>
		<div class="main-content">
			<div>RECENT POSTS</div>
			<?php dynamic_sidebar('bottom-sidebar-b'); ?>
		</div>
		<div class="main-content">
			<div>CONTACTS</div>
			<?php dynamic_sidebar('bottom-sidebar-c'); ?>
		</div>
	</div>
</div>

<?php //dynamic_sidebar('bottom-sidebar'); ?>
<?php get_footer(); ?>
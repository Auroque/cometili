<?php get_header('home'); ?>
<?php 
$sections = new WP_Query(
	array(
		'post_type' => 'slider',
		'ignore_sticky_posts' => true,
		'showposts' => -1,
		'orderby' => 'title',
		'order' => 'ASC'
		)
);
?>
<div class="slider">
    <ul class="slides">
    <?php if ($sections->have_posts()): ?>
		<?php while ($sections->have_posts()) : $sections->the_post(); ?>
	      <li>
	        <img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:650px;">
	        <div class="caption center-align">
	          <h3><?php the_title(); ?></h3>
	          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
	        </div>
	      </li>
		<?php endwhile; ?>
		<?php endif; ?>
	<?php wp_reset_query(); ?>
    </ul>
  </div>
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img class="projeto" src="<?php bloginfo('template_directory'); ?>/img/projeto.jpg">				
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>
	<div class="section slider">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
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
					<div class="slider-area">
						<div class="owl-carousel owl-theme">
								<?php if ($sections->have_posts()): ?>
									<?php while ($sections->have_posts()) : $sections->the_post(); ?>
									<div class="item">
										<img title="image title" alt="thumb image" class="wp-post-image" 
	             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
									</div>
									<?php endwhile; ?>
								<?php endif; ?>
							<?php wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
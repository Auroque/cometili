<?php get_header(); ?>
		<div class="section portifolio">
		<div class="container wow fadeInDown">
			<div class="row">
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
									<?php the_post_thumbnail(); ?>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
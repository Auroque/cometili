<?php get_header(); ?>
	<script type="text/javascript">
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay: true,
    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});
	</script>
		<div class="section slider">
		<div class="container">
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
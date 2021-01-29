<!-- POST PAGE -->
<?php get_header(); ?>

<section class="center-main">		
	<section class="main">
		<div class="slider">
			<div id='particles-js'></div>	
			<div class="selected">
				<div class="title">
					<span>Victor Rivas</span>
					<br>
					<span> I'm a Web Developer </span>
				</div>				
			</div>
		</div>
	</section>
</section>

<section class="center-articles">
	<section class="articles">
		<?php query_posts( ['posts_per_page' => 6, 
							'paged'          => (get_query_var('paged')) ? get_query_var('paged') : 1
						]);?>
		<?php if( have_posts()):?>
			<?php while( have_posts()): the_post();?>
				<?php get_template_part('content', get_post_format()); ?>				
			<?php endwhile;?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
	</section>
</section>	

<?php get_footer(); ?>
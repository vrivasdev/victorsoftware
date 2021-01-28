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
				<article class="article">
					<figure> 
						<?php if( has_post_thumbnail() ): 
								 $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); 
							   endif;
						?>

						<img class="img-article" src=<?php echo $urlImg;?> alt="Macbook Pro" />						
						<figcaption class="article-title">
							<?php the_title( sprintf('<a href="%s">', esc_url(get_permalink() ) ), '</a>');?>
						</figcaption>
						<hr>
						<figcaption class="description">
							<span class="autor"><?php the_category(' ');?></span>
							<span class="date"><?php the_time('F j, Y');?></span>
						<figcaption>
					</figure>					
				</article>
			<?php endwhile;?>
		<?php endif;?>
		<?php wp_reset_query(); ?>
	</section>
</section>	

<?php get_footer(); ?>
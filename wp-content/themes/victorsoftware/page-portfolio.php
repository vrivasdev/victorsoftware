<?php get_header(); ?>

<?php

$articles = new WP_Query([
    'post_type'     => 'portfolio', 
	'post_per_page' => 3
]);

?>

<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="row text-center">
            <?php if( $articles->have_posts()): $i = 0;?>
                <?php while( $articles->have_posts()): $articles->the_post();?>
                    <?php 
                        /* It prints the number of columns depending of each post numbers */
                        if ($i >= 0 && $i < 2): $column = 6; $class = ' second-row-padding';
                        elseif ($i >= 2): $column = 4; $class = ' third-row-padding';
                        endif;
                    ?>
                    <!-- It's printed for each conditional above -->
                    <div class="col-xs-<?php echo $column;?> col-sm-<?php echo $column;?> <?php echo $class;?>">
                        <?php if( has_post_thumbnail() ): 
                                $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); 
                            endif;?>								
                        <div class="blog-element" style="background-image: url(<?php echo $urlImg;?>);">								

                            <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink() ) ), '</a></h1>');?>                            
                        </div>	

                    </div>

                <?php $i++; endwhile;?>
                
                <div class="col-xs-6 text-left">
                    <?php next_posts_link('<< Older Posts'); ?>
                </div>
                <div class="col-xs-6 text-right">
                    <?php previous_posts_link('Newer Posts >>'); ?>
                </div>
            <?php endif;?>

            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
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
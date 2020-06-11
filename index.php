<?php get_header(); ?>

        <section class="dog-image"></section>

        <section>


        <?php if (have_posts() ): ?>
           <h2 class="sub-title">Latest</h2>

            <ul class="articles">

                <?php while( have_posts() ): the_post(); ?>
                    <li class="article">
                        
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
    
                        <?php else: ?>
                            <img src="https://placehold.jp/150x150.png" alt="">
                        <?php endif; ?>
                            <p><?php the_excerpt();?></p>

                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                    </li>
                <?php endwhile; ?>

            </ul>

            <?php else: ?>
        <h2>最近の投稿はありません</h2>
        <?php endif; ?>
        
        </section>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
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

  <aside>
        <h2>Contact</h2>
        <form> 

            <div class="form">
            <div class="form-left">
                <input class="name" type="text " placeholder="お名前">
                <input class="email" type="text" placeholder="メールアドレス">
            </div>
            
                <div class="form-right" >
                    <textarea class="textarea" placeholder="お問い合わせ内容"></textarea>
                </div>
            </div>

            <p class="submit">
                <input class="button" type="submit" value="送信">
            </p>
        </form>
    </aside>
    <footer>
        <p class="footer-right">
            <small>&copy;2019 ALL RIGHT RESERVED</small>
        </p>
    </footer>

  <?php wp_footer(); ?>
</body>
</html>
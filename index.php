<?php get_header(); ?>

        <section class="dog-image"></section>

        <section>

           <h2 class="sub-title">Latest</h2>

            <ul class="aryicles">


             <li class="article">
                 <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/dog (1).jpg" alt="dog6">
                 <p class="artycle-content">ここに記事が表示される</p>
                 <p class="artycle-content">ここに記事が表示される</p>
                 <p class="read-more"><a href="">Read More</a></p>
             </li>

            </ul>
        
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
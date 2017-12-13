<section id="sidebar">

    <!-- Intro -->
    <section id="intro">
        <a href="<?php home_url() ;?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt=""/></a>
        <header>
            <h2>Future <?php bloginfo('name') ;?></h2>
            <p><?php bloginfo('description'); ?></p>
        </header>
    </section>

    <!-- Mini Posts -->
    <section>
        <h4 class="title">Рандомные посты</h4>
        <div class="mini-posts">
            <?php
            $miniPostsParams = [
                'post_type' => ['post'],
                'orderby' => 'rand',
                'post_per_page' => '4',
            ];
            $miniPosts = get_posts($miniPostsParams);
            ?>
            <!-- Mini Post -->
            <?php foreach ($miniPosts as $miniPost) :?>
                <article class="mini-post">
                    <header>
                        <h3><a href="<?php the_permalink($miniPost->ID) ;?>"><?php echo $miniPost->post_title ;?></a></h3>
                        <time class="published" datetime="2015-10-20"><?php echo $miniPost->post_date;?></time>
                        <a href="#" class="author">
                            <img src="<?php bloginfo('template_url'); ?>/images/lol.jpg" alt=""/>
                        </a>
                    </header>
                    <a href="<?php the_permalink($miniPost->ID) ;?>" class="image">
                        <!--                        Просто так-->
                        <img src="<?php bloginfo('template_url'); ?>/images/pic0<?php echo rand(1,9) ;?>.jpg" alt=""/>
                    </a>
                </article>
            <?php endforeach ;?>
        </div>
    </section>


    <!-- About -->
    <section class="blurb">
        <h2>Tags</h2>
        <?php wp_tag_cloud([
                'smallest' => 10,
                'largest' => 20,
                'separator' => ' | ',
                'show_count' => true
        ]) ;?>
    </section>
    <section class="blurb">
        <h2>Календарь</h2>
        <?php get_calendar(false, true) ;?>

    </section>

    <!-- Footer -->
    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
            <li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a
                href="http://unsplash.com">Unsplash</a>.</p>
    </section>

</section>
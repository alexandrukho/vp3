<?php get_header(); ?>
    <!-- Post -->
<h1>Ближайшее совпадение:</h1>
<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post">
        <header>
            <div class="title">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="meta">
                <time class="published" datetime="2015-11-01"><?php the_date(); ?></time>
                <a href="" class="author"><span class="name"><?php the_author(); ?></span><img
                            src="<?php bloginfo('template_url'); ?>/images/lol.jpg" alt=""/></a>
            </div>
        </header>
        <a href="<?php the_permalink(); ?>" class="image featured">
            <!--            ОСТОРОЖНО - ГОВНОКОД -->
            <img src="<?php
            if (!empty(get_field('parnterImage'))) {
                $partnerImg = get_field('parnterImage');
                echo $partnerImg['url'];
            } else {
                echo getPostImage();
            }
            ?>" alt="img"/>
        </a>
        <div><?php the_excerpt(); ?></div>
        <footer>
            <ul class="actions">
                <li><a href="<?php the_permalink(); ?>" class="button big">Continue Reading</a></li>
            </ul>
            <ul class="stats">
                <li class="stats-partner-name">
                    <?php the_category('<li class="stats-partner-name">') ;?>
                </li>
                <li><a href="#" class="icon fa-heart">28</a></li>
                <li>
                    <a href="#" class="icon fa-comment">
                        <?php
                        setPostViews(get_the_ID());
                        echo getPostViews(get_the_ID());
                        ?>
                    </a>
                </li>
            </ul>
        </footer>
    </article>
<?php endwhile; else : ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>

<?php get_header(); ?>
    <!-- Post -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post">
        <header>
            <div class="title">
                <h2><a href="#"><?php the_title(); ?></a></h2>
            </div>
            <div class="meta">
                <time class="published" datetime="2015-11-01"><?php the_date(); ?></time>
                <a href="#" class="author"><span class="name"><?php the_author(); ?></span><img
                            src="<?php bloginfo('template_url'); ?>/images/avatar.jpg" alt=""/></a>
            </div>
        </header>
        <span class="image featured"><img src="<?php
            if (!empty(get_field('parnterImage'))) {
                $partnerImg = get_field('parnterImage');
                echo $partnerImg['url'];
            } else {
                echo getPostImage();
            }
            ?>" alt=""/></span>
        <div><?php the_content(); ?></div>
        <footer>
            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon fa-heart">28</a></li>
                <li><a href="#" class="icon fa-comment"><?php setPostViews(get_the_ID());
                        echo getPostViews(get_the_ID()); ?></a></li>
            </ul>
        </footer>
        <section class="pagination-post">
            <div class="pagination-post__block pagination-prev">
                <a href="<?php $postPrev = get_adjacent_post();
                echo get_permalink($postPrev); ?>" class="pagination-prev__link">
                    <i class="fa fa-2x fa-arrow-left"></i>
                    <?php echo $postPrev->post_title; ?>
                </a>
                <time class="pagination-prev__date published">
                    <?php echo date('d.m.Y', strtotime($postPrev->post_date)); ?>
                </time>
            </div>
            <div class="pagination-post__block pagination-next">
                <a href="<?php $postNext = get_adjacent_post(false, '', false);
                echo get_permalink($postNext); ?>" class="pagination-next__link">
                    <?php if (!empty($postNext)) : ?>
                    <?php echo $postNext->post_title; ?>
                    <i class="fa fa-2x fa-arrow-right"></i>
                </a>
                <time class="pagination-next__date published">
                    <?php echo date('d.m.Y', strtotime($postNext->post_date)); ?>
                </time>
                <?php else : ?>
                    <span class="pagination-post__block">Больше нет постов</span>
                    </a>
                <?php endif; ?>


            </div>
        </section>
    </article>

<?php endwhile; else : ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
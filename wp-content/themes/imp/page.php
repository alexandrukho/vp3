<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="post">
        <header>
            <div class="title title-custom">
                <h2><?php the_title(); ?></h2>
            </div>
        </header>
        <section class="post-page_content">
            <?php the_content() ;?>
        </section>
    </article>

<?php endwhile; else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
<?php
/*
Template Name: Tag Archive
*/
?>
<!--TODO - работает криво, выводит только один пост-->
<?php get_header(); ?>
<p>Все посты с тегом: <a href="" class="button-primary"><?php single_tag_title(); ?></a></p>
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
        <ul class="actions">
            <li><a href="<?php the_permalink(); ?>" class="button big">Continue Reading</a></li>
        </ul>
    </article>
<?php endwhile; else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

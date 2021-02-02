<?php get_header(); ?>

<main>
    <section class="content-area">
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <div class="article__header">
                        <h2><?php the_title(); ?></h2>
                        By: <?php the_author(); ?>
                    </div>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; else : ?>
                <article>
                    <p>Sorry, no post was found!</p>
                </article>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
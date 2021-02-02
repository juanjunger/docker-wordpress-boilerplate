<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="title">
                <h1>A simple, beautiful and minimalist WordPress Theme.</h1>
            </div>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="content">
                    <div class="flex flex--center">
                        <div class="content__image">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/image.png" alt="Image" />
                        </div>
                        <div class="content__text flex flex--column flex--start">
                            <h3><?php the_title(); ?></h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <p><?php the_content(); ?></p>
                            </a>
                            <!-- <span><?php #the_author(); ?></span> -->
                            <a href="" class="btn">Buy me a Coffee</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; else : ?>
                
                <div class="content">
                    <p>Sorry, no posts were found!</p>
                </div>

            <?php endif; ?>

        </div>
    </section>
    <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
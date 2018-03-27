<?php
// Einbindung WordPress Header für Includes
get_header(); ?>

<?php the_post_thumbnail(); ?>

    <div class="grid-x grid-padding-x">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="cell">
                <h2><?php the_title(); ?></h2>

                <div class="entry">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>

<?php
// Einbindung WordPress Footer für Includes
get_footer(); ?>

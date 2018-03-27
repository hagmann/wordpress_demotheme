<?php
// Einbindung WordPress Header für Includes
get_header(); ?>


<!-- Post Loop -->
<div class="grid-x grid-padding-x">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="medium-6 cell">
        <article>
    <h2><?php the_title(); ?></h2>

    <?php the_post_thumbnail(); ?>

    <div class="entry">
        <?php the_content(); ?>
    </div>
        </article>
    </div>
<?php endwhile; endif; ?>
</div>



<?php
// Einbindung WordPress Footer für Includes
get_footer(); ?>

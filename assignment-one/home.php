<?php get_header(); ?>
<div class="post-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail(); ?>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>

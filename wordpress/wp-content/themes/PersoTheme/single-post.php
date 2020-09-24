<?php get_header(); ?>
<div class="container">
      <?php if (have_posts()): ?>
            <div class="row">
                  <?php while(have_posts()): the_post(); ?>
                       <h1> <?php the_title() ?></h1>
                        <?php the_content() ?>
                        <?php echo get_comment() ?>
                  <?php endwhile ?>
            </div>
            <?php else: ?>
            <h2> Pas d'article </h2>
</div>
<?php endif; ?>
<?php get_footer(); ?>
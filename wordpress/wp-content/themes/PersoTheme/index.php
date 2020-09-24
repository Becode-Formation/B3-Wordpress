<?php get_header(); ?>
<div class="container">
      <h1 class="text-center"> Hello </h1>
      <div class="row">
      <div class="col-4"></div>
      <p class="col-4"> 
            Super méga site avec des articles non putaclick, parce que c'est vraiment pas sympa.
            Super méga site avec des articles non putaclick, parce que c'est vraiment pas sympa. 
            Super méga site avec des articles non putaclick, parce que c'est vraiment pas sympa. 
       </p>
      <div class="col-4"></div>
      </div>
            <?php if (have_posts()): ?>
            <div class="row">
                  <?php while(have_posts()): the_post(); ?>
                        <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                              <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="card-link">Voir plus</a>
                              </div>
                        </div>
                        </div>
                  <?php endwhile ?>
            </div>
            <?php else: ?>
            <h2> Pas d'article </h2>
</div>
<?php endif; ?>
<?php get_footer(); ?>
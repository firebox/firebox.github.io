<?php get_header(); ?>

<div class="single-page__container">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-md-8 col-md-offset-2">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h1 class="single-page__title tac"><?php the_title(); ?></h1>

          <div class="single-page__content">
            <?php the_content(); ?>
          </div>

        <?php endwhile; endif; ?>

      </div>

    </div>

  </div>

</div>


<?php get_footer(); ?>

<?php get_header(); ?>

<div class="single-post__container">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-md-8 col-md-offset-2">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h1 class="single-post__title"><?php the_title(); ?></h1>
          <div class="single-post__breadcrumbs">Breadcrumbs</div>
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large',['class' => 'single-post__feature-image']); } ?>

          <div class="single-post__action hidden-xs">
            <div class="row">
              <div class="col-xs-12 col-md-6 single-post__social">
                Share post <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-instagram"></i><i class="fa fa-pinterest"></i><i class="fa fa-google-plus"></i>
              </div>
              <div class="col-xs-12 col-md-6 tar single-post__info">
                <span>
                  <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                  echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                } ?></span>
                <span><?php echo get_the_date(); ?></span>
              </div>
            </div>
          </div>

          <div class="single-post__content">
            <?php the_content(); ?>
          </div>

        <?php endwhile; endif; ?>

        <div class="single-post__flow">
          <div class="row">
            <div class="col-md-6 single-post__social single-post__social--bottom">
              Share post <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-instagram"></i><i class="fa fa-pinterest"></i><i class="fa fa-google-plus"></i>
            </div>
            <div class="col-md-6 single-post__newsletter">
              <h5>Sign up to our newsletter</h5>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="email@email.com" aria-describedby="basic-addon2">
                <a href="#" class="input-group-addon" id="basic-addon2">Send</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</div>

<div class="grid-mobile grid-mobile--related visible-xs">
  <?php $query = new WP_Query( array( 'post_type' => 'post' ) );  ?>
  <?php if ( $query->have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="grid-item-mobile">
      <div class="grid-item__thumbnail">
        <a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
        </a>
      </div>
      <div class="grid-item__content">
        <a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>"><h2 class="grid-item__content-title"><?php the_title(); ?></h2></a>
        <p class="grid-item__content-excerpt"><?php echo excerpt(17); ?></p>
        <div class="grid-item__content-links">
          <a href="<?php echo the_permalink(); ?>" title="<?php the_title(); ?>" class="grid-item__content-links grid-item__content-links--read-more">Read more</a>
          <?php $categories = get_the_category();
          if ( ! empty( $categories ) ) {
            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="grid-item__content-links grid-item__content-links--tag">' . esc_html( $categories[0]->name ) . '</a>';
          } ?>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>

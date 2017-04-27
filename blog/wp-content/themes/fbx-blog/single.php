<?php get_header(); ?>

<div class="single-post__container">

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-md-8 col-md-offset-2">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h1 class="single-post__title"><?php the_title(); ?></h1>
          <div class="single-post__breadcrumbs">
            <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?></div>
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large',['class' => 'single-post__feature-image']); $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); } ?>

          <div class="single-post__action hidden-xs">
            <div class="row">
              <div class="col-xs-12 col-md-6 single-post__social">
                Share post
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" title="Share on Facebook">
                  <i class="fa fa-facebook"></i>
                </a>
                <a href="https://twitter.com/home?status=<?php the_title(); ?>: <?php echo the_permalink(); ?>" title="Share on Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" title="Share on Facebook">
                  <i class="fa fa-instagram"></i>
                </a>
                <a href="https://pinterest.com/pin/create/button/?url=<?php echo $feat_image_url; ?>&media=<?php the_title(); ?>&description=<?php echo excerpt(20); ?>" title="Share on Pinterest">
                  <i class="fa fa-pinterest"></i>
                </a>
                <a href="https://plus.google.com/share?url=<?php echo the_permalink(); ?>" title="Share on Google Plus">
                  <i class="fa fa-google-plus"></i>
                </a>
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

  <div class="container">

    <div class="row">

      <div class="col-xs-12 col-md-12">

  <div class="grid hidden-xs">
    <div class="grid-sizer"></div>
    <?php query_posts('post_type=post&order=DESC&posts_per_page=30');
       if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="grid-item">
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

    <?php endwhile; endif; wp_reset_query();?>
  </div>

  <div class="grid-mobile grid-mobile--related visible-xs">
    <?php query_posts('post_type=post&order=DESC&posts_per_page=30');
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
    <?php endwhile; endif; wp_reset_query(); ?>

  </div>
</div>
</div>

  </div>

</div>

<?php get_footer(); ?>

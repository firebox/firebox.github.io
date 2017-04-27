<?php get_header(); ?>

  <div class="container">
    <div class="row">

      <div class="grid hidden-xs">
        <div class="grid-sizer"></div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

        <?php endwhile; endif; ?>
    </div>

    <div class="grid-mobile visible-xs">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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

  </div>
</div>

<?php get_footer(); ?>

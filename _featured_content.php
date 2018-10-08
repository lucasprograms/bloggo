<?php $query = new WP_Query( array('category__in' => 3)); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
  <div class="col-12 featured-content__container">
    <div class="text-align-center featured-content__title">
      <span><?php the_title() ?></span>
    </div>
    <div class="featured-content__content">
      <div class="col-10 offset-1">
        <?php the_content() ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
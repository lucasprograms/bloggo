<?php get_header() ?>
  <?php $query = new WP_Query( array('category__not_in' => 3)); ?>
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php get_template_part('_post') ?>
    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
<?php get_footer() ?>
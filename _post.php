<div class="post col-10 offset-1 mb-3">
  <div class="card">
    <div class="card-header d-flex align-items-center">
      <h2 class="card-title d-flex mb-0">
        <a
          class="text-light"
          href="<?php the_permalink(); ?>"
          rel="bookmark"
          title="Permanent Link to <?php the_title_attribute(); ?>"
        >
          <?php the_title(); ?>
        </a>
      </h2>
    </div>
    <div class="card-body">
      <p class="card-text">
        <?php the_content() ?>
      </p>
    </div>
  </div>
</div>
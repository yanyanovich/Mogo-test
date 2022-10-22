<?php $count = do_shortcode('[views]'); ?>
<li class="blog__item">
  <article class="blog__cart" id="post-<?php the_ID(); ?>">
    <div class="blog__cart-media">
      <a href="<?php echo get_permalink() ?>" class="blog__cart-link">
        <div class="blog__date-block">
          <span class="cart-date"><?php echo get_the_date('j') ?></span>
          <span class="cart-month"><?php echo get_the_date('M') ?></span>
        </div>
        <?php
        echo get_the_post_thumbnail($publications->ID, 'blog_image');
        ?>
      </a>
    </div>
    <div class="blog__cart-body">
      <?php the_title('<h3 class="cart-title">', '</h3>'); ?>
      <p class="cart-text"><?php the_content() ?></p>
    </div>
    <footer class="blog__cart-footer">
      <span class="cart-views">
        <svg width="20" height="20">
          <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-eye' ?> ">
          </use>
        </svg>
        <?php echo $count ?>
      </span>
      <span class="cart-coments">
        <svg width="20" height="20">
          <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-chat' ?> ">
          </use>
        </svg>
        <?php comments_number() ?>
      </span>
    </footer>
  </article>
</li>
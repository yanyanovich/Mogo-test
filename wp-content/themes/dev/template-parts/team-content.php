<li class="team__item">
  <div class="team__image-container">
    <?php echo get_the_post_thumbnail($publications->ID, 'team_image'); ?>
    <ul class="team__socials-list">
      <li class="team__socials-item">
        <a href="#" class="team__social-link">
          <svg width="20" height="26">
            <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-facebook' ?> ">
            </use>
          </svg>
        </a>
      </li>
      <li class="team__socials-item">
        <a href="#" class="team__social-link">
          <svg width="26" height="26">
            <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-twitter' ?> ">
            </use>
          </svg>
        </a>
      </li>
      <li class="team__socials-item">
        <a href="#" class="team__social-link">
          <svg width="21" height="26">
            <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-pinterest' ?> ">
            </use>
          </svg>
        </a>
      </li>
      <li class="team__socials-item">
        <a href=#"" class="team__social-link">
          <svg width="26" height="26">
            <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-instagram' ?> ">
            </use>
          </svg>
        </a>
      </li>
    </ul>
  </div>
  <?php the_title('<h3 class="team-title">', '</h3>'); ?>
  <p class="team-content">
    <?php the_content() ?>
  </p>
</li>
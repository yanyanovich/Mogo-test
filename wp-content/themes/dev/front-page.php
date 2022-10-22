<?php
/*
Template Name: Main Page
*/
?>
<!-- html/php-->

<?php get_header(); ?>
<main class="main">
  <section class="carousel">
    <div class="container">
      <div class="carousel__inner">
        <ul class="carousel__item">
          <li class="carousel__itembox">
            <h3 class="carousel__itembox-subtitle">Creative Template</h3>
            <h2 class="carousel__itembox-title">Welcome to MoGo</h2>
            <a href="#" class="carousel__itembox-button">Lear more</a>
          </li>
          <li class="carousel__itembox">
            <h3 class="carousel__itembox-subtitle">Creative Template</h3>
            <h2 class="carousel__itembox-title">Welcome to MoGo</h2>
            <a href="#" class="carousel__itembox-button">Lear more</a>
          </li>
          <li class="carousel__itembox">
            <h3 class="carousel__itembox-subtitle">Creative Template</h3>
            <h2 class="carousel__itembox-title">Welcome to MoGo</h2>
            <a href="#" class="carousel__itembox-button">Lear more</a>
          </li>
          <li class="carousel__itembox">
            <h3 class="carousel__itembox-subtitle">Creative Template</h3>
            <h2 class="carousel__itembox-title">Welcome to MoGo</h2>
            <a href="#" class="carousel__itembox-button">Lear more</a>
          </li>
        </ul>
        <ol class="carousel__navigation">
          <li class="carousel__navigation-item">
            <a href="#" class="carousel__navigation-link">Intro</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#" class="carousel__navigation-link">work</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#" class="carousel__navigation-link">about</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#" class="carousel__navigation-link">contacts</a>
          </li>
        </ol>
      </div>
    </div>
  </section>

  <section id="service" class="service">
    <div class="container">
      <h3 class="service__subtitle">Service</h3>
      <h2 class="service__title">what we do</h2>
      <p class="service__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <div class="service__container">
        <div class="service__image-block">
          <img src="<?php echo get_template_directory_uri() . '/img/service.jpg' ?> " alt="">
        </div>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  photography
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Collapsible Group Item #2
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Collapsible Group Item #3
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="team" class="team">
    <div class="container">
      <h3 class="team__subtitle">Who we are</h3>
      <h2 class="team__title">MEET OUR TEAM</h2>
      <p class="team__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <?php
      $team = new WP_Query([
        'post_type' => 'team',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC',
      ]);
      $count_team = $team->found_posts;
      ?>
      <?php if ($team->have_posts()) : ?>
        <ul class="team__list">
          <?php
          while ($team->have_posts()) : $team->the_post();
            get_template_part('template-parts/team-content', 'team');
          endwhile;
          ?>
        </ul>
      <?php endif; ?>
      <?php if ($count_team > 3) : ?>
        <div class="team__button">
          <a href="/team/" class="button-more">Load more</a>
        </div>
      <?php endif; ?>

    </div>
  </section>

  <section id="blog" class="blog">
    <div class="container">
      <div class="blog__container">
        <h3 class="blog__subtitle">Our stories</h3>
        <h2 class="blog__title">Latest blog</h2>
        <?php
        $publications = new WP_Query([
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC',
          'paged' => 1,
        ]);
        $count_blog = $publications->found_posts;
        ?>
        <?php if ($publications->have_posts()) : ?>
          <ul class="blog__list">
            <?php
            while ($publications->have_posts()) : $publications->the_post();
              get_template_part('template-parts/single', 'blog');
            endwhile;
            ?>
          </ul>
        <?php endif; ?>
        <?php if ($count_blog > 3) : ?>
          <div class="blog__button">
            <a href="/blog/" class="button-more">Load more</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!--<section>-->
  <!--    <ul class="team__list">-->
  <!--    <?php echo do_shortcode('[recent_posts_team num = "3"]'); ?>-->
  <!--<?php echo do_shortcode('[recent_posts num = "3"]'); ?>-->
  <!--    </ul>-->
  <!--</section>-->
</main>
<?php get_footer(); ?>
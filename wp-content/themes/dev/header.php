<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>

  <header class="header">
    <div class="container">
      <div class="header__container">
        <a href="/" class="header__logo">
          <img class="header__logo-img" src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="Logo">
        </a>
        <nav class="header__navigation">
          <ul class="header__navigation-list">
            <li class="header__navigation-item">
              <a href="#team" class="header__navigation-link">About</a>
            </li>
            <li class="header__navigation-item">
              <a href="#service" class="header__navigation-link">service</a>
            </li>
            <li class="header__navigation-item">
              <a href="#" class="header__navigation-link">work</a>
            </li>
            <li class="header__navigation-item">
              <a href="#blog" class="header__navigation-link">blog</a>
            </li>
            <li class="header__navigation-item">
              <a href="#" class="header__navigation-link">contact</a>
            </li>
          </ul>
        </nav>
        <div class="header__icons">
          <ul class="header__icons-list">
            <li class="header__icons-item"><a href="#" class="header__icons-shop">
                <svg width="18" height="18">
                  <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-shopping-cart' ?> ">
                  </use>
                </svg>
              </a></li>
            <li class="header__icon-item"><a href="#" class="header__icons-search">
                <svg width="18" height="18">
                  <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-search' ?> ">
                  </use>
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          MENU
        </button>
      </div>
    </div>
  </header>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="dropdown mt-3">
        <ul class="header__navigation-list mobile">
          <li class="header__navigation-item mobile">
            <a href="#team" class="header__navigation-link mobile">About</a>
          </li>
          <li class="header__navigation-item mobile">
            <a href="#service" class="header__navigation-link mobile">service</a>
          </li>
          <li class="header__navigation-item mobile">
            <a href="#" class="header__navigation-link mobile">work</a>
          </li>
          <li class="header__navigation-item mobile">
            <a href="#blog" class="header__navigation-link mobile">blog</a>
          </li>
          <li class="header__navigation-item mobile">
            <a href="#" class="header__navigation-link mobile">contact</a>
          </li>
        </ul>
        <div class="header__icons mobile">
          <ul class="header__icons-list mobile">
            <li class="header__icons-item mobile"><a href="#" class="header__icons-shop mobile">
                <svg width="18" height="18">
                  <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-shopping-cart' ?> ">
                  </use>
                </svg>
              </a></li>
            <li class="header__icon-item mobile"><a href="#" class="header__icons-search mobile">
                <svg width="18" height="18">
                  <use href="<?php echo get_template_directory_uri() . '/img/svg-sprites.svg#icon-search' ?> ">
                  </use>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
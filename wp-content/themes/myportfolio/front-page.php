<?php get_header(); ?>

<body>
  <nav>
    <div class="nav-name">
    </div>
      <?php wp_nav_menu(
        $args = array(
        'menu' => 'portfolio-menu',
        'menu_class' => 'nav-menu'
      ) ) 
      ?>
    
  </nav>

  <div class="supertitre">
   <p><?php get_the_ID() ?></p>
   <h1 class="titre-page"><?php bloginfo('name') ?></h1>
   <h2 class="accroche-first"><?php bloginfo('description') ?></h2>
   <h3 class="accroche">Bienvenue sur le portfolio d'un jeune <span id="accroche1"></span> <span id="accroche2"></span></h3>
  </div>

  <div class="know-more">
    <a href="<?php the_ID('52') ?>">En savoir plus</a>
  </div>
<?php get_footer(); ?>
<?php /* Template Name: Concept 360 - Solutions */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="row solutions">
    <div class="columns small-6 medium-8 solutions__content">
      <div class="solutions__content__image">
        <?php echo get_the_post_thumbnail( $randPost->ID, 'medium_large' ); ?>
      </div>
    </div>
    <div class="columns small-6 medium-4 solutions__text">
      <div class="project__info__breadcrumbs concept-breadcrumbs">
          <nav class="breadcrumb">
            <!-- <a href="< ?php get_home_url();?>">Home</a>
            <span>/</span> -->
            <a href="<?php get_permalink();?>"><?php the_title();?></a>
          </nav>
      </div>
      <h2><?php echo get_post_meta($post->ID, 'solutions_title', true) ?></h2>
      <p><?php echo get_post_meta($post->ID, 'solutions_main-text', true) ?></p>
    </div>
    <div class="solutions__bakery solutions__working-style">
      <?php the_content(); ?>
    </div>
  </div>
  
  <div class="footer-spacer"></div>

<?php endwhile; ?>

<?php


  get_footer();

?>

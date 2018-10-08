<?php /* Template Name: Concept 360 - Solutions */ ?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="row solutions">
    <div class="columns small-12 medium-8 solutions__content">
      <div class="solutions__content__image">
        <img src="<?php echo wp_get_attachment_image_src( get_post_meta($post->ID, 'solutions_main-image', true), 'large' )[0]; ?>" alt="">
      </div>
    </div>
    <div class="columns small-12 medium-4 solutions__text">
      <h2><?php echo get_post_meta($post->ID, 'solutions_title', true) ?></h2>
      <p><?php echo get_post_meta($post->ID, 'solutions_main-text', true) ?></p>
    </div>
  </div>
  <div class="row solutions__working-style">
    <div class="columns small-12 medium-4 solutions__text"> 
      <h2><?php echo get_post_meta($post->ID, 'working-style_title', true) ?></h2>
        <p><?php echo get_post_meta($post->ID, 'working-style_main-text', true) ?></p>
      </div>
    <div class="columns small-12 medium-4 solutions__working-style__graphic">
      <div class="svg">
      <svg id="Graphic" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198.8 198.8">
        <g id="conception_1_">
          <path class="flag" id="flag_3_" fill="#E9484F" d="M104.1 41.5c-.8-.1 8.5-19.8 8.5-19.8L103.4 0c41.1 1.6 75.7 28.1 89.3 64.9l-16.7 16s-22.2-2.1-22.3-2.3c-7.8-20.4-26.9-35.3-49.6-37.1"/>
            <circle id="circle" opacity=".2" fill="#FFF" cx="148" cy="40.4" r="11.2"/>
            <text id="number_4_" transform="translate(144.149 42.578)" fill="#FFF" font-family="'MyriadPro-Bold'" font-size="7">01</text>
          </g>
            <g id="pre-production_1_">
              <path class="flag" id="flag_2_" fill="#E63138" d="M155.9 86c-.2-.8 21.5 2 21.5 2l17.7-15.5c11.2 39.6-3.4 80.7-34.1 105l-20.3-11s-4.9-21.8-4.7-21.9c16.9-13.8 25.2-36.5 19.9-58.6"/>
            <circle id="circle_1_" opacity=".2" fill="#FFF" cx="173" cy="129.4" r="11.2"/>
            <text id="number_3_" transform="translate(169.15 132.226)" fill="#FFF" font-family="'MyriadPro-Bold'" font-size="7">02</text>
          </g>
            <g id="shooting_1_"
            ><path class="flag" id="flag_1_" fill="#CD191F" d="M129.6 149c.7-.4 4.7 21.1 4.7 21.1l20.2 12c-34.2 22.8-77.8 21.8-110.4 0l4.1-22.7s19.2-11.4 19.4-11.3c18.5 11.9 42.6 12.7 62 .9"/>
            <circle id="circle_2_" opacity=".2" fill="#FFF" cx="94" cy="177.4" r="11.2"/>
            <text id="number_2_" transform="translate(90.15 180.518)" fill="#FFF" font-family="'MyriadPro-Bold'" font-size="7">03</text>
          </g>
            <g id="post-production_1_">
              <path class="flag" id="flag" fill="#CD191F" d="M61.6 143.4c.6.5-18.6 11-18.6 11l-5.2 22.9C5.5 151.9-6.9 110.1 3.7 72.4l22.9-3.1s16.8 14.7 16.7 15c-5.7 21.1 1 44.3 18.3 59.1"/>
            <circle id="circle_4_" opacity=".2" fill="#FFF" cx="25" cy="118.4" r="11.2"/>
            <text id="number_1_" transform="translate(20.95 121.308)" fill="#FFF" font-family="'MyriadPro-Bold'" font-size="7">04</text>
          </g>
            <g id="distriution">
              <path class="flag" id="_x35__x5F_distribution" fill="#B6161B" d="M45.8 77c-.3.7-16.2-14.3-16.2-14.3L6.2 64.9C20.4 26.3 56.3 1.6 95.5 0l10 20.8s-8.8 20.5-9.1 20.5C74.6 42.5 54.6 55.9 45.8 77"/>
            <circle id="circle_5_" opacity=".2" fill="#FFF" cx="56" cy="33.4" r="11.2"/>
            <text id="number" transform="translate(52.15 35.692)" fill="#FFF" font-family="'MyriadPro-Bold'" font-size="7">05</text>
          </g>
        </svg>
      </div>
    </div>
    <div class="columns small-12 medium-4 row solutions__working-style__container">
      <div class="columns small-6 solutions__working-style__graphic__text">
        <h5>01</h5>
        <h6><?php echo get_post_meta($post->ID, 'working-style_title-01', true) ?></h6>
        <p><?php echo get_post_meta($post->ID, 'working-style_text-01', true) ?></p>
      </div>
      <div class="columns small-6 solutions__working-style__graphic__text">
        <h5>02</h5>
        <h6><?php echo get_post_meta($post->ID, 'working-style_title-02', true) ?></h6>
        <p><?php echo get_post_meta($post->ID, 'working-style_text-02', true) ?></p>
      </div>
      <div class="columns small-6 solutions__working-style__graphic__text">
        <h5>03</h5>
        <h6><?php echo get_post_meta($post->ID, 'working-style_title-03', true) ?></h6>
        <p><?php echo get_post_meta($post->ID, 'working-style_text-03', true) ?></p>
      </div>
      <div class="columns small-6 solutions__working-style__graphic__text">
        <h5>04</h5>
        <h6><?php echo get_post_meta($post->ID, 'working-style_title-04', true) ?></h6>
        <p><?php echo get_post_meta($post->ID, 'working-style_text-04', true) ?></p>
      </div>
      <div class="columns small-6 solutions__working-style__graphic__text">
        <h5>05</h5>
        <h6><?php echo get_post_meta($post->ID, 'working-style_title-05', true) ?></h6>
        <p><?php echo get_post_meta($post->ID, 'working-style_text-05', true) ?></p>
      </div>
    </div>
  </div>
  <div class="row solutions__services">
    <div class="columns small-12 medium-8 solutions__services__graphic">
      <!-- <h1>Interaktive Grafik</h1> -->
      <img src="/wp-content/themes/notio-wp-child/assets/grafik2.png" alt="">
    </div>
    <div class="columns small-12 medium-4 solutions__text">
      <h2><?php echo get_post_meta($post->ID, 'service_title', true) ?></h2>
        <p><?php echo get_post_meta($post->ID, 'service_main-text', true) ?></p>
      </div>
    </div>
  </div>

<?php endwhile; ?>

<?php


  get_footer();

?>

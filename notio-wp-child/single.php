<?php get_header(); ?>
<?php
  $posttags = get_the_tags();
?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<?php 
  $image_id = get_post_meta($post->ID, 'project_image-main', true);
  $image_url = wp_get_attachment_image_src( $image_id, 'large'  )[0];
?>
  <div class="project row">
    <div class="project__content columns medium-8 small-12 collapse">
      <div class="project__content__image">
        <?php if(get_field('project_video-main-flix')): ?>
          <a href="https://cms.360flix.com/player/?cms&lc=<?php echo get_field('project_video-main-flix')?>&details&instructions=true&next&langshow&showlogo=true&logofade=true&lang=de" class="foobox" rel="concept-gallery">
            <?php if(get_field('project_image-main')): ?>
              <img src="<?php echo get_field('project_image-main') ?> "alt="" srcset="">
            <?php else: ?>
              <h2>Bitte Bild hinzufügen!</h2>
            <?php endif; ?>
            <div class="project__content__image__play-button"></div>
          </a>
          
        <?php elseif(get_field('project_video-main-vimeo') && !get_field('project_video-main-flix')): ?>
          <?php 
            ini_set("allow_url_fopen", 1);
            $json = file_get_contents('http://vimeo.com/api/oembed.json?url=http%3A//vimeo.com/' . get_field('project_video-main-vimeo'));
            $obj = json_decode($json);
            $thumbnail_url =  $obj->thumbnail_url;
          ?>
          <a href="https://player.vimeo.com/video/<?php echo get_field('project_video-main-vimeo')?>" class="foobox" rel="concept-gallery">
            <img src="<?php echo $thumbnail_url ?> "alt="" srcset="">
            <div class="project__content__image__play-button"></div>
          </a>
        <?php elseif(get_field('project_video-main-youtube') && !get_field('project_video-main-vimeo') && !get_field('project_video-main-flix')): ?>
          <a href="https://www.youtube.com/embed/<?php echo get_field('project_video-main-youtube')?>"  class="foobox" rel="concept-gallery" >
            <img src="https://img.youtube.com/v1/<?php echo get_field('project_video-main-youtube')?>/3.jpg"alt="" srcset="">
            <div class="project__content__image__play-button"></div>
          </a>
        <?php endif; ?>
        <?php //the_content(); // the_field('home_video'); ?>
      </div>
      <?php the_content(); ?>
    </div>
    <div class="project__info columns small-12 medium-4">
      <div class="project__info__breadcrumbs concept-breadcrumbs">
        <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
      </div>
      <div class="project__info__title">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="project__info__description">
        <p><?php if(get_post_meta($post->ID, 'project_description', true)) echo get_post_meta($post->ID, 'project_description', true); ?>  </p>
      </div>
      <div class="project__info__tags">
        <?php
          if ($posttags) {
            foreach($posttags as $tag) {
              echo '<a href="' . get_home_url() . '/?s='. $tag->name . '" ><div class="project__info__tags__tag tag hover">' . $tag->name . '</div></a>';
            }
          }
        ?>
      </div>
      <?php if(get_post_meta($post->ID, 'project_information', true)): ?>
        <div class="project__info__more-info">
          <?php echo get_post_meta($post->ID, 'project_information', true); ?>
        </div>
      <?php endif; ?>
      <div class="project__info__quotes">
        <?php
          $quotes = get_post_meta($post->ID, 'project_quote', true);
          if(get_post_meta($post->ID, 'project_quote', true)):
            foreach ($quotes as $quote):
          ?>
          <p> <?php echo get_post_meta($post->ID, 'project_quote', true); ?></p>
        <?php endforeach; endif; ?>
      </div>
    </div>
    <div class="project__images columns small-12">
    <?php
    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('project_images', $post->ID) ? acf_photo_gallery('project_images', $post->ID) : '';
    //Check if return array has anything in it
    if( count($images) ):
        //Cool, we got some data so now let's loop over it
        foreach($images as $image):
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $caption= $image['caption']; //The caption
            $full_image_url= $image['full_image_url']; //Full size image url
            // $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
            $url= $image['url']; //Goto any link when clicked
            $target= $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
      ?>
      <div class="project__image">
        <?php if( !empty($url) ){ ?><a href="<?php echo $full_image_url; ?>" <?php echo ($target == 'true' )? 'target="_blank"': ''; ?>><?php } ?>
        <a href="<?php echo $full_image_url; ?>" rel="concept-gallery">
          <img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>">
        </a>
          <?php if( !empty($url) ){ ?></a><?php } ?>
      </div>
    <?php endforeach; endif; ?>
    </div>
    <div class="project__related-projects row columns small-12">
      <h4>Ähnliche Projekte</h4>
      <?php
      $tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
      // $args = [
      //     'post__not_in'        => array( get_queried_object_id() ),
      //     'posts_per_page'      => 5,
      //     'ignore_sticky_posts' => 1,
      //     'orderby'             => 'rand',
      //     'tax_query' => [
      //         [
      //             'taxonomy' => 'post_tag',
      //             'terms'    => $tags
      //         ]
      //     ]
      // ];

      $args = [
          'orderby'             => 'rand',
          'posts_per_page'      => 3,
          'tax_query' => [
              [
                  'taxonomy' => 'post_tag',
                  'terms'    => $tags
              ]
          ]
      ];

      $my_query = new wp_query( $args );
      if( $my_query->have_posts() ) {
              while( $my_query->have_posts() ) {
                $my_query->the_post(); ?>
                  <div class="columns small-12 medium-4 projects__project project__thumbnail <?php echo get_post_meta($randPost->ID, 'highlight', true) ? 'projects__project__highlight' : '' ?>">
                    <a href="<?php the_permalink() ?>">
                      <div class="projects__project__info__container">
                        <img src="<?php echo get_field('project_image-main'); ?>" alt="">
                        <div class="projects__project__info project-hover-info">
                          <h3><?php echo the_title(); ?></h3>
                          <p><?php //echo $post_description_short ?></p>
                        <?php echo has_category(37); ?>
                        </div>
                      </div>
                    </a>
                  </div>
              <?php }
              wp_reset_postdata();
      } else {
        echo '<p>Nothing found</p>';
      }
      ?> 
    </div>
  </div>
<?php endwhile; else : endif; ?>
<?php get_footer(); ?>

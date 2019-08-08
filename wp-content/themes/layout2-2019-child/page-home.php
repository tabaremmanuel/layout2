<?php /*Template Name: Home*/ get_header(); ?>
  <div class="section section-1 mb-md-4" style="<?php echo(get_field('banner_background'))?'background-image:url('.get_field('banner_background')['url'].')':''; ?>">
    <a href="javascript:void(0)" class="btn-arr-down w-100 position-absolute text-center p-4">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-arr-down.png" alt="">
    </a>
    <div class="container">
      <div class="row align-content-center">
        <div class="col-md-8 offset-md-2 text-center">
          <?php the_field('content'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="section section-2 py-3 py-md-5">
    <div class="container">
      <div class="row">
        <?php if(have_rows('section_2_repeater')):
          while(have_rows('section_2_repeater')): the_row();
        ?>
          <div class="col-12 col-md-4">
            <?php the_sub_field('content'); ?>
          </div>
        <?php endwhile;
      endif;?>
      </div>
    </div>
  </div>
  <div class="section section-3 py-3 py-md-2 text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php the_field('section_3_content'); ?>
        </div>
        <?php if(have_rows('videos')):
          while(have_rows('videos')): the_row(); ?>
        <div class="col-12 col-md-4 mb-3">
          <?php the_sub_field('embed_code'); ?>
        </div>
        <?php
            endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
  <div class="section section-4 py-3 py-md-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 pb-md-0 pb-4 text-md-right text-center pr-md-5">
          <?php echo (get_field('side_image'))?'<img class="mr-md-5" src="'.get_field('side_image')['url'].'" alt="Globe Graphic">':''; ?>
        </div>
        <div class="col-12 col-md-6">
          <?php the_field('section_4_content'); ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer();

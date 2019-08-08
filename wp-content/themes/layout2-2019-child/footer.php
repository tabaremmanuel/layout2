<div class="main-footer py-5 text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
        the_field('text','options');
        if(have_rows('social_footer','options')): ?>
            <ul class="social-footer">
              <?php while(have_rows('social_footer','options')): the_row(); ?>
                <li>
                  <a href="<?php the_sub_field('link'); ?>" target="_blank">
                    <i class="fa fa-<?php the_sub_field('name'); ?>"></i>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</div> <!-- #main -->
<?php wp_footer(); ?>
</body>
</html>

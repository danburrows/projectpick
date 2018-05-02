    <?php get_header(); ?>

<!-- filter -->
        <div class="uk-clearfix uk-sticky uk-padding uk-padding-remove-vertical" uk-sticky="bottom: #offset">
          <div class="uk-float-left">
            <p id="count" class="uk-text-small">Showing all 999 items</p>
          <?php echo do_shortcode('[searchandfilter id="93"]'); ?>
        </div>
    </div> 

<!-- grid -->


      <div class="uk-child-width-1-4 uk-grid-collapse uk-text-center uk-padding-small" id="posts" uk-grid uk-scrollspy="target:> div; cls:uk-animation-slide-bottom-medium; delay: 100; repeat: true; hidden: true; offset-top: 100">
     

            <?php

            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article class="uk-width-1-4@l uk-width-1-2@s post">
                        <a href=""><?php the_post_thumbnail('post-thumbnail', array('class' => 'grid-pic uk-card uk-card-hover uk-card-body')); ?></a>
                    </article>
            <!-- if no posts -->
                <?php endwhile;               

                else :
                    echo "<p>No wposts</p>" ;

                endif;

            ?>
    </div> 

<!--  <button class="uk-button uk-button-default uk-align-center uk-margin-large-bottom uk-margin-large-top">Load more</button>
    <a href="" uk-totop></a>
</div> -->




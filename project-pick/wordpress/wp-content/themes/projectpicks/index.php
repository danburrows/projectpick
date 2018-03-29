<?php get_header(); ?>

<!-- filter -->
        <div class="uk-clearfix uk-sticky uk-padding uk-padding-remove-vertical" uk-sticky="bottom: #offset">
          <div class="uk-float-left">
            <p id="count" class="uk-text-small">Showing all 999 items</p>
          </div>
            <button class="uk-button uk-button-default uk-float-right" type="button" uk-toggle="target: #offcanvas-reveal">Filter</button>
            <div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true; flip: true">
                <div class="uk-offcanvas-bar">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <h3>Title</h3>
                    <h4>Title</h4>

                        <ul class="uk-list uk-column-1-2">
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                        </ul>

                    <h4>Title</h4>

                        <ul class="uk-list uk-column-1-2">
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                        </ul>

                    <h4>Title</h4>

                        <ul class="uk-list uk-column-1-2">
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                            <li><label><input class="uk-checkbox" type="checkbox"> Filter 1</label></li>
                        </ul>
                </div>
            </div>
        </div> 


<!-- grid -->


<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>


      <div class="uk-child-width-1-4 uk-grid-collapse uk-text-center uk-padding-small" uk-grid uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-medium; delay: 100; repeat: true; hidden: true; offset-top: 100">
         <div class="uk-width-1-4@l uk-width-1-2@s">
            <a href=""><?php the_post_thumbnail('post-thumbnail', array('class' => 'grid-pic uk-card uk-card-hover uk-card-body')); ?></a>
        </div>
    </div>

<!-- if no posts -->
    <?php endwhile;                 

    else :
        echo "<p>No wposts</p>" ;

    endif;

?>


 <button class="uk-button uk-button-default uk-align-center uk-margin-large-bottom uk-margin-large-top">Load more</button>
    <a href="" uk-totop></a>
</div>


<?php get_header(); ?>
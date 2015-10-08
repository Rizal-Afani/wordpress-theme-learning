        <?php get_header() ?>

        <!-- CONTENT -->
       	<div id="tooplate_content">
           		<div id="homepage_slider">
                    <div id="slider">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/slideshow/01.jpg" alt="Slide 01" title="Nam fermentum lacus suscipit diam feugiat fringilla." /></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/slideshow/02.jpg" alt="Slide 02" title="Proin bibendum est id velit tincidunt ut sodales ligula facilisis." /></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/slideshow/03.jpg" alt="Slide 03" title="Fusce tincidunt diam eu metus iaculis hendrerit." /></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/slideshow/04.jpg" alt="Slide 04" title="Nulla faucibus luctus quam eget placerat. " /></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/slideshow/05.jpg" alt="Slide 05" title="Aliquam quis velit et sem vestibulum dignissim." /></a>
                    </div>
                </div>
                
                <?php 
                    if( have_posts() ){
                        while( have_posts() ){
                            the_post();
                ?> 

                <div class="post_box">
                	<div class="date_box">
                    	<div class="date">19<span>OCT 2048</span></div>
                        <div class="post_comment"><?php the_date() ?></div>
                    </div>
					
                    <div class="post_box_right">
                        <h2>
                            <?php the_title() ?>
                        </h2>
                        <p><?php the_author() ?></p>
                        <div class="post_meta"><a href="#">Graphics</a> \ <a href="#">Illustrations</a></div>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php echo the_permalink() ?>" class="more float_r">
                            Continue Reading
                        </a>
                    </div>
					
                    <div class="cleaner"></div>
				</div>
                <?php 
                        }
                    } 
                ?>
                
            <div class="cleaner"></div>
        </div>
        <!-- END CONTENT -->

        <?php get_footer() ?>
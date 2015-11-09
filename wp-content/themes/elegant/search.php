        <?php get_header() ?>

        <!-- CONTENT -->
       	<div id="tooplate_content">      
                <h2>File Search.php</h2>          
                <?php 
                    if( have_posts() ){
                        while( have_posts() ){
                            the_post();
                ?> 

                <div class="post_box">
                	<div class="date_box">
                    	<div class="date"><?php echo get_the_date('d', get_the_ID()) ?><span><?php echo get_the_date('M Y', get_the_ID()) ?></span></div>
                        <div class="post_comment"><?php comments_number('No Comment', '1 Comment', '% Comments') ?></div>
                    </div>
					
                    <div class="post_box_right">
                        <h2>
                            <?php the_title() ?>
                        </h2>
                        <?php the_date() ?>
                        <p><?php the_author() ?></p>
                        <div class="post_meta">
                            <?php
                                foreach(get_the_category() as $category){
                            ?>
                            <a href="<?php echo get_category_link($category->term_id) ?>">
                                <?php echo $category->name ?>
                            </a> | 
                            <?php } ?>
                        </div>
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
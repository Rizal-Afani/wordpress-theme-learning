        <?php get_header() ?>

        <!-- CONTENT -->
       	<div id="tooplate_content">
                <h2>File Page.php</h2>
                <?php 
                     the_post();
                ?> 

                <div class="post_box">
					
                    <div class="post_box_right" style="width:100%;">
                        <h2>
                            <?php the_title() ?>
                        </h2>

                        <p><?php the_content() ?></p>

                    </div>
					
                    <div class="cleaner"></div>
				</div>
                
            <div class="cleaner"></div>
        </div>
        <!-- END CONTENT -->

        <?php get_footer() ?>
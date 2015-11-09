<div id="tooplate_sidebar">
            <div class="sidbar_box">
                <?php get_search_form() ?>
            </div>
            
            <div class="sidbar_box">
                <h4>Categories</h4>
                <ul class="tooplate_list">
                    <?php
                        foreach(get_categories() as $category){
                    ?>
                    <li>
                        <a href="<?php echo get_category_link($category->term_id) ?>">
                            <?php echo $category->name ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            
            <div class="sidbar_box">
                <h4>Recent comments</h4>
                <div class="recent_comment_box">
                    <a href="#">Maecenas vel ligula dolor</a>
                    <p>Curabitur pellentesque varius nibh, sit amet ultrices urna lobortis ac.</p>
                </div>
                
                <div class="recent_comment_box">
                    <a href="#">Aenean feugiat mattis </a>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                </div>
                
                <div class="recent_comment_box last_recent_comment_box">
                    <a href="#"> Lacus enim id lacinia in</a>
                    <p>Curabitur ullamcorper ultricies nisi.  Nam eget dui. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                </div>  
            </div>
            
            <div class="cleaner"></div>
        </div>
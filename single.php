<?php get_header(); ?>


    <body>

        <?php
            global $lang;
	        include("main_menu.php");
        ?>

        
        <div class="container heighten-row">
            <div class="col-md-8">
	            
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
	                        <div class="post">
                                <?php the_post_thumbnail(); ?>
                                <?php the_content(); ?>
                                <p class="postmetadata">
                                    <?php  /*the_author();*/ ?> <?php edit_post_link('Edit', '', ''); $numPosts++; ?>
                                </p>	
	                        </div>

                    <?php endwhile; ?>
                <?php endif; //end have_posts <div class="up_arrow"></div> ?> 
                    
            </div>
            
            <div class="col-md-4">
                <?php get_sidebar("single_right"); ?>
                <?php get_sidebar("titlepage_right"); ?>
            </div> <!-- col-md-9 -->
        </div>
        

        <?php get_footer(); ?>

    </body>
    
    
</html>

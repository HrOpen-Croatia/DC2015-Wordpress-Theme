<?php get_header(); 
    # Multilanguage quick hack (support)
	$tmp = explode("/",$_SERVER['REQUEST_URI']);
	$lang = $tmp[1];
?>

    <body>

        <?php include("main_menu.php"); ?>

        <?php include("banner.php"); ?>

        <div class="row">
            <div class="container">
            
	            <div class="col-md-8">
                    <?php if(have_posts()) : ?><?php while(have_posts()) :  the_post(); ?>
	                    <h1><?php the_title(); ?></h1>
	                    <div class="post">
                            <?php the_post_thumbnail(); ?>
                            <?php the_content(); ?>
                            <p class="postmetadata">
                                <?php  /*the_author();*/ ?> <?php edit_post_link('Edit', '', '');?>
                            </p>	
                        </div>
                        <?php break; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div> <!-- col-md-9 -->

                <!-- Sidebar -->
	            <div class="col-md-4">
	                <?php get_sidebar('titlepage_right'); ?>
	            </div>
	            
            </div><!-- row -->
        </div>
            
        <?php include("speakers-part.php"); ?>

        <?php include("quick-links-part.php"); ?>
        

        <?php get_footer(); ?>

    </body>
</html>

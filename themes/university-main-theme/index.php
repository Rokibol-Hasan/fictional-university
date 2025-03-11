<?php
get_header();
while (have_posts()) {
    the_post(); ?>
    <h4 style=""> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <p> <?php the_content(); ?> </p>
    <hr>
<?php } 
get_footer( );
?>

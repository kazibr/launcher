<?php get_header(); ?>

<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            ?>
            <h2><?php the_title();?></h2>

            <div class="thumbnail-img"><?php the_post_thumbnail('thumbnail');?></div>

            <small>Posted on: <?php the_date('F j, Y');?> at <?php the_time('g:i a')?> in <?php the_category();?></small>
            <p><?php the_content();?></p>
            <hr>


            <?php
        }
    }
?>

<?php get_footer(); ?>
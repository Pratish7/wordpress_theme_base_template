<!--this is require to add new posts using wordpress post add function-->

<?php get_header(); ?>


<div class="container">

    <!--get data from wordpress page editor-->
    <h1><?php the_title(); ?><h1>

    <!--get contentg from wordpress page editor-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if(has_post_thumbnail();)?>
            <img src="<?php the_post_thumbnail_url('largest')?>" class="img-fluid">
        <?php endif;?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>
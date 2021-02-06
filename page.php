<!--this is require to add new pages using wordpress page add function-->

<?php get_header(); ?>


<div class="container">

    <h1>Hello</h1>

    <!--get data from wordpress page editor-->
    <h1><?php the_title(); ?><h1>

    <!--get contentg from wordpress page editor-->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>
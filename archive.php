<!--this is require to add new pages using wordpress page add function-->

<?php get_header(); ?>


<div class="container">

    <!--get data from wordpress page editor-->
    <h1><?php single_cat_title(); ?><h1>

            <!--get contentg from wordpress page editor-->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3><?php the_title() ?></h3>
                            <?php the_content(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>

</div>


<?php get_footer(); ?>
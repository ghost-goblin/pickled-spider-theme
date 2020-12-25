<?php get_header(); ?>

<img class="front-page-img" src=<?php echo get_template_directory_uri()."/images/drawing.png"?> alt="#">
<section class="page-wrap">
<div class="container">
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('includes/section', 'content'); ?>
</div>
</section>

<?php get_footer(); ?>
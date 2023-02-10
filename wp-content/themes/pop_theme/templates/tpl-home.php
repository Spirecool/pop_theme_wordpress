<?php  /* Template Name: Modèle page d'accueil*/ ?>

<?php get_header(); ?>

<div class="container">
    <div>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    </div>
</div>

<?php get_footer(); ?>


<?php get_header(); ?>

<div class="container">
    <div>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
        <p>Custom Post Type: Projet</p>
    </div>

    <div>
        <?php the_field('introduction'); ?>
    </div>
    <br>

    <div>
        <?php
        $checkbox = get_field('show_homepage_button');
        if ($checkbox) : ?>
            <button> Bouton </button>
        <?php endif ?>
    </div>

    <!-- <div>
        <h2> Afficher un autre projet : </h2>
        <br>
        <?php $projectOneID = 33; ?>
        <?php $projectTwoID = 32; ?>
        <?php the_field('introduction', $projectTwoID); ?>
    </div> -->

    <div>

        <h3> Suggestion de projets </h3>

        <?php $params = array(
            'post_type' => 'project',
            'numberposts' => 2,
            'exclude' => [$post->ID],
        ) ?>

        <?php $projectsSuggested = get_posts($params) ?>
        <?php var_dump($projectsSuggested) ?>

    </div>

</div>

<?php get_footer(); ?>
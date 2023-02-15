<?php  /* Template Name: Modèle page index des Projets*/ ?>

<main class="container">

    <h1> <?php the_title() ?></h1>
    <p> <?php the_field('projects_page_introduction')?> </p>


    <?php $numberPosts = get_field('number_projects_to_show') ?>

    <?php $typeProjects = get_field('type_project') ?> 

    <?php $params = array(
        'post_type' => 'project',
        'numberposts' => intval($numberPosts),
        'meta_key'      => 'state',
        'meta_value'    => $typeProjects
        )
    ?>

    <?php $allProjects = get_posts($params) ?>

    <ul>
        <?php for ($i=0; $i < count($allProjects) ; $i++) : ?>
            <li>
                <?php $idProject = $allProjects[$i]->ID ?>
                <a href="<?php echo get_permalink($idProject) ?>"> <?php echo get_the_title($idProject) ?> </a>
            </li>
        <?php endfor ?>
    </ul>

    


</main>


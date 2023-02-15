<?php  /* Template Name: Modèle page d'accueil*/ ?>

<?php get_header(); ?>

<main class="container">

    <section>

        <div>
            <h1><?php the_title() ?></h1>
        </div>
        <div>
            <p>
                <?php the_field('homepage_introduction') ?>
            </p>
        </div>
        <div>
            <!-- <?php var_dump(get_field('cover')); ?> -->
            <?php $urlImage = get_field('cover')['url']; ?>
            <?php $altImage = get_field('cover')['alt']; ?>
            <?php
            $image = get_field('cover');
            if (!empty($image)) :
            ?>
                <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $altImage; ?>">
            <?php endif; ?>
        </div>

    </section>


    <section class="my-5">

        <h2 class="my-4"> À propos de moi </h2>

        <?php the_field('text_about'); ?>

        <div>
            <?php $link = get_field('link_about'); ?>
            <?php $url = $link['url']; ?>
            <?php $title = $link['title']; ?>
            <?php $target = $link['target']; ?>
            <button class="btn btn-primary mt-3">
                <a href="<?php echo $url ?>" target="<?php echo $target ?>"> <?php echo $title ?></a>
            </button>
        </div>

    </section>

    <section class="my-5">

        <h2 class="my-4"> Mes projets </h2>

        <p>
            <?php the_field('project_introduction'); ?>
        </p>

        
        <?php $projects = get_field('projects'); ?>
        <ul>
            <?php for ($i=0; $i < count($projects) ; $i++) : ?>
                <li>
                    <?php $idProject = $projects[$i] ?>
                    <h3> <?php echo get_the_title($idProject); ?></h3>
                    <img src="<?php echo get_field('cover', $idProject) ?>" alt="">
                </li> 
            <?php endfor ?>      
        </ul>


    </section>

</main>

<?php get_footer(); ?>
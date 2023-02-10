<?php

/* 
CPT Projets 
*/

function create_custom_post_type_project()
{
    // Fonction WP
    register_post_type(
        'project',
        array(
            'label' => 'Projets',
            'public' => true
        )
    );
}

add_action('init', 'create_custom_post_type_project');

/* 
Taxonomy Projets 
*/

function create_taxonomy_projects() {

    // Fonction WP
    register_taxonomy(
        'taxonomy_project_type',
        'project',
        array(
            'hierarchical' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Types de projet',
                'singular_name' => 'Type de projet'
                )                  
            )
        );

    register_taxonomy(
        'taxonomy_project_clients',
        'project',
        array(
            'hierarchical' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Types de clients',
                'singular_name' => 'Type de client'
                )                  
            )
        );
}

add_action('init', 'create_taxonomy_projects');


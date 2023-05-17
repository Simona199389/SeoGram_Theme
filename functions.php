<?php

add_theme_support('post-thumbnails');

function setDefaultImageIfEmpty($post){

        // Get the post thumbnail
        $thumbnail = get_the_post_thumbnail_url($post);


        if($thumbnail===false){
            return get_template_directory_uri()
                    . DIRECTORY_SEPARATOR
                    . 'img'
                    . DIRECTORY_SEPARATOR
                    . 'img-not-found.png';
        }
        return $thumbnail;
}

function registerMenu(){
        register_nav_menu('main-menu','Main menu');
        register_nav_menu('footer-menu','Footer menu');
}
add_action('init','registerMenu');


function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function registerSidebar(){
        $options = [
                'id' => 'sidebar',
                'name' => 'Sidebar',
                'description' => 'This is right Sidebar',
                'before_widget' => '<div style="margin-top:44px">',
                'after_widget' => '</div>',

        ];
        register_sidebar($options);
};

add_action('widgets_init','registerSidebar');

function registerAdminMenu(){
        add_menu_page('Theme settings', 'Theme settings',
                        'manage_options','theme-settings',
                        'showThemeSettings', 'dashicons-admin-settings',50);
};

function showThemeSettings(){
        include 'views' . DIRECTORY_SEPARATOR . 'theme-settings.php';

};

add_action('admin_menu', 'registerAdminMenu');

function registerThemeOptions(){
        register_setting('hpg','home_page_heading');
        register_setting('hpg','home_sub_heading');
        register_setting('hpg','nav_bar_color');
};

add_action('admin_init','registerThemeOptions');
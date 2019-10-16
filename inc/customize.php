<?php 
    function bs4wp_customize_register($wp_customize) {
        // Rodapé
        $wp_customize -> add_section('footer', array(
            'title' => __('Rodapé', 'BS 4 + WP'),
            'description' => sprintf(__('Opções para o rodapé', 'BS 4 + WP')),
            'priority' => 20
        ));

        $wp_customize -> add_setting('footer_title', array(
            'default' => __('Criando um tema de WordPress', 'BS 4 + WP'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_title', array(
            'label' => __('Titulo do rodapé', 'BS 4 + WP'),
            'section' => 'footer',
            'pririty' => 1
        ));

        $wp_customize -> add_setting('footer_text', array(
            'default' => __('Feito por mim com muita dedicação', 'BS 4 + WP'),
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_text', array(
            'label' => __('texto do rodapé', 'BS 4 + WP'),
            'section' => 'footer',
            'pririty' => 2
        ));
    }
    add_action('customize_register', 'bs4wp_customize_register');
?>
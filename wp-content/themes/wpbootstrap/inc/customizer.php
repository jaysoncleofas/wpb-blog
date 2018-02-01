<?php
  function wpb_customize_register($wp_customize)
  {
      // Showcase Section
      $wp_customize->add_section('showcase', array(
        'title'       => __('Showcase', 'WPB-BLOG'),
        'description' => sprintf(__('Options for showcase', 'WPB-BLOG')),
        'priority'    => 130
      ));

      ///Head image
      $wp_customize->add_setting('showcase_image', array(
          'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
          'type'    => 'theme_mod'
      ));

      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'WPB-BLOG'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
      )));

      ///Head title
      $wp_customize->add_setting('showcase_heading', array(
          'default' => _x('Custon Bootstrap Wordpress Theme', 'WPB-BLOG'),
          'type'    => 'theme_mod'
      ));

      $wp_customize->add_control('showcase_heading', array(
          'label' => __('Heading', 'WPB-BLOG'),
          'section' => 'showcase',
          'priority' => 2
      ));

      //Heading text
      $wp_customize->add_setting('showcase_text', array(
          'default' => _x("Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.", 'WPB-BLOG'),
          'type'    => 'theme_mod'
      ));

      $wp_customize->add_control('showcase_text', array(
          'label' => __('Text', 'WPB-BLOG'),
          'section' => 'showcase',
          'priority' => 3
      ));

      //Heading button url
      $wp_customize->add_setting('btn_url', array(
          'default' => _x('http://text.com', 'WPB-BLOG'),
          'type'    => 'theme_mod'
      ));

      $wp_customize->add_control('btn_url', array(
          'label' => __('Button URL', 'WPB-BLOG'),
          'section' => 'showcase',
          'priority' => 4
      ));

      //Heading button text
      $wp_customize->add_setting('btn_text', array(
          'default' => _x('Take a look', 'WPB-BLOG'),
          'type'    => 'theme_mod'
      ));

      $wp_customize->add_control('btn_text', array(
          'label' => __('Button text', 'WPB-BLOG'),
          'section' => 'showcase',
          'priority' => 5
      ));
  }

  add_action('customize_register', 'wpb_customize_register');

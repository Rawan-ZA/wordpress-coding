
<?php
function Lhander_theme_customize_part_two(WP_Customize_Manager $customize)
{
    //panal
    //section
    //contorl =>setting
    $customize->add_section('footer-setting', [
        'title'         => 'Lhander Footer Setting',
        'description'   => 'control of footer text and setting',
        'priority'      => 90
    ]);

    $customize->add_setting('copyright-text');
    $customize->add_control('copyright-text', [
        'type'          =>   'text',
        'label'         =>  __('copyright-text', 'lhander'),
        'description'   => 'Control of footer copyright',
        'section'       =>  'footer-setting',
        'priority'      =>  1,

    ]);
    $customize->add_setting('footer-heading-1');
    $customize->add_control('footer-heading-1', [
        'type'          =>   'text',
        'label'         =>  __('First Heading in Footer', 'lhander'),
        'description'   =>  'Change first heading in footer',
        'section'       =>  'footer-setting',
        'priority'      =>   5,

    ]);
    $customize->add_setting('footer-heading-2');
    $customize->add_control('footer-heading-2', [
        'type'          =>   'text',
        'label'         =>  __('Second Heading in Footer', 'lhander'),
        'description'   =>  'Change second heading in footer',
        'section'       =>  'footer-setting',
        'priority'      =>   6,

    ]);
    $customize->add_setting('footer-heading-3');
    $customize->add_control('footer-heading-3', [
        'type'          =>   'text',
        'label'         =>  __('Third Heading in Footer', 'lhander'),
        'description'   =>  'Change third heading in footer',
        'section'       =>  'footer-setting',
        'priority'      =>   7,

    ]);
    $customize->add_setting('footer-subscribe-text');
    $customize->add_control('footer-subscribe-text', [
        'type'          =>   'text',
        'label'         =>  __('Subscribe Text in Footer', 'lhander'),
        'description'   =>  'Change subscribe text in footer',
        'section'       =>  'footer-setting',
        'priority'      =>   4,

    ]);
    $customize->add_setting('footer-info');
    $customize->add_control('footer-info', [
        'type'          =>   'textarea',
        'label'         =>  __('Footer Information', 'lhander'),
        'description'   => 'Insert your informaton to make easy contact for you',
        'section'       =>  'footer-setting',
        'priority'      =>  3,

    ]);
    $customize->add_setting('back-to-top');
    $customize->add_control('back-to-top', [
        'type'          =>   'checkbox',
        'label'         =>  __('Show Back To Top', 'lhander'),
        'section'       =>  'footer-setting',
        'value'      =>  1,

    ]);
    $customize->add_section('home-section', [
        'title'         => 'LHander Home Section Setting',
        'description'   => 'Control of main section image',
        'priority'      => 30
    ]);
    // footer logo in home section 
    $customize->add_setting('footer-logo');
    $customize->add_control(new WP_Customize_Image_Control($customize, 'footer-logo', [
        'label'   => __('Change Footer Logo '),
        'section'       =>  'footer-setting',
    ]));
    // image in home section 
    $customize->add_setting('change-image-home');
    $customize->add_control(new WP_Customize_Image_Control($customize, 'change-image-home', [
        'label'   => __('Change Home Section Image'),
        'section'       =>  'home-section',
    ]));

    $customize->selective_refresh->add_partial('footer-logo', [
        'selector'   => '.footer-main .col-four',
    ]);
    //befor footer section 
    $customize->add_section('links-setting-section', [
        'title'         => 'Lhander Links  Setting',
        'description'   => 'control of free setion  text and setting',
        'priority'      => 80
    ]);
    $customize->add_setting('free-heading');
    $customize->add_control('free-heading', [
        'type'          =>   'text',
        'label'         =>  __('change  heading ', 'lhander'),
        'section'       =>  'links-setting-section',
        'priority'      => 1,
    ]);
    $customize->add_setting('free-text');
    $customize->add_control('free-text', [
        'type'          =>   'text',
        'label'         =>  __('change description  ', 'lhander'),
        'section'       =>  'links-setting-section',
        'priority'      => 2,
    ]);
    $customize->add_setting('background-color');
    $customize->add_control('background-color', [
        'type'          =>   'color',
        'label'         =>  __('change background color ', 'lhander'),
        'section'       =>  'links-setting-section',
        'priority'      => 3,
    ]);
    $customize->add_setting('app-stor-link');
    $customize->add_control('app-stor-link', [
        'type'          =>   'url',
        'label'         =>  __('Add Apple Stor Link', 'lhander'),
        'section'       =>  'links-setting-section',
        'priority'      => 4,
    ]);
    $customize->add_setting('google-stor-stor');
    $customize->add_control('google-stor-stor', [
        'type'          =>   'url',
        'label'         =>  __('Add Google Stor Link', 'lhander'),
        'section'       =>  'links-setting-section',
        'priority'      => 5,
    ]);
    $customize->add_setting('win-stor-link');
    $customize->add_control('win-stor-link', [
        'type'          =>   'url',
        'label'         =>  __('Add Window Stor Link', 'lhander'),
        'section'       =>  'links-setting-section',
        'priority'      => 6,
    ]);
    //show pincel icon
    $customize->selective_refresh->add_partial('free-heading', [
        'selector'   => '#cta .cta-content .col-twelve',
    ]);

    $customize->add_setting('subscrip-sidebar');
    $customize->add_control('subscrip-sidebar', [
        'type'     => 'checkbox',
        'label'   => __('Show Subscripe widgets'),
        'section'       =>  'footer-setting',
        'value'      =>  1,
    ]);
}


add_action('customize_register', 'Lhander_theme_customize_part_two');

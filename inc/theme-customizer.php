<?php

function Lhander_theme_customize(WP_Customize_Manager $customizer)
{
    //panal
    //section
    //contorl =>setting

    // sub heading in home section 
    $customizer->add_setting('sub-heading');
    $customizer->add_control('sub-heading', [
        'type'          =>   'text',
        'label'         =>  __('Add Sub Headign In Main Section', 'lhander'),
        'section'       =>  'home-section',
        'value'      =>  2,

    ]);
    //main heading in home section 
    $customizer->add_setting('main-heading');
    $customizer->add_control('main-heading', [
        'type'          =>   'text',
        'label'         =>  __('Add Main Headign In Main Section', 'lhander'),
        'section'       =>  'home-section',
        'priority'      => 3,
    ]);
    //button text in home section 
    $customizer->add_setting('button-text');
    $customizer->add_control('button-text', [
        'type'          =>   'text',
        'label'         =>  __('Add Main Headign In Main Section', 'lhander'),
        'section'       =>  'home-section',
        'priority'      => 4,
    ]);
    //button text in home section 
    $customizer->add_setting('button-color');
    $customizer->add_control('button-color', [
        'type'          =>   'color',
        'label'         =>  __('change button color', 'lhander'),
        'section'       =>  'home-section',
        'priority'      => 4,
    ]);
    //main heading in home section 
    $customizer->add_setting('upload-url');
    $customizer->add_control('upload-url', [
        'type'          =>   'url',
        'label'         =>  __('Upload URL for video to add in iframe', 'lhander'),
        'section'       =>  'home-section',
        'priority'      => 10,
    ]);

    //change process section 
    //  add process section 
    $customizer->add_section('process-section', [
        'title'         => ' Lhander Process Section Setting',
        'description'   => 'Control of process section ',
        'priority'      => 30
    ]);
    //chang process sub-heading
    $customizer->add_setting('process-sub-heading');
    $customizer->add_control('process-sub-heading', [
        'type'          =>   'text',
        'label'         =>  __('change sub heading  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 1,
    ]);
    $customizer->add_setting('process-sub-heading-color');
    $customizer->add_control('process-sub-heading-color', [
        'type'          =>   'color',
        'label'         =>  __('change sub heading color', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 2,
    ]);
    $customizer->add_setting('process-main-heading');
    $customizer->add_control('process-main-heading', [
        'type'          =>   'text',
        'label'         =>  __('change main heading ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 3,
    ]);
    $customizer->add_setting('process-main-heading-color');
    $customizer->add_control('process-main-heading-color', [
        'type'          =>   'color',
        'label'         =>  __('change main heading  color', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 4,
    ]);
    $customizer->add_setting('process_text');
    $customizer->add_control('process_text', [
        'type'          =>   'text',
        'label'         =>  __('change process text  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 5,
    ]);
    $customizer->add_setting('process-text-color');
    $customizer->add_control('process-text-color', [
        'type'          =>   'color',
        'label'         =>  __('change process text color', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 6,
    ]);
    //show pincel icon
    $customizer->selective_refresh->add_partial('sub-heading', [
        'selector'   => '#intro .intro-content',
    ]);
    $customizer->selective_refresh->add_partial('process-sub-heading', [
        'selector'   => '#process .with-bottom-line',
    ]);
    $customizer->add_setting('left-text-1');
    $customizer->add_control('left-text-1', [
        'type'          =>   'text',
        'label'         =>  __('change left process text  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 6,
    ]);
    $customizer->add_setting('left-text-2');
    $customizer->add_control('left-text-2', [
        'type'          =>   'text',
        'label'         =>  __('change left process text  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 7,
    ]);
    $customizer->add_setting('right-text-3');
    $customizer->add_control('right-text-3', [
        'type'          =>   'text',
        'label'         =>  __('change right process text  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 8,
    ]);
    $customizer->add_setting('right-text-4');
    $customizer->add_control('right-text-4', [
        'type'          =>   'text',
        'label'         =>  __('change right process text ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 9,
    ]);
    $customizer->add_setting('process-text-color');
    $customizer->add_control('process-text-color', [
        'type'          =>   'color',
        'label'         =>  __('change process text color', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 10,
    ]);

    $customizer->add_setting('left-icon-1');
    $customizer->add_control('left-icon-1', [
        'type'          =>   'number',
        'label'         =>  __('change left process number  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 11,
    ]);
    $customizer->add_setting('left-icon-2');
    $customizer->add_control('left-icon-2', [
        'type'          =>   'number',
        'label'         =>  __('change  left process number  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 12,
    ]);
    $customizer->add_setting('right-icon-3');
    $customizer->add_control('right-icon-3', [
        'type'          =>   'number',
        'label'         =>  __('change  right process number  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 13,
    ]);
    $customizer->add_setting('right-icon-4');
    $customizer->add_control('right-icon-4', [
        'type'          =>   'number',
        'label'         =>  __('change right  process number  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 14,
    ]);

    $customizer->add_setting('left-heading-1');
    $customizer->add_control('left-heading-1', [
        'type'          =>   'text',
        'label'         =>  __('change left process text  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 15,
    ]);
    $customizer->add_setting('left-heading-2');
    $customizer->add_control('left-heading-2', [
        'type'          =>   'text',
        'label'         =>  __('change right process heading  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 16,
    ]);
    $customizer->add_setting('left-heading-3');
    $customizer->add_control('left-heading-3', [
        'type'          =>   'text',
        'label'         =>  __('change right process heading  ', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 17,
    ]);
    $customizer->add_setting('left-heading-4');
    $customizer->add_control('left-heading-4', [
        'type'          =>   'text',
        'label'         =>  __('change left process heading', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 18,
    ]);
    $customizer->add_setting('process-heading-color');
    $customizer->add_control('process-heading-color', [
        'type'          =>   'color',
        'label'         =>  __('change process heading color', 'lhander'),
        'section'       =>  'process-section',
        'priority'      => 19,
    ]);

    $customizer->add_setting('change-process-image');
    $customizer->add_control(new WP_Customize_Image_Control($customizer, 'change-process-image', [
        'label'   => __('Change Process Section Image'),
        'section'       =>  'process-section',
        'priority'      => 20,
    ]));
    //show pincel icon
    $customizer->selective_refresh->add_partial('left-icon-1', [
        'selector'   => '.process-content .left-side',
    ]);

    //  add featured section 
    $customizer->add_section('lhander-featured-section', [
        'title'         => ' Lhander Featured Section Setting',
        'description'   => 'Control of featured section ',
        'priority'      => 50
    ]);
    $customizer->add_setting('featured-sub-heading');
    $customizer->add_control('featured-sub-heading', [
        'type'          =>   'text',
        'label'         =>  __('Change sub heading', 'lhander'),
        'section'       =>  'lhander-featured-section',
        'priority'      => 1,
    ]);
    $customizer->add_setting('featured-main-heading');
    $customizer->add_control('featured-main-heading', [
        'type'          =>   'text',
        'label'         =>  __('Chang main heading ', 'lhander'),
        'section'       =>  'lhander-featured-section',
        'priority'      => 2,
    ]);;
    $customizer->add_setting('featured-desc');
    $customizer->add_control('featured-desc', [
        'type'          =>   'text',
        'label'         =>  __('Change description and details ', 'lhander'),
        'section'       =>  'lhander-featured-section',
        'priority'      => 3,
    ]);
    $customizer->add_setting('change-featured-image');
    $customizer->add_control(new WP_Customize_Image_Control($customizer, 'change-featured-image', [
        'label'   => __('Change Featured Section Image'),
        'section'       =>  'lhander-featured-section',
        'priority'      => 5,
    ]));

    //    show pincel icon
    $customizer->selective_refresh->add_partial('featured-sub-heading', [
        'selector'   => '#features .section-intro',
    ]);

    //    priceing section 

    //  add featured section 
    $customizer->add_section('lhander-priceing-section', [
        'title'         => ' Lhander Priceing Section Setting',
        'description'   => 'Control of priceing section ',
        'priority'      => 60
    ]);
    $customizer->add_setting('priceing-sub-heading');
    $customizer->add_control('priceing-sub-heading', [
        'type'          =>   'text',
        'label'         =>  __('Change sub heading', 'lhander'),
        'section'       =>  'lhander-priceing-section',
        'priority'      => 1,
    ]);
    $customizer->add_setting('priceing-main-heading');
    $customizer->add_control('priceing-main-heading', [
        'type'          =>   'text',
        'label'         =>  __('Chang main heading ', 'lhander'),
        'section'       =>  'lhander-priceing-section',
        'priority'      => 2,
    ]);;
    $customizer->add_setting('priceing-desc');
    $customizer->add_control('priceing-desc', [
        'type'          =>   'text',
        'label'         =>  __('Change description and details ', 'lhander'),
        'section'       =>  'lhander-priceing-section',
        'priority'      => 3,
    ]);

    $customizer->add_setting('priceing-backgroud-color');
    $customizer->add_control('priceing-backgroud-color', [
        'type'          =>   'color',
        'label'         =>  __('Change background color and details ', 'lhander'),
        'section'       =>  'lhander-priceing-section',
        'priority'      => 3,
    ]);
    //    show pincel icon
    $customizer->selective_refresh->add_partial('priceing-sub-heading', [
        'selector'   => '#pricing .section-intro',
    ]);
    // add partial 

    $customizer->add_section('slider-widgets', [
        'title'         => 'Lhander Slider Widgets',
        'description'   => 'control of slider text and setting',
        'priority'      => 60
    ]);

    //  add Q&A section 
    $customizer->add_section('lhander-quastion-section', [
        'title'         => ' Lhander populer Quastion Section Setting',
        'description'   => 'Control of quation and answer section ',
        'priority'      => 90
    ]);
    $customizer->add_setting('quation-sub-heading');
    $customizer->add_control('quation-sub-heading', [
        'type'          =>   'text',
        'label'         =>  __('Change sub heading', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 1,
    ]);
    $customizer->add_setting('quastion-sub-heading-color');
    $customizer->add_control('quastion-sub-heading-color', [
        'type'          =>   'color',
        'label'         =>  __('Change sub heading', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 2,
    ]);
    $customizer->add_setting('quation-main-heading');
    $customizer->add_control('quation-main-heading', [
        'type'          =>   'text',
        'label'         =>  __('Change main heading', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 3,
    ]);
    $customizer->add_setting('quastion-main-heading-color');
    $customizer->add_control('quastion-main-heading-color', [
        'type'          =>   'color',
        'label'         =>  __('Change main heading color', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 5,
    ]);
    $customizer->add_setting('quastion-desc');
    $customizer->add_control('quastion-desc', [
        'type'          =>   'text',
        'label'         =>  __('Change Description ', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 6,
    ]);
    $customizer->add_setting('quastion-desc-color');
    $customizer->add_control('quastion-desc-color', [
        'type'          =>   'color',
        'label'         =>  __('Change description  color', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 7,
    ]);
    $customizer->add_setting('recommendction-heading');
    $customizer->add_control('recommendction-heading', [
        'type'          =>   'text',
        'label'         =>  __('Change heading of plan', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 7,
    ]);
    $customizer->add_setting('recommendction-text');
    $customizer->add_control('recommendction-text', [
        'type'          =>   'text',
        'label'         =>  __('Change description  of plan', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 7,
    ]);
    $customizer->add_setting('sign-up-link');
    $customizer->add_control('sign-up-link', [
        'type'          =>   'url',
        'label'         =>  __('Change Sign up link', 'lhander'),
        'section'       =>  'lhander-quastion-section',
        'priority'      => 7,
    ]);

    //show pincel icon
    $customizer->selective_refresh->add_partial('quation-main-heading', [
        'selector'   => '#faq .section-intro h1',
    ]);
    //show pincel icon
    $customizer->selective_refresh->add_partial('recommendction-heading', [
        'selector'   => '.section-ads .ad-content .h01',
    ]);
    //show pincel icon
    $customizer->selective_refresh->add_partial('free-heading', [
        'selector'   => '#cta .cta-content ',
    ]);
}
add_action('customize_register', 'Lhander_theme_customize');

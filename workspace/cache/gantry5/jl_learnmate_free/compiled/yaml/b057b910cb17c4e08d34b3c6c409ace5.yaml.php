<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/templates/jl_learnmate_free/particles/sidemenu.yaml',
    'modified' => 1486962627,
    'data' => [
        'name' => 'Side Menu',
        'description' => 'Gantry Side Menu',
        'type' => 'particle',
        'icon' => 'fa-align-left',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the menu particle.',
                    'default' => true
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'GANTRY5_PARTICLE_MENU_INFO'
                ],
                'menu' => [
                    'type' => 'menu.list',
                    'label' => 'Menu',
                    'description' => 'Select menu to be used with the particle.',
                    'default' => '',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'Use Default Menu',
                        '-active-' => 'Use Active Menu'
                    ]
                ],
                'base' => [
                    'type' => 'menu.item',
                    'label' => 'Base Item',
                    'description' => 'Select a menu item to always be used as the base for the menu display.',
                    'default' => '/',
                    'options' => [
                        '/' => 'Active'
                    ]
                ],
                'startLevel' => [
                    'type' => 'input.text',
                    'label' => 'Start Level',
                    'description' => 'Set the start level of the menu.',
                    'default' => 1
                ],
                'maxLevels' => [
                    'type' => 'input.text',
                    'label' => 'Max Levels',
                    'description' => 'Set the maximum number of menu levels to display.',
                    'default' => 0
                ],
                'renderTitles' => [
                    'type' => 'input.checkbox',
                    'label' => 'Render Titles',
                    'description' => 'Renders the titles/tooltips of the Menu Items for accessibility.',
                    'default' => 0
                ],
                'mobileTarget' => [
                    'type' => 'input.checkbox',
                    'label' => 'Mobile Target',
                    'description' => 'Check this field if you want this menu to become the target for Mobile Menu and to appear in Offcanvas',
                    'default' => 0
                ]
            ]
        ]
    ]
];

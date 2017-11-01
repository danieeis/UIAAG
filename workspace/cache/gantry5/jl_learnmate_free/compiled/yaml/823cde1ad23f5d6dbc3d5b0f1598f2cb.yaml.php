<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/templates/jl_learnmate_free/custom/particles/backtotop.yaml',
    'modified' => 1486962620,
    'data' => [
        'name' => 'Back To Top',
        'description' => 'Show a back to top button',
        'type' => 'atom',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable to the particles.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.text',
                    'label' => 'Class',
                    'description' => 'CSS class name for the particle.'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Back to top icon',
                    'description' => 'Choose icon back to top.',
                    'default' => 'fa fa-angle-double-up'
                ]
            ]
        ]
    ]
];

<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/ubuntu/workspace/templates/jl_learnmate_free/custom/particles/sticky.yaml',
    'modified' => 1486962619,
    'data' => [
        'name' => 'Sticky',
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
                'id' => [
                    'type' => 'input.text',
                    'label' => 'Sticky element',
                    'description' => 'Sticky element id'
                ],
                'spacing' => [
                    'type' => 'input.number',
                    'label' => 'Spacing',
                    'default' => 0
                ],
                'css.class' => [
                    'type' => 'input.text',
                    'label' => 'Class',
                    'description' => 'CSS class name for the particle.'
                ]
            ]
        ]
    ]
];

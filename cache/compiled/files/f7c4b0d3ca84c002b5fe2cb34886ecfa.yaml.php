<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Code/kiemdinhv2/user/themes/kdat/blueprints.yaml',
    'modified' => 1466826647,
    'data' => [
        'name' => 'Stim',
        'version' => '1.5.1',
        'description' => 'Stim is modern, responsive, and **built for speed**!',
        'icon' => 'paper-plane',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-afterburner2',
        'demo' => 'http://demo.getgrav.org/afterburner2-skeleton/',
        'keywords' => 'afterburner, theme, modern, fast, responsive',
        'bugs' => 'https://github.com/getgrav/grav-theme-afterburner2/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];

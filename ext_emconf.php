<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'My Camino',
    'description' => 'Overrides for the Camino Theme',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Wdb\\MyCamino\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'David Bruchmann',
    'author_email' => 'david.bruchmann@gmail.com',
    'author_company' => 'WDB',
    'version' => '1.0.0',
];

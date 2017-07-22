<?php

/**
 * Extension Manager/Repository config file for ext "distribution".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Distribution',
    'description' => 'Personal Website Theme',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99',
            'bootstrap_package' => '8.0.0-8.99.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Whmyr\\Distribution\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Willi Wehmeier',
    'author_email' => 'wwwehmeier@gmail.com',
    'author_company' => 'whmyr',
    'version' => '1.0.0',
];

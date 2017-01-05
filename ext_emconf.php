<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Force typo3_forum recordType',
    'description' => 'Force correct recordType for typo3_forum for femanager registered users',
    'category' => 'sv',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Cedric Ziel',
    'author_email' => 'cedric@cedric-ziel.com',
    'author_company' => '',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '',
            'extbase' => '',
            'femanager' => '',
            'typo3_forum' => '',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'CedricZiel\\FemanagerForceForum\\' => 'Classes'
        ]
    ]
];

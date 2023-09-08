<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Generate PDF with Dompdf',
    'description' => 'Simple way to generate a pdf file with the use of Dompdf (TYPO3 CMS)',
    'category' => 'misc',
    'author' => 'Manuel Schnabel',
    'author_email' => 'service@passionweb.de',
    'author_company' => 'PassionWeb Manuel Schnabel',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => ['typo3' => '11.5.0-12.4.99'],
        'conflicts' => [],
        'suggests' => [],
    ],
];

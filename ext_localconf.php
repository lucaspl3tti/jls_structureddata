<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'lucaspl3tti.jls_structureddata',
    'Data',
    array('Data' => 'show'),
    array('Data' => 'show')
);

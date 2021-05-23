<?php
defined('TYPO3_MODE') || die();

\call_user_func(function () {
    // Contact teaser
    $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase('jls_structureddata');
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'jls_structureddata',
        'Data',
        'LLL:EXT:jls_structureddata/Resources/Private/Language/locallang_db.xlf:jls_structureddata.data.controller'
    );
    $pluginSignature = strtolower($extensionName) . '_data';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        $pluginSignature,
        'FILE:EXT:jls_structureddata/Configuration/Flexform/StructuredData.xml'
    );

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'recursive,select_key,pages';
});

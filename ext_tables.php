<?php
defined('TYPO3') or die();

// TYPOSCRIPT

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('chf_geo', 'Configuration/TypoScript/', 'Cultural Heritage Framework: Geo Component');

// TSCONFIG

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:chf_geo/Configuration/TSConfig/setup.txt">
');

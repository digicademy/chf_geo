<?php
defined('TYPO3') or die();

// TYPOSCRIPT

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('chf_geo', 'Configuration/TypoScript/', 'Cultural Heritage Framework: Geo Component');

// TSCONFIG

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:chf_geo/Configuration/TSConfig/setup.txt">
');

// TABLE REGISTRATION

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_chfgeo_domain_model_toponym',
    'EXT:chf_geo/Resources/Private/Language/locallang_csh_tx_chfgeo_domain_model_toponym.xlf'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_chfgeo_domain_model_toponym'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_chfgeo_domain_model_featurecode',
    'EXT:chf_geo/Resources/Private/Language/locallang_csh_tx_chfgeo_domain_model_featurecode.xlf'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_chfgeo_domain_model_featurecode'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_chfgeo_domain_model_coordinates',
    'EXT:chf_geo/Resources/Private/Language/locallang_csh_tx_chfgeo_domain_model_coordinates.xlf'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_chfgeo_domain_model_coordinates'
);

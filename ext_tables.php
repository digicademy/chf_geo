<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

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

<?php
defined('TYPO3') or die();

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_coordinates',
        'label' => 'latitude',
        'label_alt' => 'longitude',
        'label_alt_force' => 1,
        'default_sortby' => 'ORDER BY parent',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => 2,
        'versioning_followPages' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
        ),
        'searchFields' => 'latitude,longitude',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('chf_geo') . 'Resources/Public/Icons/tx_chfgeo_domain_model_coordinates.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => '
            sys_language_uid,
            l10n_parent,
            l10n_diffsource,
            hidden,
            parent,
            latitude,
            longitude,
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
                sys_language_uid;;;;1-1-1,
                l10n_parent,
                l10n_diffsource,
                hidden,
                parent,
                latitude,
                longitude,
            '
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
                'default' => 0,
            ]
        ],
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_chfgeo_domain_model_coordinates',
                'foreign_table_where' => 'AND tx_chfgeo_domain_model_coordinates.pid=###CURRENT_PID### AND tx_chfgeo_domain_model_coordinates.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'latitude' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_coordinates.latitude',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => '0.00',
            ),
        ),
        'longitude' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_coordinates.longitude',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'default' => '0.00',
            ),
        ),
        'parent' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        'tablename' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
    ),
);

<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym',
        'label' => 'name',
        'default_sortby' => 'ORDER BY name',
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
        'searchFields' => 'name,label',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('chf_geo') . 'Resources/Public/Icons/tx_chfgeo_domain_model_toponym.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => '
            sys_language_uid,
            l10n_parent,
            l10n_diffsource,
            hidden,
            parent,
            name,
            label,
            featurecode,
            historical,
            certainty,
            coordinaes,
            statements
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
                sys_language_uid;;;;1-1-1,
                l10n_parent,
                l10n_diffsource,
                hidden;;1,
                parent,
                name,
                label,
                featurecode,
                historical,
                certainty,
                coordinaes,
                statements
            '
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_chfgeo_domain_model_toponym',
                'foreign_table_where' => 'AND tx_chfgeo_domain_model_toponym.pid=###CURRENT_PID### AND tx_chfgeo_domain_model_toponym.sys_language_uid IN (-1,0)',
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
        'parent' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym.parent',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array (
                    array('', '0'),
                ),
                'foreign_table' => 'tx_chfgeo_domain_model_toponym',
                'foreign_table_where' => 'ORDER BY name',
                'minitems' => 0,
                'maxitems' => 1,
            ),
        ),
        'name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym.name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'label' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym.label',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'featurecode' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym.featurecode',
            'config' => array(
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_chfgeo_domain_model_featurecode',
                'foreign_table_where' => 'AND tx_chfgeo_domain_model_featurecode.pid IN (###PAGE_TSCONFIG_IDLIST###) ORDER BY tx_chfgeo_domain_model_featurecode.code',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 1,
                'wizards' => Array(
                    'add' => Array(
                        'type' => 'script',
                        'title' => 'Add',
                        'icon' => 'actions-add',
                        'params' => Array(
                            'table' => 'tx_chfgeo_domain_model_featurecode',
                            'pid' => '###PAGE_TSCONFIG_IDLIST###',
                            'setValue' => 'prepend'
                        ),
                        'module' => array(
                            'name' => 'wizard_add',
                        ),
                    ),
                    'edit' => Array(
                        'type' => 'popup',
                        'title' => 'Edit',
                        'icon' => 'actions-open',
                        'JSopenParams' => 'height=550,width=900,status=0,menubar=0,scrollbars=1',
                        'popup_onlyOpenIfSelected' => 1,
                        'module' => array(
                            'name' => 'wizard_edit',
                        ),
                    ),
                ),
            )
        ),
        'historical' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym.historical',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'certainty' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym.certainty',
            'config' => array(
                'type' => 'input',
                'size' => 5,
                'eval' => 'trim,int'
            ),
        ),
        'coordinates' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym.coordinates',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_chfgeo_domain_model_coordinates',
                'foreign_field' => 'parent',
                'foreign_table_field' => 'tablename',
                'maxitems' => 1,
                'appearance' => array(
                    'collapseAll' => 1,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ),
            ),
        ),
        'statements' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:chf_geo/Resources/Private/Language/locallang_db.xlf:tx_chfgeo_domain_model_toponym.statements',
            'config' => array(
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_vocabulary_domain_model_statements',
                'foreign_table' => 'tx_vocabulary_domain_model_statements',
                'MM' => 'tx_vocabulary_statements_records_mm',
                'MM_match_fields' => array(
                    // ident field as workaround for possible bug in line 544 of \TYPO3\CMS\Core\Database\RelationHandler
                    // tablenames must be name of foreign table (statements) whereas ident is needed to distinguish between records from different tables
                    // otherwise relations are not kept/displayed correctly in this field
                    'ident' => 'tx_chfgeo_domain_model_toponym',
                    'tablenames' => 'tx_vocabulary_domain_model_statements',
                    'fieldname' => 'statements',
                ),
                'size' => 10,
                'minitems' => 0,
                'maxitems' => 9999,
                'wizards' => array(
                    'add' => Array(
                        'type' => 'popup',
                        'title' => 'Create new',
                        'icon' => 'actions-add',
                        'params' => array(
                            'table' => 'tx_vocabulary_domain_model_statements',
                            'pid' => '###PAGE_TSCONFIG_ID###',
                            'setValue' => 'prepend'
                        ),
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                        'module' => array(
                            'name' => 'wizard_add',
                        ),
                    ),
                    'edit' => Array(
                        'type' => 'popup',
                        'title' => 'LLL:EXT:vocabulary/Resources/Private/Language/locallang_db.xlf:wizard_edit',
                        'icon' => 'actions-open',
                        'JSopenParams' => 'height=550,width=900,status=0,menubar=0,scrollbars=1',
                        'popup_onlyOpenIfSelected' => 1,
                        'module' => array(
                            'name' => 'wizard_edit',
                        ),
                    ),
                ),
            ),
        ),
    ),
);

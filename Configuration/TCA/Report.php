<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_clubmanagement_domain_model_report'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_clubmanagement_domain_model_report']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, header, bodytext, datetime, type, games, images',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, header, bodytext;;;richtext:rte_transform[mode=ts_links], datetime, type, games, images, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_clubmanagement_domain_model_report',
				'foreign_table_where' => 'AND tx_clubmanagement_domain_model_report.pid=###CURRENT_PID### AND tx_clubmanagement_domain_model_report.sys_language_uid IN (-1,0)',
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
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'header' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_report.header',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'bodytext' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_report.bodytext',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'datetime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_report.datetime',
			'config' => array(
				'dbType' => 'datetime',
				'type' => 'input',
				'size' => 12,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => '0000-00-00 00:00:00'
			),
		),
		'type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_report.type',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_clubmanagement_domain_model_reporttype',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'games' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_report.games',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_clubmanagement_domain_model_game',
				'foreign_field' => 'report',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		'images' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_report.images',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => '',
				'foreign_field' => 'report',
				'maxitems'      => 9999,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),

		),
		
		'team' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

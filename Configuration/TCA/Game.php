<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_clubmanagement_domain_model_game'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_clubmanagement_domain_model_game']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, location, datetime, half_time_result, final_result, game_times, minutes_per_game_time, involved_teams, statistics',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, location, datetime, half_time_result, final_result, game_times, minutes_per_game_time, involved_teams, statistics, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_clubmanagement_domain_model_game',
				'foreign_table_where' => 'AND tx_clubmanagement_domain_model_game.pid=###CURRENT_PID### AND tx_clubmanagement_domain_model_game.sys_language_uid IN (-1,0)',
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

		'location' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_game.location',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'datetime' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_game.datetime',
			'config' => array(
				'dbType' => 'datetime',
				'type' => 'input',
				'size' => 12,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => '0000-00-00 00:00:00'
			),
		),
		'half_time_result' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_game.half_time_result',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'final_result' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_game.final_result',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'game_times' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_game.game_times',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'minutes_per_game_time' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_game.minutes_per_game_time',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'involved_teams' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_game.involved_teams',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_clubmanagement_domain_model_team',
				'MM' => 'tx_clubmanagement_game_team_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_clubmanagement_domain_model_team',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'statistics' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_game.statistics',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_clubmanagement_domain_model_statistics',
				'foreign_field' => 'game',
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
		
		'report' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
	),
);

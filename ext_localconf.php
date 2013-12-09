<?php
if (!defined ('TYPO3_MODE')) {
  die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
  $_EXTKEY,
  'Main',
  array(
    'Event' => 'list, calendar, upcoming, show, export',
  ),
  array(
    'Event' => 'list, calendar, upcoming, show, export',
  )
);

# ke_search indexer
if(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('ke_search')) {
  $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ke_search']['customIndexer'][] = '\GuteBotschafter\GbEvents\Hooks\EventIndexer';
}
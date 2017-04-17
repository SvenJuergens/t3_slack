<?php

$extPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('t3_slack');
if (!class_exists('Maknz\\Slack\\Client') || !class_exists('Maknz\\Slack\Attachment')) {
    require_once $extPath . '/Resources/Private/Libraries/vendor/autoload.php';
}


//test
if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][$_EXTKEY] =
        \SvenJuergens\T3Slack\Command\TestCommandController::class;
}

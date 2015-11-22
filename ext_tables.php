<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Bootstrap Grid Elements');
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('C1FceGrid', 'Content');

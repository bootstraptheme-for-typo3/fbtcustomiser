<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Cutomize Fluidbootstraptheme');
Tx_Flux_Core::registerProviderExtensionKey($_EXTKEY, 'Page');
Tx_Flux_Core::registerProviderExtensionKey($_EXTKEY, 'Content');



<?php
/**
 * TYPO3 Module configuration for the tx_phpmyadmin Extension
 *
 * @author		mehrwert <typo3@mehrwert.de>
 * @package		TYPO3
 * @subpackage	tx_phpmyadmin
 * @license		GPL
 * @version		$Id: conf.php 86837 2014-11-04 17:18:51Z mehrwert $
 */

	// Configuration
$MCONF['name'] = 'tools_txphpmyadmin';
$MCONF['script'] = '_DISPATCH';
$MCONF['access'] = 'admin';
$MCONF['PMA_subdir'] = 'res/phpMyAdmin-4.0.10.7-all-languages/';
$MCONF['PMA_script'] = 'index.php';
$MLANG['default']['tabs_images']['tab'] = 'thirdparty_db.gif';
$MLANG['default']['ll_ref'] = 'LLL:EXT:phpmyadmin/modsub/locallang_mod.php';

?>
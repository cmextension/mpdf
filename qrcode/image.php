<?php

defined('_JEXEC') or die;

/**
 * This file belongs to mPDF Joomla! library which was packaged by CMExtension.
 * mPDF is PHP library for generating PDF.
 * CMExtension only created this package for installing into Joomla! CMS.
 * All credits for mPDF belong to Ian Back and the contributors.
 */

	$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
	if (!$msg) $msg = "Le site du spipu\r\nhttp://spipu.net/";


	$err = isset($_GET['err']) ? $_GET['err'] : '';
	if (!in_array($err, array('L', 'M', 'Q', 'H'))) $err = 'L';
	
	require_once('qrcode.class.php');
	
	$qrcode = new QRcode(utf8_encode($msg), $err);
	$qrcode->disableBorder();
	$qrcode->displayPNG(200);
?>
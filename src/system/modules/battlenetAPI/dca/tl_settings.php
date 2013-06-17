<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');
	

	$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{battlenetapi_legend:hide},apilocale';
    
	$GLOBALS['TL_DCA']['tl_settings']['fields']['apilocale'] = array(
		'label' => array('Locale', 'Locale für die Api'),
		'inputType' => 'text',
		'eval' => array('maxlength' => 255, 'tl_class' => 'w50'),
	);
?>
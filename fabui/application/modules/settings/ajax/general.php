<?php
//error_reporting(E_ALL);
require_once $_SERVER['DOCUMENT_ROOT'].'/fabui/ajax/config.php';

/** GET DATA FROM POST */
$_red   = $_POST['red'];
$_green = $_POST['green'];
$_blue  = $_POST['blue'];

$_colors['r'] = $_red;
$_colors['g'] = $_green;
$_colors['b'] = $_blue;


/** GET UNITS */
$_units = json_decode(file_get_contents(FABUI_PATH.'config/config.json'), TRUE);

/** SET NEW COLOR */
$_units['color'] = $_colors;
file_put_contents(FABUI_PATH.'config/config.json', json_encode($_units));



echo json_encode(array('result'=>true));

?>
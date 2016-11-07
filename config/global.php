<?php
define("CONTROLADOR_DEFECTO", "Calendar");
define("ACCION_DEFECTO", "index");

/*
* Rutas comunes del app
* Vector relacional
* @autor: Alexis Ramos Mora - ramosalx1504@hotmail.com
*/
const RUTA = array(
		'css' => './css/',
		'js' => './js/',
		'assets' => './assets/',
		'bootstrap' => './assets/bootstrap-v3.3.7/css/bootstrap.min.css',

		'fullCalendar'=>'./assets/fullcalendar-v3.0.1/fullcalendar.min.css',
		'common'=> './view/components/'
	);

const SCRIPTS = array(
		'jQuery'=>'./assets/jQuery-v3.1.1/jquery.min.js',
		'bootstrap'=>'./assets/bootstrap-v3.3.7/js/bootstrap.min.js',
		'moment' => './assets/fullcalendar-v3.0.1/moment.min.js',
		'fullCalendar'=>'./assets/fullcalendar-v3.0.1/fullcalendar.min.js',
		'common' => './js/common.js'
	);

function getComponent($value='404'){
	$url = './view/components/'.$value.'.php';
	return $url;
}

$GLOBALS['_TITLE'] = 'Maxpedia';

const PROJECT_NAME = 'Maxpedia';

?>

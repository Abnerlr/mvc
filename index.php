<?php 
/**
* Proyecto para Aplicaciones Globales, UNA - Costa Rica
*
* Expediente digital de Mascotas.
*
* @autor Alexis Ramos Mora - ramosaxl1504@hotmail.com
* @autor Abner Ruiz 
* @autor Jorge  
* @autor Martín 
*
**/ ?>

<?php
		
		//controlador de session	
		session_start();
		//Configuración global
		require_once 'config/global.php';

		//Base para los controladores
		require_once 'core/ControladorBase.php';

		//Funciones para el controlador frontal
		require_once 'core/ControladorFrontal.func.php';


		//Cargamos controladores y acciones
		if( isset($_SESSION['status']) && $_SESSION['status'] == 'success'){

			if(isset($_GET["controller"])){	
			    $controllerObj=cargarControlador($_GET["controller"]);
			    lanzarAccion($controllerObj);
			}else{
			    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
			    lanzarAccion($controllerObj);
			}

		}else{
			//siempre q la session no sea válida redirige al login
			$controllerObj=cargarControlador('Login');
			    lanzarAccion($controllerObj);
		}
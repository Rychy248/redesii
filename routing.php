<?php 


$controllers=array(
	'login'=>['index','register','save','show','updateshow',
			'update','delete','search','error','login'],
	'semana1'=>['contenido','underConstruction'],
	'semana2'=>['contenido'],
	'semana3'=>['contenido'],
	'semana4'=>['contenido'],
	'semana5'=>['contenido'],
	'semana6'=>['contenido'],
	'semana7'=>['contenido'],
	'semana8'=>['contenido'],
	'semana9'=>['contenido'],
	// 'curso'=>['index','register','save','show',
	// 'updateshow','update','delete','search','error']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('login','error');
	}		
}else{
	call('login','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'login':
		require_once('Model/login.php');
		$controller= new UsuarioController();
		break;
		case 'semana1':
		require_once('Model/semana1.php');
		$controller= new Semana1Controller();
		break;
		case 'semana2':
		require_once('Model/semana2.php');
		$controller= new Semana2Controller();
		break;
		case 'semana3':
		require_once('Model/semana3.php');
		$controller= new Semana3Controller();
		break;
		case 'semana4':
		require_once('Model/semana4.php');
		$controller= new Semana4Controller();
		break;
		case 'semana5':
		require_once('Model/semana5.php');
		$controller= new Semana5Controller();
		break;
		case 'semana6':
		require_once('Model/semana6.php');
		$controller= new Semana6Controller();
		break;
		case 'semana7':
		require_once('Model/semana7.php');
		$controller= new Semana7Controller();
		break;
		case 'semana8':
		require_once('Model/semana8.php');
		$controller= new Semana8Controller();
		break;
		case 'semana9':
		require_once('Model/semana9.php');
		$controller= new Semana9Controller();
		break;
		// case 'curso':
		// require_once('Model/Curso.php');
		// $controller= new CursoController();
		// break;	
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>
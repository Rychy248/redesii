<?php 


$controllers=array(
	'login'=>['index','register','save','show','updateshow',
			'update','delete','search','error'],
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
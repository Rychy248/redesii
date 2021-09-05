<?php 
/**
* 
*/
class UsuarioController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('Views/login/bienvenido.php');
	}

	function register(){
		require_once('Views/login/register.php');
	}

	function save(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$user= new User($_POST['user'],$_POST['password'],"md5",$estado,);
		User::save($user);
		$this->show();
	}

	function show(){
		$listaUsers=User::all();

		require_once('Views/login/show.php');
	}

	function updateshow(){
		$usuario=$_GET['usuario'];
		$user=User::searchByUser($usuario);
		require_once('Views/login/updateshow.php');
	}

	function update(){
		$user = new User($_POST['usuario'],$_POST['password'],'md5',1);
		User::update($user);
		$this->show();
	}
	function delete(){
		$usuario=$_GET['usuario'];
		User::delete($usuario);
		$this->show();
	}

	function search(){
		if (!empty($_POST['usuario'])) {
			$usuario=$_POST['usuario'];
			$user=User::searchByUser($usuario);
			$listaUsers[]=$user;
			//var_dump($id);
			//die();
			require_once('Views/login/show.php');
		} else {
			$listaUsers=User::all();

			require_once('Views/login/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/login/error.php');
	}

}

?>
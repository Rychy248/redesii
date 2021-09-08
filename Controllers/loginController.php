<?php 
/**
* 
*/
class LoginController
{
	
	function __construct(){
		
	}

	function index(){
		require_once('Views/Login/bienvenido.php');
	}

	function register(){
		require_once('Views/Login/register.php');
	}

	function save(){
		$estado = "";
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$user= new User($_POST['user'],$_POST['password'],'md5',$estado,);
		User::save($user);
		$this->index();
		//$this->show();
	}

	function show(){
		$listaUsers=User::all();

		require_once('Views/Login/show.php');
	}

	function updateshow(){
		$usuario=$_GET['usuario'];
		$user=User::searchByUser($usuario);
		require_once('Views/Login/updateshow.php');
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
			require_once('Views/Login/show.php');
		} else {
			$listaUsers=User::all();

			require_once('Views/Login/show.php');
		}
		
		
	}
	function login(){
		if (!empty($_POST['usuario']) and !empty($_POST['password'])) {
			$usuario=$_POST['usuario'];
			$password=$_POST['password'];
			$user=User::tryLogin($usuario,$password);
			//$listaUsers[]=$user;
			//var_dump($id);
			//die();
			if ($user){
				require_once('Views/semana1/contenido.php');
			}
			else{
				$findUser = false;
				require_once('Views/Login/bienvenido.php');
			}
		} else {
			require_once('Views/Login/bienvenido.php');
		}
		
		
	}


	function error(){
		require_once('Views/Login/error.php');
	}

}

?>
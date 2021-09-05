<?php 
/**
* 
*/
class User
{
	private $user;
	private $password;
	private $metodo;
	private $estado;

	
	function __construct($user, $password,$metodo, $estado)
	{
		$this->setUser($user);
		$this->setPassword($password);
		$this->setMetodo($metodo);
		$this->setEstado($estado);		
	}

	public function getUser(){
		return $this->user;
	}

	public function setUser($user){
		$this->user = $user;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getMetodo(){
		return $this->metodo;
	}

	public function setMetodo($metodo){
		$this->metodo = $metodo;
	}

	public function getEstado(){

		return $this->estado;
	}

	public function setEstado($estado){
		
		if (strcmp($estado, 'on')==0) {
			$this->estado=1;
		} elseif(strcmp($estado, '1')==0) {
			$this->estado='checked';
		}elseif (strcmp($estado, '0')==0) {
			$this->estado='of';
		}else {
			$this->estado=0;
		}

	}

	public static function save($user){
		$db=Db::getConnect();
		//var_dump($alumno);
		//die();
		

		$insert=$db->prepare('INSERT INTO usuarios_login VALUES (:usuario,:contrasena,:metodo,:estado)');
		$insert->bindValue('usuario',$user->getUser());
		$insert->bindValue('contrasena',$user->getPassword());
		$insert->bindValue('metodo','md5');
		$insert->bindValue('estado',$user->getEstado());
		$insert->execute();
	}

	public static function all(){
		$db=Db::getConnect();
		$listaUsers=[];

		$select=$db->query('SELECT * FROM usuarios_login order by usuario');

		foreach($select->fetchAll() as $user){
			$listaUsers[]=new User($user['usuario'],$user['contrasena'],$user['metodo'],$user['estado']);
		}
		return $listaUsers;
	}

	public static function searchByUser($user){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM usuarios_login WHERE usuario=:usuario');
		$select->bindValue('usuario',$user);
		$select->execute();
		$userDb=$select->fetch();
		$user_finded = new User($userDb['usuario'],$userDb['contrasena'], $userDb['metodo'], $userDb['estado']);
		//var_dump($alumno);
		//die();
		return $user_finded;
	}
	public static function tryLogin($user,$password){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM usuarios_login WHERE usuario=:usuario AND contrasena=md5(:contrasena);');
		$select->bindValue('usuario',$user);
		$select->bindValue('contrasena',$password);
		$select->execute();
		$userDb=$select->fetch();
		if ($userDb){
			$user_finded = new User($userDb['usuario'],$userDb['contrasena'], $userDb['metodo'], $userDb['estado']);
			return $user_finded;
		}else{
			return false;
		}
		
		// }catch{
		// 	return $user_finded = [];
		//var_dump($alumno);
		//die();
	}

	public static function update($user){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE usuarios_login SET contrasena=md5(:contrasena), estado=:estado WHERE usuario=:usuario');
		$update->bindValue('contrasena',$user->getPassword());
		$update->bindValue('estado',$user->getEstado());
		$update->bindValue('usuario',$user->getUser());
		$update->execute();
	}

	public static function delete($usuario){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM usuarios_login WHERE usuario=:usuario');
		$delete->bindValue('usuario',$usuario);
		$delete->execute();		
	}
}

?>
<?php 
/**
* 
*/
class Semana7
{
	private $user;
	private $estado;

	
	function __construct($user, $estado)
	{
		$this->setUser($user);
		$this->setEstado($estado);		
	}

	public function getUser(){
		return $this->user;
	}

	public function setUser($user){
		$this->user = $user;
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

}

?>
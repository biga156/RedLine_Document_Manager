<?php

class Ctr_user extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("user", $action);
        $this->table="user";
        $this->classTable = "User";
        $this->cle = "use_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=User::findAll("user");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$_POST['use_passw']=password_hash($_POST['use_passw'], PASSWORD_DEFAULT);
			$u=new User();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			header("location:index.php?m=documents");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new User($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			User::supprimer("user","use_id",$_GET["id"]);
		}
		header("location:index.php?m=user");
	}
}

?>
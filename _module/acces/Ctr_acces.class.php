<?php

class Ctr_acces extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("acces", $action);
        $this->table="acces";
        $this->classTable = "Acces";
        $this->cle = "acc_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Acces::findAll("acces");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Acces();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			header("location:index.php?m=acces");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Acces($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Acces::supprimer("acces","acc_id",$_GET["id"]);
		}
		header("location:index.php?m=acces");
	}
}

?>
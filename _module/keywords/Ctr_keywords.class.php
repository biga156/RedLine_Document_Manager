<?php

class Ctr_keywords extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("keywords", $action);
        $this->table="keywords";
        $this->classTable = "Keywords";
        $this->cle = "key_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Keywords::findAll("keywords");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Keywords();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			header("location:index.php?m=keywords");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Keywords($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Keywords::supprimer("keywords","key_id",$_GET["id"]);
		}
		header("location:index.php?m=keywords");
	}
}

?>
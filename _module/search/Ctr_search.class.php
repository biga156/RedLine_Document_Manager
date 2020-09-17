<?php

class Ctr_search extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("search", $action);
        $this->table="search";
        $this->classTable = "Search";
        $this->cle = "sea_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		//$result=Files::findAll("search");
		if($_SESSION["profil"]==1){		
			if (isset($_GET['id'])) {
				$result=Search::afficherAllByID($_GET['id']);
			} else {
				$result=Search::afficherAll("files");
			}
		}else {
			if (isset($_GET['id'])) {
				$result=Search::afficherAllByID($_GET['id']);
			}else{
				header("location:index.php?m=search");
			}
		}
	

		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Search();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			
				header("location:index.php?m=documents");
			
			//header("location:index.php?m=search");
			
		} else {				
			$id = isset($_GET["sea_id"]) ? $_GET["sea_id"] : 0;
			$u=new Search($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Search::supprimer("search","sea_id",$_GET["id"]);
		}
		header("location:index.php?m=search");
	}
}

?>
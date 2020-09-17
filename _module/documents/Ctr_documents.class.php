<?php

class Ctr_documents extends Ctr_controleur {

	public $classTable;
 
    public function __construct($action) {
        parent::__construct("documents", $action);
        $this->table="documents";
        $this->classTable = "Documents";
        $this->cle = "doc_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		//$result=Documents::findAll("documents");
		if (isset($_SESSION["profil"])) {
			if($_SESSION["profil"]==1){
				$result=Documents::afficherAll();
			}else{
				$result=Documents::afficherParUser($_SESSION['use_id']);
			}
		} else {
			//header("location:index.php?m=authentification");
		}
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		if (isset($_POST["btSubmit"])) {
			$u=new Documents();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
			header("location:index.php?m=documents");
		} else {				
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$u=new Documents($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			$data=Files::afficherAllById($_GET['id']);
				foreach($data as $cle){
					 Files::supprimer("files","fil_id",$cle["fil_id"]);
			}
			$data=Search::afficherAllById($_GET['id']);
				foreach($data as $cle){
					 Search::supprimer("search","sea_id",$cle["sea_id"]);
			}
			Documents::supprimer("documents","doc_id",$_GET["id"]);
		}
		header("location:index.php?m=documents");
	}
	
}

?>
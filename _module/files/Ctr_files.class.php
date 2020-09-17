<?php


class Ctr_files extends Ctr_controleur {

	public $classTable;

    public function __construct($action) {
        parent::__construct("files", $action);
        $this->table="files";
        $this->classTable = "Files";
        $this->cle = "fil_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		//$result=Files::findAll("files");
		if($_SESSION["profil"]==1){		
			if (isset($_GET['id'])) {
				$result=Files::afficherAllByID($_GET['id']);
			} else {
				$result=Files::afficherAll("files");
			}
		}else {
			if (isset($_GET['id'])) {
				$result=Files::afficherAllByID($_GET['id']);
			}else{
				header("location:index.php?m=documents");
			}
		}
	

		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		
		if (isset($_POST["btSubmit"])) {
			extract($_POST);
			$u=new Files();
			$data=[];
			
			if (is_uploaded_file($_FILES['fil_src']['tmp_name'])) {
				$fil_name = $_FILES['fil_src']['name'];
				$fil_extension = pathinfo($fil_name, PATHINFO_EXTENSION);
				$fil_size = $_FILES['fil_src']['size'];
				$fil_src = 'D:\Storage\Temp\\' . $fil_name;
				$file = $_FILES['fil_src']['tmp_name'];
				move_uploaded_file($file, $fil_src);
			}
			$data['fil_name']=$fil_name;
			$data['fil_extension']=$fil_extension;
			$data['fil_size']=$fil_size;
			$data['fil_src']=$fil_src;
			$data['fil_type']=$fil_type;
			$data['fil_documents']=$fil_documents;
			//var_dump($fil_documents);	
			$u->chargerDepuisTableau($data);
			$u->sauver();
			header("location:index.php?m=files");
			
		} else {				
			$id = isset($_GET["fil_id"]) ? $_GET["fil_id"] : 0;
			$u=new Files($id);
			extract($u->data);	
			require $this->gabarit;
		}
	}
	

	//param GET id 
	function a_del() {
		if (isset($_GET["fil_id"])) {
			Files::supprimer("files","fil_id",$_GET["fil_id"]);
		}
		header("location:index.php?m=files");
	} 

	function a_open(){
		if (isset($_GET['fil_id'])) {
			$file=Files::findFile( $_GET['fil_id']);
			$filepath =  $file['fil_src'];
			$filename = $file['fil_name'];
			//var_dump($file);
			
			readfile($filepath );
			//fopen($filepath,'r');
		}
	}
	function a_download(){
		if (isset($_GET['fil_id'])) {
			$file=Files::findFile( $_GET['fil_id']);
		    $filepath =  $file['fil_src'];
		}
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);

       
        exit;
    }

//}
	}
}

?>
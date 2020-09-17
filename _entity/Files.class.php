<?php
class Files extends Entity {
	public function __construct($id=0) {
		parent::__construct("files", "fil_id",$id);
	}
	static function afficherAll() {
		$sql="select * from files, documents, user where fil_documents=doc_id and use_id=doc_user";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}

	static public function findFile($id) {
		$sql="select * from files where fil_id=$id";
		$statement = self::$link->prepare($sql);
		$statement->bindValue(":id",$id,PDO::PARAM_INT);
		if (!$statement->execute())
			exit; //erreur d'execution
		return $statement->fetch();
		
	}
	static function afficherAllById($id) {
		$sql="select * from files, documents, user where fil_documents=doc_id and use_id=doc_user and fil_documents=$id";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}
}
?>

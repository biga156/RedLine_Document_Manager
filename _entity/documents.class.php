<?php
class Documents extends Entity {
	public function __construct($id=0) {
		parent::__construct("documents", "doc_id",$id);
	}
	static function afficherAll() {
		$sql="select  * from documents, user where use_id=doc_user";
		//$sql="select  * from files, documents, user where fil_documents=doc_id and use_id=doc_user";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}

	static function afficherParUser($id) {
		$sql="select  * from documents, user where use_id=doc_user and use_id=$id";
		//$sql="select * from files, documents, user where fil_documents=doc_id and use_id=doc_user and use_id=$id";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}
	static function fileCounter($id) {
		$sql="select count(*) nb  from files where fil_documents=$id ";
		$result=self::$link->query($sql);
		return $result->fetch();		
	}
	static public function findDocument($id) {
		$sql="select * from documents where doc_id=$id";
		$statement = self::$link->prepare($sql);
		$statement->bindValue(":id",$id,PDO::PARAM_INT);
		if (!$statement->execute())
			exit; //erreur d'execution
		return $statement->fetch();
		
	}
	static function keyCounter($id) {
		$sql="select count(*) nb  from search where sea_documents=$id ";
		$result=self::$link->query($sql);
		return $result->fetch();		
	}

	static function kwSearch($id)
	{
		$sql = "select key_label from keywords, search where sea_keywords=key_id and sea_documents=$id";
		$result = self::$link->query($sql);

		$tab = $result->fetchAll();
		$chaine = "";
		foreach ($tab as $value) {
			$chaine .= $value["key_label"] . " ";
		}
		return $chaine;
	}
	static function OrderBydate($val) {
		if($val==0){
		$sql="select  * from documents, user where use_id=doc_user order by doc_date";
		}else{
			$sql="select  * from documents, user where use_id=doc_user order by doc_date desc";
		}
		//$sql="select  * from files, documents, user where fil_documents=doc_id and use_id=doc_user";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}
}
?>



<?php
class Search extends Entity {
	public function __construct($id=0) {
		parent::__construct("search", "sea_id",$id);
	}
	static function afficherAllById($id) {
		$sql="select * from search, keywords, documents where sea_documents=doc_id and sea_keywords=key_id and sea_documents=$id";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}
	static function afficherAll() {
		$sql="select * from search, keywords, documents where sea_documents=doc_id and sea_keywords=key_id ";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}
}
?>

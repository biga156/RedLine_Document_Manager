<?php
class User extends Entity {
	public function __construct($id=0) {
		parent::__construct("user", "use_id",$id);
	}
	static public function findUser($id) {
		$sql="select * from user, profil where use_id=$id and use_profil=pro_id";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}

	static public function findUserByUsername($use_username) {
		$sql="select * from user, profil where use_username='$use_username' and use_profil=pro_id ";
		$result=self::$link->query($sql);
		return $result->fetchAll();		
	}

}
?>

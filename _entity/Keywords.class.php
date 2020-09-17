<?php
class Keywords extends Entity {
	public function __construct($id=0) {
		parent::__construct("keywords", "key_id",$id);
	}
}
?>

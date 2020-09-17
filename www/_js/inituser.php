<?php
//connexion à la base de données
$link = new PDO("mysql:host=localhost;port=3306;dbname=document_db","root","");
$link->exec("SET CHARACTER SET UTF8");
$sql="select * from user order by use_username";
$statement = $link->prepare($sql);
$statement->execute();
while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {	
	extract($row);
	echo "<option value='$use_username</option>";
}

?>
<?php
//connexion à la base de données
$link = new PDO("mysql:host=localhost;port=3306;dbname=document_db","root","");
$link->exec("SET CHARACTER SET UTF8");
if (isset($_GET["saisie"])) {
	$saisie=$_GET["saisie"];
	$sql="select * from documents where doc_label like '$saisie%' order by name";
} else if (isset($_GET["key"])) {
	$id=$_GET["key"];
	$sql="select * from search, documents, keywords  where sea_documents=doc_id and sea_keywords=key_id and key_id='$id'";
} else {
	exit;
}

$statement = $link->prepare($sql);
$statement->execute();

/*
while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {	
	extract($row);
	?>
	<option data-latitude="<?=$latitude?>" data-longitude="<?=$longitude?>"><?=$name?></option>
	<?php
} */

echo json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
?>
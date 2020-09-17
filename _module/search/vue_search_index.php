<?php
if (isset($_GET["id"])) {
	$documentCurrent = Documents::findDocument($_GET['id']);

?>
<h2>Keyword management for <?php echo $documentCurrent["doc_label"] ?></h2>
<p><a class="btn btn-primary" href="<?=hlien("search","edit","id",$_GET['id'])?>">New keyword pairing</a></p>
<?php }else { ?>
<h2>Keyword management</h2>
<p><a class="btn btn-primary" href="<?=hlien("search","edit","id",0)?>">New keyword pairing</a></p>
<?php } ?>
<label>   Search</label>

	<input type="text" id="search">
	
	<div id="resultat"></div>
	

<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Documents</th>
			<th>Keywords</th>
			<th>Edit</th>
			<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['sea_id'])?></td>
			<td><?=mhe($row['doc_label'])?></td>
			<td><?=mhe($row['key_label'])?></td>
			<td><a class="btn btn-warning" href="<?=hlien("search","edit","id",$row["sea_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("search","del","id",$row["sea_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
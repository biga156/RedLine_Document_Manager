<?php
if (isset($_GET["id"])) {
	$documentCurrent = Documents::findDocument($_GET['id']);

?> <h2>All the files of <?php echo $documentCurrent["doc_label"] ?></h2>
<a class="btn btn-primary" href="<?= hlien("files", "edit", "id", $_GET['id']) ?>">Add files</a>
<?php	 }else {?>
	<h2>Files</h2>
	<p><a class="btn btn-primary" href="<?= hlien("files", "edit", "id", 0) ?>">Add files</a></p>
<?php } ?>

	<label>   Search</label>
	<input type="text" id="search">
	
	<div id="resultat"></div>
	



<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>

			<th>Id</th>
			<th>Name</th>
			<th>Extension</th>
			<th>Size(KB)</th>
			<th>Type</th>
			<th>Src</th>
			<th>Documents</th>
			<th>User</th>
			<th>Open</th>
			<th>Download</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($result as $row) {
			extract($row); ?>
			<tr>

				<td><?= mhe($row['fil_id']) ?></td>
				<td><?= mhe($row['fil_name']) ?></td>
				<td><?= mhe($row['fil_extension']) ?></td>
				<td><?= mhe($row['fil_size']) ?></td>
				<td><?= mhe($row['fil_type']) ?></td>
				<td><?= mhe($row['fil_src']) ?></td>
				<td><?= mhe($row['doc_label']) ?></td>
				<td><?= mhe($row['use_username']) ?></td>
				<td><a class="btn btn-primary" href="<?= hlien("files", "open", "id", $row["fil_id"]) ?>">Open</a></td>
				<td><a class="btn btn-primary" href="<?= hlien("files", "download", "fil_id", $row["fil_id"]) ?>">Download</a></td>
				<td><a class="btn btn-danger" href="<?= hlien("files", "del", "fil_id", $row["fil_id"]) ?>">Delete</a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
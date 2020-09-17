    <h2>acces</h2>
    <p><a class="btn btn-primary" href="<?=hlien("acces","edit","id",0)?>">Nouveau acces</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Documents</th>
			<th>User</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['acc_id'])?></td>
			<td><?=mhe($row['acc_documents'])?></td>
			<td><?=mhe($row['acc_user'])?></td><td><a class="btn btn-warning" href="<?=hlien("acces","edit","id",$row["acc_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("acces","del","id",$row["acc_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
    <h2>user</h2>
    <p><a class="btn btn-primary" href="<?=hlien("user","edit","id",0)?>">Nouveau user</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Email</th>
			<th>Username</th>
			<th>Profil</th>
			<th>Edit</th>
			<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['use_id'])?></td>
			<td><?=mhe($row['use_nom'])?></td>
			<td><?=mhe($row['use_prenom'])?></td>
			<td><?=mhe($row['use_email'])?></td>
			<td><?=mhe($row['use_username'])?></td>
			<td><?=mhe($row['use_profil'])?></td><td><a class="btn btn-warning" href="<?=hlien("user","edit","id",$row["use_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("user","del","id",$row["use_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
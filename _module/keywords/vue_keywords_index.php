    <h2>keywords</h2>
    <p><a class="btn btn-primary" href="<?=hlien("keywords","edit","id",0)?>">Nouveau keywords</a></p>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
			<th>Id</th>
			<th>Label</th><th>modifier</th>
				<th>supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['key_id'])?></td>
			<td><?=mhe($row['key_label'])?></td><td><a class="btn btn-warning" href="<?=hlien("keywords","edit","id",$row["key_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("keywords","del","id",$row["key_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
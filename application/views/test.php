<table>
	<tr>
		<td>id</td>
		<td>name</td>
		<td>description</td>
	</tr>

<?php foreach ($name->result() as $row) { ?>
	<tr>
		<td><?= $row->id ?></td>
		<td><?= $row->name ?></td>
		<td><?= $row->description ?></td>
	</tr>
<?php } ?>

</table>
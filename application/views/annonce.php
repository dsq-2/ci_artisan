<div class="container">
	<table class="table table-hover mt-5">
		<thead class="table-light">
		<tr>
			<th scope="col">Annonces</th>
			<th scope="col">code postal</th>
			<th scope="col">ville</th>
			<th scope="col">Date de publication</th>
		</tr>
		</thead>
		
		<tr class="">
		<tbody>
		<?php foreach($projets as $row):?>
				<th>
					<div>
						<h5 class="fst-italic"><?php echo $row->titre?></h5>			
						<p><?php echo $row->description ?></p>
					</div>
				</th>
				<td class="text-center"><?php echo $row->cp ?></td>
				<td><?php echo $row->ville?></td>
				<td><?php echo $row->createdAt?></td>
			</tbody>
		<?php endforeach; ?>
	</table>
	
	
</div>

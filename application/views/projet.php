<div class="container">

	<div class="card border-light mt-5 shadow-sm p-3" >
		<div class="card-header"><h1 class="mt-5 mb-5">Quel projet souhaiterez vous realiser ?</h1></div>
			<div class="card-body">
				<!-- <h4 class="card-title">Secondary card title</h4> -->
				<p class="card-text">Décrivez en quelques lignes vos travaux à réaliser et entrez en contact avec des artisans qualifiés près de chez vous.</p>
				<form action="create" method = 'POST'>
					<div class="row ">
						<div class="col m-0 p-0">
							<label for="codePostal" class="form-label mt-4">code postal</label>
							<input type="text" class="form-control" name="cp" id="" placeholder="code postal">
							<small><?php echo form_error('cp'); ?></small>
						</div>
						<div class="col ms-2 p-0">
							<label for="ville" class="form-label mt-4">Ville</label>
							<input type="text" class="form-control" name="ville" id="" placeholder="ville du chantier à réaliser">
							<?php echo form_error('ville'); ?>
						</div>
						
					</div>
			</div>
					<div class="form-group">
						<label for="titre" class="form-label mt-4">Titre</label>
						<input type="text" class="form-control" id=""  name="titre"placeholder="titre">
						<?php echo form_error('titre'); ?>
					</div>	
					<div class="form-group">
						<label for="description" class="form-label mt-4">description</label>
						<textarea class="form-control" id="" name="description" rows="10"></textarea>
						<?php echo form_error('description'); ?>
					</div>
					<div class="mt-2">
						<button type="submit" name="publier" class="btn btn-primary">publier</button>
					</div>
				</form>
			</div>
		</div>


</div>

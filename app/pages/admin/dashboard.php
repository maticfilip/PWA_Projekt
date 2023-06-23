<?php include '../app/pages/includes/header.php'; ?>


<h4>Statistika</h4>

<div class="row justify-content-center">
	
	<div class="m-1 col-md-4 bg-light rounded shadow border text-center">
		<h1><i class="bi bi-person-video3"></i></h1>
		<div>
			Admini
		</div>
		<?php 

			$query = "select count(id) as num from users where role = 'admin'";
			$res = query_row($query);
		?>
		<h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	</div>
	
	<div class="m-1 col-md-4 bg-light rounded shadow border text-center">
		<h1><i class="bi bi-person-circle"></i></h1>
		<div>
			Korisnici
		</div>
		<?php 

			$query = "select count(id) as num from users where role = 'user'";
			$res = query_row($query);
		?>
		<h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	</div>

	<div class="m-1 col-md-4 bg-light rounded shadow border text-center">
		<h1><i class="bi bi-tags"></i></h1>
		<div>
			Kategorije
		</div>
		<?php 

			$query = "select count(id) as num from categories";
			$res = query_row($query);
		?>
		<h1 class="text-primary"><?=$res['num'] ?? 0?></h1>	</div>

	<div class="m-1 col-md-4 bg-light rounded shadow border text-center">
		<h1><i class="bi bi-file-post"></i></h1>
		<div>
			Vijesti
		</div>
		<?php 

			$query = "select count(id) as num from posts";
			$res = query_row($query);
		?>
		<h1 class="text-primary"><?=$res['num'] ?? 0?></h1>
	</div>

</div>

<?php include '../app/pages/includes/footer.php'; ?>

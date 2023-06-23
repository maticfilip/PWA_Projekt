<?php if($action=='add'):?>
    <div class="col-md-6 mx-auto">
        <form method="post">
        <h1 class="h3 mb-3 fw-normal">Kreirajte račun</h1>

        <?php if (!empty($errors)):?>
        <div class="alert alert-danger">Molimo Vas popravit greške ispod</div>
        <?php endif;?>

        <div class="my-2">
	    	<label class="d-block">
	    		<img class="mx-auto d-block image-preview-edit" src="<?=get_image('')?>" style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;">
	    		<input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
	    	</label>
	    	<?php if(!empty($errors['image'])):?>
		      <div class="text-danger"><?=$errors['image']?></div>
		    <?php endif;?>

	    	<script>
	    		
	    		function display_image_edit(file)
	    		{
	    			document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
	    		}
	    	</script>
	    </div>

      <div class="form-floating">
	      <input value="<?=old_value('username')?>" name="username" type="text" class="form-control mb-2" id="floatingInput" placeholder="Korisničko ime">
	      <label for="floatingInput">Korisničko ime</label>
	    </div>
	      <?php if(!empty($errors['username'])):?>
	      <div class="text-danger"><?=$errors['username']?></div>
	      <?php endif;?>

	    <div class="form-floating">
	      <input value="<?=old_value('email')?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
	      <label for="floatingInput">Email addresa</label>
	    </div>
	      <?php if(!empty($errors['email'])):?>
	      <div class="text-danger"><?=$errors['email']?></div>
	      <?php endif;?>

	    <div class="form-floating my-3">
	      <select name="role" class="form-select">
	      	<option value="user">Korisnik</option>
	      	<option value="admin">Admin</option>
	      </select>
	      <label for="floatingInput">Uloga</label>
	    </div>
	      <?php if(!empty($errors['role'])):?>
	      <div class="text-danger"><?=$errors['role']?></div>
	      <?php endif;?>

	    <div class="form-floating">
	      <input value="<?=old_value('password')?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Lozinka">
	      <label for="floatingPassword">Lozinka</label>
	    </div>
	      <?php if(!empty($errors['password'])):?>
	      <div class="text-danger"><?=$errors['password']?></div>
	      <?php endif;?>

	    <div class="form-floating">
	      <input value="<?=old_value('retype_password')?>" name="retype_password" type="password" class="form-control" id="floatingPassword" placeholder="Ponovite lozinku">
	      <label for="floatingPassword">Ponovite lozinku</label>
	    </div>

	    <a href="<?=ROOT?>/admin/users">
		    <button class="mt-4 btn btn-lg btn-primary" type="button">Nazad</button>
		</a>
	    <button class="mt-4 btn btn-lg btn-primary float-end" type="submit">Kreiraj</button>
    </form>
  </div>

<?php elseif($action=='edit'):?>

    <div class="col-md-6 mx-auto">
        <form method="post" enctype="multipart/form-data">

            <h1 class="h3 mb-3 fw-normal">Uredi račun</h1>

            <?php if(!empty($row)):?>

              <?php if (!empty($errors)):?>
                <div class="alert alert-danger">Molimo Vas popravite greške ispod</div>
              <?php endif;?>

              <div class="my-2">
                <label class="d-block">
                  <img class="mx-auto d-block image-preview-edit" src="<?=get_image($row['image'])?>" style="cursor: pointer;width: 150px;height: 150px;object-fit: cover;">
                  <input onchange="display_image_edit(this.files[0])" type="file" name="image" class="d-none">
                </label>
                <?php if(!empty($errors['image'])):?>
                  <div class="text-danger"><?=$errors['image']?></div>
                <?php endif;?>

                <script>
                  
                  function display_image_edit(file)
                  {
                    document.querySelector(".image-preview-edit").src = URL.createObjectURL(file);
                  }
                </script>
              </div>

              <div class="form-floating">
                <input value="<?=old_value('username', $row['username'])?>" name="username" type="text" class="form-control mb-2" id="floatingInput" placeholder="Korisničko ime">
                <label for="floatingInput">Korisničko ime</label>
              </div>
                <?php if(!empty($errors['username'])):?>
                <div class="text-danger"><?=$errors['username']?></div>
                <?php endif;?>

              <div class="form-floating">
                <input value="<?=old_value('email', $row['email'])?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email addresa</label>
              </div>
                <?php if(!empty($errors['email'])):?>
                <div class="text-danger"><?=$errors['email']?></div>
                <?php endif;?>

              <div class="form-floating my-3">
                <select name="role" class="form-select">
                  <option <?=old_select('role','user',$row['role'])?> value="user">Korisnik</option>
                  <option <?=old_select('role','admin',$row['role'])?> value="admin">Admin</option>
                </select>
                <label for="floatingInput">Uloga</label>
              </div>
                <?php if(!empty($errors['role'])):?>
                <div class="text-danger"><?=$errors['role']?></div>
                <?php endif;?>

              <div class="form-floating">
                <input value="<?=old_value('password')?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Lozinka ( ostavite prazno ako želite ostaviti istu )</label>
              </div>
                <?php if(!empty($errors['password'])):?>
                <div class="text-danger"><?=$errors['password']?></div>
                <?php endif;?>

              <div class="form-floating">
                <input value="<?=old_value('retype_password')?>" name="retype_password" type="password" class="form-control" id="floatingPassword" placeholder="Retype Password">
                <label for="floatingPassword">Ponovite lozinku</label>
              </div>

              <a href="<?=ROOT?>/admin/users">
                <button class="mt-4 btn btn-lg btn-primary" type="button">Back</button>
            </a>
              <button class="mt-4 btn btn-lg btn-primary  float-end" type="submit">Save</button>
            <?php else:?>

            <div class="alert alert-danger text-center">Korisnik nije pronađen</div>
            <?php endif;?>

    </form>
  </div>
<?php elseif($action=='delete'):?>

    <div class="col-md-6 mx-auto">
        <form method="post">
        <h1 class="h3 mb-3 fw-normal">Izbriši račun</h1>

        <?php if(!empty($row)):?>

            <?php if (!empty($errors)):?>
            <div class="alert alert-danger">Molimo Vas popravite greške ispod</div>
            <?php endif;?>

            <div class="form-floating">
                <div class="form-control mb-2"><?=old_value('username',$row['username'])?>
                </div>
            </div>
            <?php if(!empty($errors['username'])):?>
            <div class="text-danger"><?=$errors['username']?></div>
            <?php endif;?>

            <div class="form-floating">
                <div class="form-control mb-2"><?=old_value('email',$row['email'])?>
                </div>
            </div>
            <?php if(!empty($errors['email'])):?>
            <div class="text-danger"><?=$errors['email']?></div>
            <?php endif;?>

           
            <a href="<?=ROOT?>/admin/users">
		        <button class="mt-4 btn btn-lg btn-primary" type="button">Nazad</button>
		    </a>
                <button class="mt-4 btn btn-lg btn-danger" type="submit">Obriši</button>
            
        <?php else:?>
        
          <div class="alert alert-danger text-center">Korisnik nije pronađen</div>
        <?php endif;?>
    </form>
  </div>

<?php else:?>

    <h4 class="mt-5">
		Korisnici 
		<a href="<?=ROOT?>/admin/users/add">
			<button class="btn btn-primary">Dodaj novog</button>
		</a>
	</h4>

<div class="table-responsive">
<table class="table">
		
		<tr>
			<th>#</th>
			<th>Korisničko ime</th>
			<th>Email</th>
			<th>Uloga</th>
			<th>Slika</th>
			<th>Datum</th>
			<th>Mogućnosti</th>
		</tr>
		<?php  
			$limit = 10;
			$offset = ($PAGE['page_number'] - 1) * $limit;

			$query = "select * from users order by id desc limit $limit offset $offset";
			$rows = query($query);
		?>

		<?php if(!empty($rows)):?>
			<?php foreach($rows as $row):?>
			<tr>
				<td><?=$row['id']?></td>
				<td><?=esc($row['username'])?></td>
				<td><?=$row['email']?></td>
				<td><?=$row['role']?></td>
				<td>
					<img src="<?=get_image($row['image'])?>" style="width: 100px;height: 100px;object-fit: cover;">
				</td>
				<td><?=date("jS M, Y",strtotime($row['date']))?></td>
				<td>
					<a href="<?=ROOT?>/admin/users/edit/<?=$row['id']?>">
						<button class="btn btn-warning text-white btn-sm"><i class="bi bi-pencil-square"></i></button>
					</a>
					<a href="<?=ROOT?>/admin/users/delete/<?=$row['id']?>">
						<button class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button>
					</a>
				</td>
			</tr>
			<?php endforeach;?>
		<?php endif;?>
	</table>
    <div class="col-md-12 mb-4">
		<a href="<?=$PAGE['first_link']?>">
			<button class="btn btn-primary">Prva stranica</button>
		</a>
		<a href="<?=$PAGE['prev_link']?>">
			<button class="btn btn-primary">Prošla stranica</button>
		</a>
		<a href="<?=$PAGE['next_link']?>">
			<button class="btn btn-primary float-end">Sljedeća stranica</button>
		</a>
	</div>
</div>

<?php endif;?>
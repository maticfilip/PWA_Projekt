<?php if($action == 'add'):?>

<div class="col-md-6 mx-auto">
  <form method="post" enctype="multipart/form-data">

    <h1 class="h3 mb-3 fw-normal">Kreirajte kategoriju vijesti</h1>

    <?php if (!empty($errors)):?>
      <div class="alert alert-danger">Molimo Vas popravite greške ispod</div>
    <?php endif;?>

    <div class="form-floating">
      <input value="<?=old_value('category')?>" name="category" type="text" class="form-control mb-2" id="floatingInput" placeholder="Category">
      <label for="floatingInput">Kategorija</label>
    </div>
      <?php if(!empty($errors['category'])):?>
      <div class="text-danger"><?=$errors['category']?></div>
      <?php endif;?>

    <div class="form-floating my-3">
      <select name="disabled" class="form-select">
          <option value="0">Da</option>
          <option value="1">Ne</option>
      </select>
      <label for="floatingInput">Aktivno</label>
    </div>

    <a href="<?=ROOT?>/admin/categories">
        <button class="mt-4 btn btn-lg btn-primary" type="button">Nazad</button>
    </a>
    <button class="mt-4 btn btn-lg btn-primary float-end" type="submit">Kreiraj</button>
   
  </form>
</div>

<?php elseif($action == 'edit'):?>

<div class="col-md-6 mx-auto">
  <form method="post" enctype="multipart/form-data">

    <h1 class="h3 mb-3 fw-normal">Uredi kategoriju</h1>

    <?php if(!empty($row)):?>

        <?php if (!empty($errors)):?>
          <div class="alert alert-danger">Molimo Vas popravite greške ispod</div>
        <?php endif;?>

        <div class="form-floating">
          <input value="<?=old_value('category', $row['category'])?>" name="category" type="text" class="form-control mb-2" id="floatingInput" placeholder="Category">
          <label for="floatingInput">Kategorija</label>
        </div>
          <?php if(!empty($errors['category'])):?>
          <div class="text-danger"><?=$errors['category']?></div>
          <?php endif;?>

        <div class="form-floating my-3">
          <select name="disabled" class="form-select">
              <option <?=old_select('disabled','0',$row['disabled'])?> value="0">Da</option>
              <option <?=old_select('disabled','1',$row['disabled'])?> value="1">Ne</option>
          </select>
          <label for="floatingInput">Aktivno</label>
        </div>


        <a href="<?=ROOT?>/admin/categories">
            <button class="mt-4 btn btn-lg btn-primary" type="button">Nazad</button>
        </a>
        <button class="mt-4 btn btn-lg btn-primary  float-end" type="submit">Sačuvaj</button>
    <?php else:?>

        <div class="alert alert-danger text-center">Korisnik nije pronađen</div>
    <?php endif;?>

  </form>
</div>

<?php elseif($action == 'delete'):?>

<div class="col-md-6 mx-auto">
  <form method="post">

    <h1 class="h3 mb-3 fw-normal">Obriši kategoriju</h1>

    <?php if(!empty($row)):?>

        <?php if (!empty($errors)):?>
          <div class="alert alert-danger">Molimo Vas popravite greške ispod</div>
        <?php endif;?>

        <div class="form-floating">
          <div class="form-control mb-2" ><?=old_value('category', $row['category'])?></div>
        </div>
          <?php if(!empty($errors['category'])):?>
          <div class="text-danger"><?=$errors['category']?></div>
          <?php endif;?>

        <div class="form-floating">
          <div class="form-control mb-2" ><?=old_value('slug', $row['slug'])?></div>
        </div>
          <?php if(!empty($errors['slug'])):?>
          <div class="text-danger"><?=$errors['slug']?></div>
          <?php endif;?>


        <a href="<?=ROOT?>/admin/categories">
            <button class="mt-4 btn btn-lg btn-primary" type="button">Nazad</button>
        </a>
        <button class="mt-4 btn btn-lg btn-danger  float-end" type="submit">Obriši</button>
    <?php else:?>

        <div class="alert alert-danger text-center">Korisnik nije pronađen</div>
    <?php endif;?>

  </form>
</div>

<?php else:?>

<h4 class="mt-5">
    Kategorije 
    <a href="<?=ROOT?>/admin/categories/add">
        <button class="btn btn-primary">Dodaj novu</button>
    </a>
</h4>

<div class="table-responsive">
<table class="table">
    
    <tr>
        <th>#</th>
        <th>Kategorija</th>
        <th>Slug</th>
        <th>Aktivno</th>
        <th>Mogućnosti</th>
    </tr>
    <?php  
        $limit = 10;
        $offset = ($PAGE['page_number'] - 1) * $limit;

        $query = "select * from categories order by id desc limit $limit offset $offset";
        $rows = query($query);
    ?>

    <?php if(!empty($rows)):?>
        <?php foreach($rows as $row):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=esc($row['category'])?></td>
            <td><?=$row['slug']?></td>
            <td><?=$row['disabled'] ? 'No':'Yes'?></td>
            <td>
                <a href="<?=ROOT?>/admin/categories/edit/<?=$row['id']?>">
                    <button class="btn btn-warning text-white btn-sm"><i class="bi bi-pencil-square"></i></button>
                </a>
                <a href="<?=ROOT?>/admin/categories/delete/<?=$row['id']?>">
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
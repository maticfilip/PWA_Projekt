<?php

if(!empty($_POST))
{
  $errors = [];

  $query = "select * from users where email = :email limit 1";
  $row = query($query, ['email'=>$_POST['email']]);

  if($row)
  {
    $data = [];
    if(password_verify($_POST['password'], $row[0]['password']))
    {
      authenticate($row[0]);
      redirect('admin');

    }else{
      $errors['email'] = "wrong email or password";
    }

  }else{
    $errors['email'] = "wrong email or password";
  }
}

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?=ROOT?>/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Login - Filip Matic</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }


    
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/signin.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/custom.css" rel="stylesheet">

  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
   
    
<main class="form-signin w-100 m-auto">
<form method="post">
    <h1 class="h3 mb-3 fw-normal"><b>Prijava</b></h1>

      <?php if (!empty($errors['email'])):?>
        <div class="alert alert-danger"><?=$errors['email']?></div>
      <?php endif;?>

    <div class="form-floating">
      <input value="<?=old_value('email')?>" name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email adresa</label>
    </div>
    <div class="form-floating">
      <input value="<?=old_value('password')?>" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Lozinka">
      <label for="floatingPassword">Lozinka</label>
    </div>

    <div class="my-2">Nemate račun?<a href="<?=ROOT?>/signup">Kreirajte ga!</a></div>
    <div class="checkbox mb-3">
      <label>
        <input name="remember" type="checkbox" value="1"> Zapamti me 
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Prijava</button>
    <p class="mt-5 mb-3 text-muted">&copy; <?= date("Y")?></p>
  </form>
</main>
<script src="<?=ROOT?>/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>

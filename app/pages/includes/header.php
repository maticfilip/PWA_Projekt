<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../<?=ROOT?>/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home - Filip Matic</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <style>

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }


    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/header.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
  


  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="<?=ROOT?>" class="nav-link px-2 link-secondary">Naslovnica</a></li>
          <li><a href="app/core/pages/blog.php" class="nav-link px-2 link-body-emphasis">Vijesti</a></li>
          <li><a href="<?=ROOT?>/search" class="nav-link px-2 link-body-emphasis">Traži</a></li>
          <li><a href="<?=ROOT?>/contact" class="nav-link px-2 link-body-emphasis"> Kontakt</a></li>
          <li>
          <?php if(logged_in()):?>
            <div class="dropdown text-end nav-link px-2 link-dark">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Kategorije
              </a>
          <ul class="dropdown-menu text-small">
          <?php  

              $query = "select * from categories order by id desc";
              $categories = query($query);
              ?>
              <?php if(!empty($categories)):?>
              <?php foreach($categories as $cat):?>
                <li><a class="dropdown-item" href="<?=ROOT?>/category/<?=$cat['slug']?>"><?=$cat['category']?></a></li>
              <?php endforeach;?>
              <?php endif;?>
          </ul>
        </div>
        <?php endif;?>
          </li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="<?=ROOT?>/search">
        <div class="input-group">
          <input name="find" type="search" class="form-control" placeholder="Upišite pojam" aria-label="Search" value="<?=$_GET['find'] ?? ''?>">
          <button class="btn btn-primary"> Nađi </button>
        </div>
        </form>

        
        
      </div>
    </div>
  </header>
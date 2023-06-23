<div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Navigacija</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Naslovnica</a></li>
          <li class="nav-item mb-2"><a href="<?=ROOT?>/login" class="nav-link p-0 text-body-secondary">Prijava</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kontakt</a></li>
        </ul>
      </div>

      

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Pretplata na newsletter</h5>
          <p>Obavijesti o novim vijestima</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Vaša email adresa</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Vaša email adresa">
            <button class="btn btn-primary" type="button">Pretplata</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2023 Filip Matić,  All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>
<script src="../<?=ROOT?>/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
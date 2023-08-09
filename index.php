<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="form_full">
    <header>
        <img src="https://ecampus.i-tech.ac.id/tech/img/logo_perguruanTinggi_18.png" alt="logo">
      </header>
      <h4 class="display-4 text-center">Form Absen</h4><hr>
      <form action="php/create.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
      <?php echo $_GET['error']; ?>
      </div>
      <?php } ?>
        <div class="mb-3">
          <label for="name" >Nama</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_GET['name'])) echo($_GET['name']); ?>" placeholder="Masukan Nama">
        </div>
        <div class="mb-3">
          <label for="email">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" value="<?php if(isset($_GET['nim'])) echo($_GET['nim']); ?>" placeholder="Masukan NIM">
        </div>
        <div class="mb-3">
          <label for="email" >Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($_GET['email'])) echo($_GET['email']); ?>"placeholder="Masukan Email">
        </div>
        <div class="mb-3">
          <label for="prodi" >Prodi</label>
          <input type="text" class="form-control" id="prodi" name="prodi" value="<?php if(isset($_GET['prodi'])) echo($_GET['prodi']); ?>"placeholder="Masukan Prodi">
        </div>
        <button type="submit" class="btn btn-primary" name="create" >Submit</button>
        <a href="read.php" class="btn btn-outline-secondary" >Lihat Data</a>
      </form>
      <br>
      <div class="form-footer text-center">
        <footer>
          <b>Copyright &#169; 2023 | Pis
        </footer>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
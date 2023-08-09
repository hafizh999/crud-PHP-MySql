<?php include 'php/update.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
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
      <h4 class="display-6 text-center">Form Absen</h4><hr>
      <form action="php/update.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
      <?php echo $_GET['error']; ?>
      </div>
      <?php } ?>
        <div class="mb-3">
          <label for="name" >Nama</label>
          <input type="text" class="form-control" id="name" name="name" value="<?=$row['name'] ?>">
        </div>
        <div class="mb-3">
          <label for="email">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" value="<?=$row['nim'] ?>">
        </div>
        <div class="mb-3">
          <label for="email" >Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?=$row['email'] ?>">
        </div>
        <div class="mb-3">
          <label for="prodi" >Prodi</label>
          <input type="text" class="form-control" id="prodi" name="prodi" value="<?=$row['prodi'] ?>">
        </div>
        <input type="text" name="id" value="<?=$row['id']?>" hidden >

        <button type="submit" class="btn btn-primary" name="update" >Update</button>
        <a href="read.php" class="btn btn-secondary" >Lihat Data</a>
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
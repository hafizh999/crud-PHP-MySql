<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
  <div class="container">
  <h4 class="display-6 text-center">Data Mahasiswa</h4><hr>
  <?php if (isset($_GET['error'])) { ?>
    <div class="alert alert-success" role="alert">
    <?php echo $_GET['success']; ?>
    </div>
<?php } ?>
  <?php if (mysqli_num_rows($result)) { ?>  
  <table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" >Name</th>
      <th scope="col" >NIM</th>
      <th scope="col">Email</th>
      <th scope="col">Prodi</th>
      <th scope="col">Pilihan</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $i = 0;
      while($rows = mysqli_fetch_assoc($result)){
      $i++;
    ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$rows['name']?></td>
      <td><?php echo $rows['nim'];?></td>
      <td><?php echo $rows['email'];?></td>
      <td><?php echo $rows['prodi'];?></td>
      <td><a href="update.php?id=<?=$rows['id']?>" class="btn btn-danger">Update</a>
          <a href="php/delete.php?id=<?=$rows['id']?>" class="btn btn-success">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
  <div class="link-right" >
    <a href="index.php" class="btn btn-primary">Tambah</a>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
<?php 

if (isset($_GET['id'])) {
  include "db_conn.php";

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
  }

  $id = validate($_GET['id']);

  $sql  = "SELECT * FROM users WHERE id=$id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  }else {
    header("Location: read.php");
  }

}else if(isset($_POST['update'])){
  include "../db_conn.php";
  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
  }

  $name = validate($_POST['name']);
  $nim = validate($_POST['nim']);
  $email = validate($_POST['email']);
  $prodi = validate($_POST['prodi']);
  $id = validate($_POST['id']);


  if (empty($name)) {
    header("Location: ../update.php?id=$id&error=Masukan Nama");
  }else if (empty($nim)){
    header("Location: ../update.php?id=$id&error=Masukan NIM");
  }else if(empty($email)){
    header("Location: ../update.php?id=$id&error=Masukan Email");
  }else if(empty($prodi)) {
    header("Location: ../update.php?id=$id&error=Masukan Prodi");
  }else {

     $sql = "UPDATE users
            SET name='$name', nim='$nim', email='$email', prodi='$prodi'
            WHERE id=$id ";
     $result = mysqli_query($conn, $sql);
     if ($result) {
      header("Location: ../read.php?success=successfully updated");
     }else {
      header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
     }
  }
}
else {
  header("Location: read.php");
}
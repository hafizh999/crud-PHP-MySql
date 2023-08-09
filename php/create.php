<?php


if(isset($_POST['create'])) {
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

  $user_data = 'name='.$name. '&nim=' .$nim. '&email=' .$email. '&prodi=' .$prodi;

  if (empty($name)) {
    header("Location: ../index.php?error=Masukan Nama&$user_data");
  }else if (empty($nim)){
    header("Location: ../index.php?error=Masukan NIM&$user_data");
  }else if(empty($email)){
    header("Location: ../index.php?error=Masukan Email&$user_data");
  }else if(empty($prodi)) {
    header("Location: ../index.php?error=Masukan Prodi&$user_data");
  }else {
     $sql = "INSERT INTO users(name, nim, email, prodi) VALUES('$name', '$nim', '$email', '$prodi')";
     $result = mysqli_query($conn, $sql);
     if ($result) {
      header("Location: ../read.php?success=successfully created");
     }else {
      header("Location: ../index.php?error=unknown error occurred&$user_data");
     }
  }
}

<?php
    include "../enkcaesar.php";
    include "../koneksi.php";
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $id = $_POST['identitas'];
    $nama = $_POST['name'];
    $pass_enc = enkcaesr($pass);
    $proses = mysqli_query($konek,"INSERT INTO user VALUE('$email', '$pass_enc', '$id', '$nama')") or die(mysqli_error($konek));
    if ($proses){
        echo "<script>alert('Selamat bergabung bersama kami ".$nama."');document.location= '../Login/Login_User.html'</script>";
    }
    else{
        echo mysqli_error($konek);
    }

?>
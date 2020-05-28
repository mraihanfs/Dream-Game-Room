<?php
    
    include "../koneksi.php";
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $id = $_POST['identitas'];
    $nama = $_POST['name'];

    $proses = mysqli_query($konek,"INSERT INTO user VALUE('$email', '$pass', '$id', '$nama')") or die(mysqli_error($konek));
    if ($proses){
        echo "<script>alert('Selamat bergabung bersama kami ".$nama."');document.location= '../index.php'</script>";
    }
    else{
        echo mysqli_error($konek);
    }

?>
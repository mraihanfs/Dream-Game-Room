<?php
    include "../koneksi.php";
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $id = $_POST['Nik'];
    $nama = $_POST['Nama'];

    $proses = mysqli_query($konek,"INSERT INTO operator VALUES('$username', '$pass', '$id', '$nama')");
    if ($proses){
        echo "<script>alert('Pendaftaran berhasil dilakukan');document.location= 'panel_ad_operator.php'</script>";
    }
    else{
        echo mysqli_error($konek);
    }

?>
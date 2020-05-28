<?php
    include '../koneksi.php';
    session_start();
    $user = $_POST['email'];
    $pass = $_POST['password'];

    $proses = mysqli_query($konek, "SELECT * FROM admin WHERE username = '$user' AND pass = '$pass' ") or die(mysqli_error($konek));
    $rows = mysqli_num_rows($proses);
    if ($rows==1){
        echo "<script>alert('Anda berhasil masuk');document.location= '../admin/panel_ad_operator.php'</script>";
        $data = mysqli_fetch_assoc($proses);
        $_SESSION['nameAD'] = $data['nama'];
        
    }else{
        echo "<script>alert('Password atau Admin ID anda salah'); document.location= './Login_Admin.html'</script></script>";
    }


?>
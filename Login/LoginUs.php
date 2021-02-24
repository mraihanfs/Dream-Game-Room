<?php
    include '../enkcaesar.php';
    include '../koneksi.php';
    session_start();
    $user = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_enc = enkcaesr($pass);
    $proses = mysqli_query($konek, "SELECT * FROM user WHERE email = '$user' AND pass = '$pass_enc' ") or die(mysqli_error($konek));
    $rows = mysqli_num_rows($proses);
    if($rows==1){
        echo "<script>alert('Anda berhasil masuk');document.location= '../dashboard.php'</script>";
        $data = mysqli_fetch_assoc($proses);
        $_SESSION['name']=$user;
        $_SESSION['id']=$data['NID'];
        
    }else{
        echo "<script>alert('Password atau email anda salah'); document.location= './Login_User.html'</script>";
    }


?>
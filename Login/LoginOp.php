<?php
    include '../koneksi.php';
    session_start();
    $user = $_POST['email'];
    $pass = $_POST['password'];

    $proses = mysqli_query($konek, "SELECT * FROM operator WHERE username = '$user' AND pass = '$pass' ") or die(mysqli_error($konek));
    $rows = mysqli_num_rows($proses);
    if ($rows==1){
        echo "<script>alert('Anda berhasil masuk');document.location= '../op/panel_OP_Dashboard.php'</script>";
        $data = mysqli_fetch_assoc($proses);
        $_SESSION['nameOP'] = $data['nama'];
        
    }else{
        echo "<script>alert('Password atau Operator ID anda salah'); document.location= './Login_Operator.html'</script>";
    }


?>
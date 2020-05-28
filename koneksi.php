<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "dreamrg";

    $konek=mysqli_connect($host,$user,$pass,$db,3306) or die(mysqli_error());
    // if($konek){
    //     echo "Yay masuk";
    // }else echo "ada yang salah";
?>
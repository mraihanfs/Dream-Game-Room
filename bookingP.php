<?php
    include "koneksi.php";
    session_start();
    $noPC=$_POST["submit"];
    echo "$noPC";
    $tgl = date('y-m-d');
    $email = $_SESSION["name"];
    echo (mysqli_error($konek));
    $NID = $_SESSION['id'];
    $No = time();
    mysqli_query($konek, "UPDATE pc SET stats='Booked' WHERE nopc='$noPC'");
    $proses1 = mysqli_query($konek, "INSERT INTO resi VALUE('$No','$tgl','$noPC','$NID')");
    if($proses1){
        echo "<script>alert('Kami sudah merekam pemesanan anda');document.location= './my_Booking.php'</script>";
    }echo mysqli_error($konek);
    
?>
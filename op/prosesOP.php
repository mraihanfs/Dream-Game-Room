<?php 
    include "../koneksi.php";
    $status = explode(" ",$_GET['submit'])[0];
    $nPC =  explode(" ",$_GET['submit'])[1];
    if ($status == "Maintenance"){
        $test1 = mysqli_query($konek, "UPDATE pc SET stats='Maintenance' WHERE nopc = '$nPC'");
        if($test1){
            echo "<script>alert('Perubahan status PC telah berhasil');document.location= './panel_OP_Dashboard.php'</script>";
        }else{
            mysqli_error($konek);
        }
    }elseif ($status == "Playing"){
        $test1 = mysqli_query($konek, "UPDATE pc SET stats='Playing' WHERE nopc = '$nPC'");
        if($test1){
            echo "<script>alert('Perubahan status PC telah berhasil');document.location= './panel_OP_Dashboard.php'</script>";
        }else{
            mysqli_error($konek);
        }
    }elseif ($status == "Available"){
        $test1 = mysqli_query($konek, "UPDATE pc SET stats='Available' WHERE nopc = '$nPC'");
        if($test1){
            echo "<script>alert('Perubahan status PC telah berhasil');document.location= './panel_OP_Dashboard.php'</script>";
        }else{
            mysqli_error($konek);
        }
    }
?>
<?php
include "../koneksi.php";

$id = explode(":", $_POST['submit'])[2];
$opt1 = explode(":", $_POST['submit'])[0];
$opt2 = explode(":", $_POST['submit'])[1];

if ($opt1 == "OP") {
    if ($opt2 == "edit") {
        $username = $_POST['Username'];
        $pass = $_POST['Password'];
        $nama = $_POST['Nama'];
        $proses = mysqli_query($konek, "UPDATE operator SET username = '$username', pass='$pass', nama='$nama' WHERE NIK ='$id'");
        if ($proses) {
            echo "<script>alert('Perubahan berhasil dilakukan'); document.location='./panel_ad_operator.php'</script>";
        } else {
            echo mysqli_error($konek);
        }
    } elseif ($opt2 == "hapus") {
        $proses = mysqli_query($konek, "DELETE FROM operator WHERE NIK ='$id'");
        if ($proses) {
            echo "<script>alert('Penghapusan data berhasil dilakukan'); document.location='./panel_ad_operator.php'</script>";
        } else {
            echo mysqli_error($konek);
        }
    }
} elseif ($opt1 == "US") {
    if ($opt2 == "edit") {
        $username = $_POST['Email'];
        $pass = $_POST['Password'];
        $nama = $_POST['Nama'];
        $proses = mysqli_query($konek, "UPDATE user SET email = '$username', pass='$pass', nama='$nama' WHERE NID ='$id'");
        if ($proses) {
            echo "<script>alert('Perubahan berhasil dilakukan'); document.location='./panel_ad_user.php'</script>";
        } else {
            echo mysqli_error($konek);
        }
    } elseif ($opt2 == "hapus") {
        $proses = mysqli_query($konek, "DELETE FROM user WHERE NID ='$id'");
        if ($proses) {
            echo "<script>alert('Penghapusan data berhasil dilakukan'); document.location='./panel_ad_user.php'</script>";
        } else {
            echo mysqli_error($konek);
        }
    }
}

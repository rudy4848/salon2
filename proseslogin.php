<?php
include 'function.php';

// Get the form value
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$nohp = $_POST["nohp"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

// Insert query comman
$query = "INSERT INTO tb_user (nama,alamat,nohp,email,username,password) VALUE ('$nama', '$alamat', '$nohp','$email','$username','$password');";
$query .= "INSERT INTO tb_user (nama,username, password) VALUE ('$nama','$username', '$password')";


// Do insert query
if (mysqli_multi_query($con, $query) == 1) {
    ?>
    <script language="javascript">
        alert("Data berhasil dimasukkan");
        document.location="../login.php";
    </script>
    <?php
} else {
     $error = urlencode("Email Sudah Terdaftar Silahkan Login!");
            header("Location: ../login.php?pesan=$error");
}

// close mysql connection
mysqli_close($con); 

}

?>
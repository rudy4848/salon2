<?php
// Include DB connection file
include 'connection.php';

// untuk registrasi
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$nohp = $_POST["nohp"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
// enkripsi password

//INSERT DATABASE
$query = "INSERT INTO tb_user VALUES ('','$nama','$alamat','$nohp','$email','$username','$password')";


// Do insert query
if (mysqli_multi_query($conn, $query) === 1) {
?>
    <script language="javascript">
        alert("Data berhasil dimasukkan");
        document.location = "../login.php";
    </script>
<?php
} else {
    $error = urlencode("Email Sudah Terdaftar Silahkan Login!");
    header("Location: ../login.php?pesan=$error");
}

// close mysql connection
mysqli_close($conn);

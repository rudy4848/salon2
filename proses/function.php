// cek status
if (mysqli_connect_error()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// untuk registrasi
// function register($data)
// {
// global $conn;
// get data
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$nohp = $_POST["nohp"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
// enkripsi password

//INSERT DATABASE
$query = "INSERT INTO tb_user VALUES ('','$nama','$alamat','$nohp','$email','$username','$password')";

return mysqli_affected_rows($conn);
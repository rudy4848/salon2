<!DOCTYPE html>
<html>

<head>
    <title>Salon Nopi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <!-- start nav -->
    <nav>
        <div class="logo">
            SALON MISS LADIES
        </div>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="daftar.php">Daftar</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </nav>
    <!-- end nav -->

    <!-- start form daftar -->
    <h1>HALAMAN REGISTRASI</h1>
    <form action="proses/prosesdaftar.php" method="POST">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="alamat">alamat :</label>
                <input type="text" name="alamat" id="alamat" required>
            </li>
            <li>
                <label for="nohp">No HP :</label>
                <input type="text" name="nohp" id="nohp" required>
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password" required>
            </li>
            <li><input class="submit" type="submit" name="submit" value="submit">
            </li>
        </ul>
    </form>
</body>

</html>
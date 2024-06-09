<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT *FROM warung_gilang WHERE id=$id");
    $menu = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $merk = $_POST["merk"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "UPDATE warung_gilang SET nama='$nama',
    merk='$merk', email='$email' WHERE id=$id");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT MENU </title>
</head>
<body>
    <h1>FORM EDIT MENU</h1>

    <!--  REQUEST: GET, POST, PUT, PATCH-->
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $menu['nama'] ?>" type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="merk">merk</label>
        <input value="<?php echo $menu['merk'] ?>" type="text" id="merk" name="merk">
        <br>
        <br>
        <label for="email">Email</label>
        <input value="<?php echo $menu['email'] ?>" type="email" id="email" name="email">

        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./menu.php">Kembali ke halaman menu</a>
</body>
</html>
